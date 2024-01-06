<?php

namespace App\Http\Controllers;


use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function Index()
   {
      return view('frontend.index');
   } //end method
   public function Dashboard()
   {
      $user_id = Auth::user()->id;
      $booking = Booking::where('user_id', $user_id)->get('status');
      $pending = Booking::where('user_id', $user_id)->where('status', 0)->get();

      $Complete =  Booking::where('user_id', $user_id)->where('status', 1)->get();
      // dd($booking);
      return view('frontend.dashboard.user_dashboard', compact('booking','Complete','pending'));
   }
   public function UserProfile()
   {


      $id = Auth::user()->id;
      $profileData = User::find($id);
      return view('frontend.dashboard.edit_profile', compact('profileData'));
   } //end method

   public function UserStore(Request $request)
   {
      $id = Auth::user()->id;
      $data = User::find($id);
      $data->name = $request->name;
      $data->email = $request->email;
      $data->phone = $request->phone;
      $data->address = $request->address;

      if ($request->file('photo')) {
         $file = $request->file('photo');
         @unlink(public_path('upload/user_images/' . $data->photo));
         $filename = date('YmdHi') . $file->getClientOriginalName();
         $file->move(public_path('upload/user_images/'), $filename);
         $data['photo'] = $filename;
      }

      $data->save();

      $notification = array(
         'message' => 'Profile Updated Successfully',
         'alert-type' => 'success',
      );
      return redirect()->back()->with($notification);
   } //end  method

   public function UserLogout(Request $request)
   {
      Auth::guard('web')->logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      $notification = array(
         'message' => 'Logout Successfully',
         'alert-type' => 'info',
      );
      return redirect('/login')->with($notification);
   } //end method

   public function UserChangePassword()
   {

      return view('frontend.dashboard.user_change_password');
   }

   public function ChangePasswordStore(Request $request){

      // Validation 
      $request->validate([
          'old_password' => 'required',
          'new_password' => 'required|confirmed'
      ]);

      if(!Hash::check($request->old_password, auth::user()->password)){

          $notification = array(
              'message' => 'Old Password Does not Match!',
              'alert-type' => 'error'
          );

          return back()->with($notification);

      }

      /// Update The New Password 
      User::whereId(auth::user()->id)->update([
          'password' => Hash::make($request->new_password)
      ]);

      $notification = array(
          'message' => 'Password Change Successfully',
          'alert-type' => 'success'
      );

      return back()->with($notification); 

  }// End Method 
}
