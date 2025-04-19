<?php

namespace App\Http\Controllers\Web\Backend\Owner;

use App\Models\Singage;
use App\Models\SingageType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SignageController extends Controller
{
    //

    public function add_singage(){
        $signageTypes=SingageType::all();
        return view("backend.owner.add_singage",compact('signageTypes'));
    }

    public function store_singage(Request $request){
        // dd($request->all());
        try{
            
        $request->validate([
            'singage_type_id'=>'required',
            'singage_name'=>['required','string'],
            'location'=>['required','string'],
            'description'=>['required','string'],
            'signage_image'=>['required','image','mimes:jpg,png,jpeg'],
            'daily_views'=>['required','numeric'],
            'wide'=>['required','numeric'],
            'height'=>['required','numeric'],
            'rotation_time'=>['required','numeric'],
            'signage_price'=>['required','numeric'],
        ]);

        if($request->hasFile('signage_image')){
            $file= $request->file('signage_image');
            $originalExtension=$file->getClientOriginalExtension();
            $filename='signage_image_'.md5(uniqid()).time().'.'.$originalExtension;
            $file_url= "asset/backend/uploads/signages/{$filename}";
            $file->move(public_path("asset/backend/uploads/signages"), $filename);
        }

        Singage::create([
            'user_id'=>Auth::id(),
            'singage_type_id'=>$request->singage_type_id,
            'singage_name'=>$request->singage_name,
            'location'=>$request->location,
            'description'=>$request->description,
            'signage_image'=>$file_url,
            'daily_views'=>$request->daily_views,
            'wide'=>$request->wide,
            'height'=>$request->height,
            'rotation_time'=>$request->rotation_time,
            'signage_price'=>$request->signage_price
        ]);
        return redirect()->back()->with('success','Signage Created succesfully');
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

}
