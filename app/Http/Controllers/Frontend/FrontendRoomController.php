<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\RoomNumber;
use Illuminate\Http\Request;
use App\Models\BookArea;
use Intervention\Image\Facades\Image;
use App\Models\Room;
use App\Models\Booking;
use App\Models\MultiImage;
use App\Models\Facility;
use Carbon\CarbonPeriod;
use App\Models\RoomBookedDate;
use Carbon\Carbon;

class FrontendRoomController extends Controller
{
    public function AllFrontendRoomList(){

        $rooms = Room::latest()->get();
        return view('frontend.room.all_rooms',compact('rooms'));

    }//End method

    public function RoomDetailsPage($id){

        $roomdetails = Room::find($id);
        $multiImage = MultiImage::where('rooms_id',$id)->get();
        $facility = Facility::where('rooms_id',$id)->get();
        $roomnumber = RoomNumber::where('rooms_id',$id)->first();
       

        // dd($roomnuber);
        $room_id = $id;
        //when other rooms display, dont display current room details on other rooms section
        $otherRooms = Room::where('id' ,'!=', $id)->orderBy('id', 'DESC')->limit(2)->get();
        return view('frontend.room.room_details',compact('roomdetails','facility','multiImage', 'otherRooms','room_id','roomnumber'));
    }//End Method

    public  function BookingSearch(Request $request){

        $request->flash();

        if ($request->check_in == $request->check_out) {

            $notification = array(
                'message' => 'Choose the correct date',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }

        $sdate = date('Y-m-d',strtotime($request->check_in));
        $edate = date('Y-m-d',strtotime($request->check_out));
        $alldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate,$alldate);
        $dt_array = [];
        foreach ($d_period as $period) {
           array_push($dt_array, date('Y-m-d', strtotime($period)));
        }

        $check_date_booking_ids = RoomBookedDate::whereIn('book_date',$dt_array)->distinct()->pluck('booking_id')->toArray();

        $rooms = Room::withCount('room_numbers')->where('status',1)->get();

        return view('frontend.room.search_room',compact('rooms','check_date_booking_ids'));

    }//End Method

    public function SeacrhRoomDetails(Request $request, $id){
        $request->flash();

        $roomdetails = Room::find($id);
        $multiImage = MultiImage::where('rooms_id',$id)->get();
        $facility = Facility::where('rooms_id',$id)->get();

        //when other rooms display, dont display current room details on other rooms section
        $otherRooms = Room::where('id' ,'!=', $id)->orderBy('id', 'DESC')->limit(2)->get();
        $room_id = $id;

        return view('frontend.room.search_room_details',compact('roomdetails','facility','multiImage', 'otherRooms', 'room_id'));


    }//End Method

    public function CheckRoomAvailability(Request $request){

        $sdate = date('Y-m-d',strtotime($request->check_in));
        $edate = date('Y-m-d',strtotime($request->check_out));
        $alldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate,$alldate);
        $dt_array = [];
        foreach ($d_period as $period) {
           array_push($dt_array, date('Y-m-d', strtotime($period)));
        }

        $check_date_booking_ids = RoomBookedDate::whereIn('book_date',$dt_array)->distinct()->pluck('booking_id')->toArray();

        $room = Room::withCount('room_numbers')->find($request->room_id);

        $bookings = Booking::withCount('assign_rooms')->whereIn('id',$check_date_booking_ids)->where('rooms_id',$room->id)->get()->toArray();

        $total_book_room = array_sum(array_column($bookings,'assign_rooms_count'));

        $av_room = @$room->room_numbers_count-$total_book_room;

        $toDate = Carbon::parse($request->check_in);
        $fromDate = Carbon::parse($request->check_out);
        $nights = $toDate->diffInDays($fromDate);

        return response()->json(['available_room'=>$av_room, 'total_nights'=>$nights ]);
    }// End Method 



}
