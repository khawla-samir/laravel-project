<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Testimonial;

class TestimonialController extends Controller
{
    public function show(Request $request){
        $paginate=4;
        $customers=DB::table('testimonials')->select('*')->paginate($paginate);
        return view('adminViews.testimonial.showTestimonials')->with('customers',$customers);

    }
    public function showToPublic(Request $request){
        $paginate=1;
        $customers=DB::table('testimonials')->select('*')->paginate($paginate);
        return view('testimonial')->with('customers',$customers);
    }
    public function insertView(){
        return view('adminViews.testimonial.insertTestimonials');
    }
    public function add(CustomerRequest $request){
        $filename = time();
        $request->img->extension();
        $request->img->move(public_path('images'),$filename);
        $name = $request['name'];
       // $img = $request['img'];
        $msg = $request['msg'];
        $customer = new Testimonial();
        $customer->name=$name;
        //$customer->img=$img;
        $customer->img='/images/'.$filename;
        $customer->msg=$msg;
        $result=$customer->save();
      return redirect()->back(); 
    }
    public function edit($id){
        $customer=DB::table('testimonials')->where('id',$id)->first();
        return view('adminViews.testimonial.editTestimonials')->with('customer',$customer);
    }
    public function update(CustomerRequest $request,$id){
        $filename = time();
        $request->img->extension();
        $request->img->move(public_path('images'),$filename);
         $customer=Testimonial::where ('id',$id)->first();
         $customer->name=$request['name'];
         //$customer->img=$request['img'];
         $customer->img='/images/'.$filename;
         $customer->msg=$request['msg'];
         $customer->save();
       return redirect('showCustomers');
    }
    public function delete($id){
        $customer=DB::table('testimonials')->where('id',$id)->delete();
        return redirect()->back(); 
    }
}
