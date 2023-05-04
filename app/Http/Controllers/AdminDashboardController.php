<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\topic;
use App\Models\Creatorlogin;
use Illuminate\Http\Request;
use App\Models\categoryModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rules\Password;

class AdminDashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

//////////////// ADMIN USERS //////////////////
    function admin_Users(){
        // $users = User::all();
        $users = User::where('id','!=',Auth::id())->get();
        $total_users = User::count();
        return view('admin.users.adminUsers',compact('users','total_users'));
    }

//////////////// ADMIN USERS DELETE //////////////////
    function admin_Users_delete($user_id){
       // echo $user_id;
       User::find($user_id)->delete();
       return back()->with('success','User deleted successfully');
    }



    //////////////// ADMIN USERS EDIT VIEW //////////////////
    
    function admin_users_edit(){
        return view('admin.users.editAdmin');
    }

   //////////////// ADMIN USERS UPDATE INFORMATION //////////////////
    function admin_edit(Request $request){
        User::find(Auth::id())->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return back();
    }
//update password
    function admin_password_update(Request $request){
        //Validate

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

        if(Hash::check($request->old_password,Auth::user()->password)){
            User::find(Auth::id())->update([
                'password'=>bcrypt($request->password),
            ]);
            return back()->with('s','Updated');
        }else{
            return back()->with('wrong','Wrong password');
        }

    }

    /////////photo update///////// image=must be an image
    function admin_photo(Request $request){
        //validate image
        $request->validate([
            'photo'=>['required','image'],
        ]);
        //delete previous image
   
        $previous_photo = public_path('uploads/adminuserphoto/'.Auth::user()->photo);
        unlink($previous_photo);


        //image file name creation
        $uploaded_image = $request->photo;
        $extension = $uploaded_image->getClientOriginalExtension();
        $file_name = Auth::id().'.'.$extension;

        //Image::make('foo.jpg')->resize(300, 200);
        //image intervension
        //image upload
        Image::make($uploaded_image)->save(public_path('uploads/adminuserphoto/'.$file_name));
        User::find(Auth::id())->update([
            'photo'=>$file_name,
        ]);

        return back()->with('p','Photo Uploaded');

    }

    //////////////// ADMIN USERS //////////////////

    /////////////// USER STARTS /////////////////
    //view normal user 
    function user_list(){
        $c = Creatorlogin::all();
        $total = Creatorlogin::count();
        return view('admin.users.userlist',[
            'cccc'=>$c,
            'total'=>$total,
        ]);
    }

    //user delete
    function user_delete($id){
        $previous_photo = public_path('uploads/adminuserphoto/'.Auth::guard('creator')->user()->photo);
        unlink($previous_photo);

        Creatorlogin::find($id)->delete();
        return back()->with('success','User deleted successfully');
    }
    /////////////// USER ENDS /////////////////

    //topiclist
    function topic_admin(){
   
        $topic = topic::all();
        return view('admin.admintopiclist',[
            'topic'=>$topic,
        ]);
     }
     //delete topic
     function del($tid){
        $tp =topic::find($tid);
        if($tp->photo!=null){
            $previous_photo = public_path('uploads/topic/'.$tp->photo);
            unlink($previous_photo);
        }
       

        topic::find($tid)->delete();

        return back();
    }


   function ap($tid){
    $t = topic::find($tid);
    if($t->state==0){
        topic::where('id',$tid)->update(['state'=>1]);
    }else{
        topic::where('id',$tid)->update(['state'=>0]);
    }
    
   return back();
}
}