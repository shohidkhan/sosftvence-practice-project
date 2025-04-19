<?php

namespace App\Http\Controllers\Web\Backend\Client;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientProfileController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $userProfile= Profile::where('user_id',$user_id)->first();
        return view("backend.client.profile",compact("userProfile"));
    }

    public function store(Request $request){

        // dd($request->all());
        $user_id = Auth::user()->id;

        $userProfile= Profile::where('user_id',$user_id)->first();

        $request->validate([
            'company_name'=>'required|string',
            'company_email'=>'required',
            'company_phone'=>'required|numeric|min:11',
            'company_address'=>'nullable',
            'vat_number'=>'required|numeric',
            'cr_documents'=>'required|mimes:doc,docx,pdf,png,jpg,jpeg|max:1024',
            'al_document'=>'nullable|mimes:doc,docx,pdf,png,jpg,jpeg|max:1024',
            'agree_terms_policy'=>'required'
        ]);

        if($userProfile){ $request->validate([
            'company_email'=>'required|unique:profiles,company_email,except,'.$userProfile->id,
        ]);
            if($request->hasFile('cr_documents')){
                //delete existing file
                if(file_exists($userProfile->cr_documents)){
                    unlink($userProfile->cr_documents);
                }
                //file upload process
                $document_file=$request->file('cr_documents');
                $fileExtension = $document_file->getClientOriginalExtension();
                $cr_filename= 'user_'.Auth::user()->id.'_cr_document_'.md5(time()).'.'.$fileExtension;
                $cr_filename_url="asset/backend/uploads/cr_documents/{$cr_filename}";
                $document_file->move(public_path('asset/backend/uploads/cr_documents'), $cr_filename);
            }

            
            $userProfile->update([
                'user_id'=>Auth::user()->id,
                'company_name'=>$request->company_name,
                'company_email'=>$request->company_email,
                'company_phone'=>$request->company_phone,
                'company_address'=>$request->company_address,
                'vat_number'=>$request->vat_number,
                'cr_documents'=>$cr_filename_url,
            ]);
        }else{
            $request->validate([
                'company_email'=>'required|unique:profiles,company_email',
            ]);
            if($request->hasFile('cr_documents')){
              
                //file upload process
                $document_file=$request->file('cr_documents');
                $fileExtension = $document_file->getClientOriginalExtension();
                $cr_filename= 'user_'.Auth::user()->id.'_cr_document_'.md5(time()).'.'.$fileExtension;
                $cr_filename_url="asset/backend/uploads/cr_documents/{$cr_filename}";
                $document_file->move(public_path('asset/backend/uploads/cr_documents'), $cr_filename);
            }
            

            Profile::create([
                'user_id'=>Auth::user()->id,
                'company_name'=>$request->company_name,
                'company_email'=>$request->company_email,
                'company_phone'=>$request->company_phone,
                'company_address'=>$request->company_address,
                'vat_number'=>$request->vat_number,
                'cr_documents'=>$cr_filename_url,
            ]);
        }
        return back()->with('success','The informations of your company stored sucessfully.');
    }
}
