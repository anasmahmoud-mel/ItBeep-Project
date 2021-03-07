<?php

namespace App\Http\Controllers;
use App\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\CreateController;
class CrudController extends Controller
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

}