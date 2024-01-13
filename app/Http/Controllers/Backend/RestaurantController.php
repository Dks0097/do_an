<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ResCategory;
use App\Models\ResProducts;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class RestaurantController extends Controller
{
    public function ResCategory(){

        $category = ResCategory::latest()->get();
        return view('backend.category.res_category',compact('category'));

    }// End Method 
    
    public function StoreResCategory(Request $request){
        // dd($request);
        $image = $request->file('post_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(550,370)->save('upload/Restaurant/'.$name_gen);
        $save_url = 'upload/Restaurant/'.$name_gen;
        ResCategory::insert([
            'name' => $request->category_name,
            'description' => $request->description,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'BlogCategory Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method 

    public function EditResCategory($id){

        $categories = ResCategory::find($id);
        return response()->json($categories);
    }// End Method 

    public function UpdateResCategory(Request $request){
        dd($request);
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(550,370)->save('upload/Restaurant/'.$name_gen);
        $save_url = 'upload/Restaurant/'.$name_gen;
        $cat_id = $request->cat_id;

        ResCategory::find($cat_id)->update([
            'name' => $request->category_name,
            'description' => $request->description,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'BlogCategory Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method 

    public function DeleteResCategory($id){

        ResCategory::find($id)->delete();

        $notification = array(
            'message' => 'BlogCategory Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method 

 /////////// All Blog Post Methods////////////////////

    public function AllResProduct(){

        $post = ResProducts::latest()->get();
        return view('backend.res_product.all_product',compact('post'));

    }// End Method 

    public function AddResProduct(){
        $blogcat = ResCategory::latest()->get();
        return view('backend.res_product.add_product',compact('blogcat'));
    }// End Method 

    public function StoreResProduct(Request $request){

        $image = $request->file('post_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(550,370)->save('upload/Restaurant/'.$name_gen);
        $save_url = 'upload/Restaurant/'.$name_gen;

        ResProducts::insert([

            'rescat_id' => $request->rescat_id,
            
            'name' => $request->name,
            'description' => $request->description,
            'unit_price' => $request->unit_price,
            'promotion_price' => $request->promotion_price,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'BlogPost Data Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.res.product')->with($notification);

    } // End Method 
    public function EditResProduct($id){

        $blogcat = ResCategory::latest()->get();
        $post = ResProducts::find($id);
        return view('backend.res_product.edit_product',compact('blogcat','post'));

    }// End Method 


    public function UpdateBlogPost(Request $request){

        $post_id = $request->id;

        if($request->file('post_image')){

        $image = $request->file('post_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(550,370)->save('upload/Restaurant/'.$name_gen);
        $save_url = 'upload/Restaurant/'.$name_gen;


        BlogPost::findOrFail($post_id)->update([

            'rescat_id' => $request->rescat_id,
            
            'name' => $request->name,
            'description' => $request->description,
            'unit_price' => $request->unit_price,
            'promotion_price' => $request->promotion_price,
            'image' => $save_url,
            'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'BlogPost Updated With Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.blog.post')->with($notification);


        } else {

            BlogPost::findOrFail($post_id)->update([

                'blogcat_id' => $request->blogcat_id,
                'user_id' => Auth::user()->id,
                'post_titile' => $request->post_titile,
                'post_slug' => strtolower(str_replace(' ','-',$request->post_titile)),
                'short_descp' => $request->short_descp,
                'long_descp' => $request->long_descp, 
                'created_at' => Carbon::now(),
                ]);

                $notification = array(
                    'message' => 'BlogPost Updated Without Image Successfully',
                    'alert-type' => 'success'
                );

                return redirect()->route('all.blog.post')->with($notification);

        } // End Eles 


    }// End Method 


    public function DeleteResProduct($id){

        $item = ResProducts::findOrFail($id);
        

        ResProducts::findOrFail($id)->delete();

        $notification = array(
            'message' => 'BlogPost Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


     }   // End Method 

     public function ResDetails($id){

        $blog = ResProducts::where('id',$id)->first();
        $bcategory = ResCategory::latest()->get();
        $lpost = ResProducts::latest()->limit(3)->get();

        return view('frontend.restaurant.res_details',compact('blog','bcategory','lpost'));

     }// End Method 

     public function ResCatList($id){

        $blog = ResProducts::where('rescat_id',$id)->search()->get();
        $namecat = ResCategory::where('id',$id)->first();
        $bcategory = ResCategory::latest()->get();
        $lpost = ResProducts::latest()->limit(3)->get();
        return view('frontend.restaurant.res_cat_list',compact('blog','bcategory','lpost', 'namecat'));


     }// End Method 

     public function ResList(){

        $blog = ResProducts::latest()->search()->paginate(10);
        $bcategory = ResCategory::latest()->get();
        $lpost = ResProducts::latest()->limit(3)->get();
        // dd($lpost);
        return view('frontend.restaurant.res_all',compact('blog','bcategory','lpost'));

     }

}