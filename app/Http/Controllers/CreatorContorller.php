<?php

namespace App\Http\Controllers;

use App\Models\Creatorlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rules\Password;

class CreatorContorller extends Controller
{
    function creator_view(){
        return view('frontend.creator.creatorform');
    }
    //master dashboard
    function dashboard(){
        return view('frontend.creator.creatorDashboard');
    }
    function creator_login_view(){
        return view('frontend.creator.creatorLogin');
    }

    function creator_register(Request $request){
       // print_r($request->all());
       //Validation
         $request->validate([
            'name' => 'required',
            'email'=>'required',
            'password' => ['required',
            'confirmed',
             Password::min(8)
             ->letters()
             ->numbers()
             ->mixedCase()//upper and lower mixed
            ],
            'password_confirmation' => 'required',
        ]);
        ///insert users
        Creatorlogin::insert([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'created_at'=>Carbon::now(),
        ]);
        // return redirect('/dashboard');
        return back();

    }

    //creator login

    function creator_login(Request $request){
        //Auth::guard('creator')->user()->name
        //Auth::guard('creator')->user()->id
        //Auth::guard('creator')->id
        if(Auth::guard('creator')->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            ])){
               // echo 'all ok';
               return redirect('/dashboard');
        }else{
           // echo 'not ok';
           return back()->with('wrong','Wrong Credential');
        }
    }


    //Logout
    function creator_logout(){
        Auth::guard('creator')->logout();
        return redirect('/');
    }

    //edit view
    function edit(){
        return view('frontend.creator.edit');
    }
    //update name email
    function update(Request $request){
        Creatorlogin::find(Auth::guard('creator')->id())->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return back();
    }
//update password
function password(Request $request){
    $request->validate([
        'old_password' => 'required',
        'password' => ['required',
        'confirmed',
         Password::min(8)
         ->letters()
         ->numbers()
         ->mixedCase()//upper and lower mixed
        ],
        'password_confirmation' => 'required',
    ],[
        'old_password.required'=>'Enter old password ',
    ]);
    //validate ends

    if(Hash::check($request->old_password,Auth::guard('creator')->user()->password)){
        Creatorlogin::find(Auth::guard('creator')->id())->update([
            'password'=>bcrypt($request->password),
        ]);
        return back()->with('s','Updated');
    }else{
        return back()->with('wrong','Wrong password');
    }
}
//update photo
function photo(Request $request){

    //validate image
    $request->validate([
        'photo'=>['required','image'],
    ]);
    
   //delete previous image
   if(Auth::guard('creator')->user()->photo != null){
    $previous_photo = public_path('uploads/userphoto/'.Auth::guard('creator')->user()->photo);
    unlink($previous_photo);
   }
   
    //image file name creation
    $uploaded_image = $request->photo;
    $extension = $uploaded_image->getClientOriginalExtension();
    $file_name = Auth::guard('creator')->id().'.'.$extension;

    
    Image::make($uploaded_image)->save(public_path('uploads/userphoto/'.$file_name));
    Creatorlogin::find(Auth::guard('creator')->id())->update([
        'photo'=>$file_name,
    ]);

    return back()->with('p','Photo Uploaded');

}





    //dashboard
    function dashboard_c(){
        return view('frontend.creator.dashboard');
    }

}
