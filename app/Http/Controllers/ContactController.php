<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AdminRequest;
class ContactController extends Controller
{

    public function showUsers(Request $request){
        $paginate=4;
        $users=DB::table('contacts')->select('*')->paginate($paginate);
        return view('adminViews.contacts.showUsers')->with('users',$users);
    }
    public function insertView(){
        return view('adminViews.contacts.insertUser');
    }
    public function add(UserRequest $request){
        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['phone'];
        $msg = $request['msg'];
        $user = new Contact();
        $user->name=$name;
        $user->email=$email;
        $user->phone=$phone;
        $user->msg=$msg;
        $result=$user->save();
        return redirect()->back();
    }
    public function edit($id){
        $user=DB::table('contacts')->where('id',$id)->first();
        return view('adminViews.contacts.editUser')->with('user',$user);
    }
    public function update(UserRequest $request,$id){
         $user=Contact::where ('id',$id)->first();
         $user->name=$request['name'];
         $user->email=$request['email'];
         $user->phone=$request['phone'];
         $user->msg=$request['msg'];
         $user->save();
       return redirect('showUsers');
    }
    public function delete($id){
        $result=DB::table('contacts')->where('id',$id)->delete();
        return redirect()->back(); 
    }
}
