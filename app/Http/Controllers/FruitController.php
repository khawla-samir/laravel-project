<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\FruitRequest;
use App\Fruit;

class FruitController extends Controller
{
    public function show(Request $request){
        $paginate=4;
        $fruits=DB::table('fruits')->select('*')->paginate($paginate);
        return view('adminViews.fruit.showFruit')->with('fruits',$fruits);
    }
    public function showToPublic(Request $request){
        $paginate=4;
        $fruits=DB::table('fruits')->select('*')->paginate($paginate);
        return view('fruit')->with('fruits',$fruits);
    }
    public function insertView(){
        return view('adminViews.fruit.insertFruit');
    }
    public function insert(FruitRequest $request){
        $filename = time();
        $request->img->extension();
        $request->img->move(public_path('images'),$filename);
       
        $name = $request['name'];
        //$img = $request['img'];
        $fruit = new Fruit();
        $fruit->name=$name;
       // $fruit->img=$img;
        $fruit->img='/images/'.$filename;
        $result=$fruit->save();
      return redirect()->back(); 
    }
    
    public function edit($id){
        $fruit=DB::table('fruits')->where('id',$id)->first();
        return view('adminViews.fruit.editFruit')->with('fruit',$fruit);
    }
    public function update(FruitRequest $request,$id){
        $filename = time();
        $request->img->extension();
        $request->img->move(public_path('images'),$filename);
         $fruit=Fruit::where ('id',$id)->first();
         $fruit->name=$request['name'];
         //$fruit->img=$request['img'];
         $fruit->img='/images/'.$filename;
         $fruit->save();
       return redirect('showFruit');
    }
    
    public function delete($id){
        $result=DB::table('fruits')->where('id',$id)->delete();
        return redirect()->back(); 
    }
    
    public function search(Request $request){
        $fruits=DB::table('fruits')->select('*')->where('name',$request->name)->get();
        return view('adminViews.fruit.searchFruit')->with('fruits',$fruits);
    }
}
