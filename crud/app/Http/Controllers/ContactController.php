<?php

namespace App\Http\Controllers;
use App\Crud;
use Illuminate\Http\Request;

use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   

   
    public function index()
    {
        $cruds = Crud::all();  
  
        return view('index');  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([  
            'name'=>'required',  
            'email'=>'required',  
            'mobile'=>'required',  
            
        ]);  
  
        $crud = new Crud;  
        $crud->name =  $request->get('name');  
        $crud->email = $request->get('email');    
        $crud->mobile = $request->get('mobile');  
        $crud->save(); 

        // $message="Registered successfully";
        // return Redirect::to('create',compact('message')); 
      
  
    }
    public function mailsending(Request $request)
    {

        $request->validate([  
            'name'=>'required',  
            'email'=>'required',  
            'mobile'=>'required',  
            
        ]);  
  
        $crud = new Crud;  
        $crud->name =  $request->get('name');  
        $crud->email = $request->get('email');    
        $crud->mobile = $request->get('mobile');  
        $crud->offer1 = $request->get('offer1');  
        $crud->save(); 
       

        $contact_data = [
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'offer1' => $request->input('offer1'),
          
          
        ];
       // dd($request);
        Mail::to('anasmahmoud.mel@gmail.com')->send(new ContactMailable($contact_data));
      
        return view('index');
      
    }
   


}