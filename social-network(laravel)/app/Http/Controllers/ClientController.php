<?php

namespace App\Http\Controllers;

use App\client;
use App\status;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $status=status::all();
        // return redirect()->back(['status'=>$status]);


        return view('/client/index',['status'=>$status]);
        
        
    }

    public function profile()
    {
        return view('/client/profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'text'=>'required|min:1',
                       
        ]);
         $client = new client();
        $client->firstname=$request->firstname;
        $client->middlename=$request->middlename;
        $client->lastname=$request->lastname;
        if($request->gender =='0'){
            $client->gender= '0';
        }elseif($request->gender=='1'){
            $client->gender= '1';
        }else{
            $client->gender= '2';
        }
        $client->birthday=date($request->bday);
        $client->email=$request->email;
        $client->password=bcrypt($request->password);

        
        $client->save();

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
    }
}
