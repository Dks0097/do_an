<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class GalleryController extends Controller
{
    public function AllGallery(){

        $gallery = Gallery::latest()->get();
        return view('backend.gallery.all_gallery',compact('gallery'));

    } // End Method 

    public function AddGallery(){
        return view('backend.gallery.add_gallery');
    } // End Method 

    public function StoreGallery(Request $request){

        $images = $request->file('photo_name');

        foreach ($images as $img) {
        $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->resize(550,550)->save('upload/gallery/'.$name_gen);
        $save_url = 'upload/gallery/'.$name_gen;

        Gallery::insert([
            'photo_name' => $save_url,
            'created_at' => Carbon::now(), 
        ]);
        } //  end foreach 

        $notification = array(
            'message' => 'Đã chèn thư viện thành công',
            'alert-type' => 'success'
        );

        return redirect()->route('all.gallery')->with($notification);

    }// End Method 

    public function EditGallery($id){

        $gallery = Gallery::find($id);
        return view('backend.gallery.edit_gallery',compact('gallery'));

    }// End Method 

    public function UpdateGallery(Request $request){

        $gal_id = $request->id;
        $img = $request->file('photo_name');

        $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->resize(550,550)->save('upload/gallery/'.$name_gen);
        $save_url = 'upload/gallery/'.$name_gen;

        Gallery::find($gal_id)->update([
            'photo_name' => $save_url, 
        ]); 

        $notification = array(
            'message' => 'Thư viện được cập nhật thành công',
            'alert-type' => 'success'
        );

        return redirect()->route('all.gallery')->with($notification);  

    }// End Method 

    public function DeleteGallery($id){

        $item = Gallery::findOrFail($id);
        $img = $item->photo_name;
        unlink($img);

        Gallery::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Thư viện được xóa thành công',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


     }   // End Method 

     public function DeleteGalleryMultiple(Request $request){

        $selectedItems = $request->input('selectedItem', []);

        foreach ($selectedItems as $itemId) {
           $item = Gallery::find($itemId);
           $img = $item->photo_name;
           unlink($img);
           $item->delete();
        }

        $notification = array(
            'message' => 'Đã xóa hình ảnh đã chọn thành công',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }// End Method 

     public function ShowGallery(){
        $gallery = Gallery::latest()->get();
        return view('frontend.gallery.show_gallery',compact('gallery'));
     }// End Method

     public function ContactUs(){

        return view('frontend.contact.contact_us');
     }// End Method

     public function StoreContactUs(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $content = $request->input('message');
        $subject = $request->input('subject');
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        $userMail = new ContactMail($name, $email, $content, $subject);

        // Gửi email đến người quản lý web với địa chỉ là admin@web.com
        Mail::to('duongnguyen3412@gmail.com')->send($userMail);
        $notification = array(
            'message' => 'Tin nhắn của bạn Gửi thành công',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

     }// End Method

     public function AdminContactMessage(){

        $contact = Contact::latest()->get();
        return view('backend.contact.contact_message',compact('contact'));

     }// End Method

}
