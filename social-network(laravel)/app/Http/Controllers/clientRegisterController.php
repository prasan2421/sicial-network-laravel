<?php

namespace App\Http\Controllers;
use App\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class clientRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:client',['except'=>['logoutclient']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/client/auth/login');

    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('/client/auth/register');
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
            'firstname'=>'required|min:3',
            'lastname'=>'required|min:3',           
            'email'=>'required|unique:clients',
            'password'=>'required|min:6'
            
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

        return redirect()->route('client.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|min:6',
            'password'=>'required|min:3'
        ]);

        if(Auth::guard('client')->attempt(['email'=>$request->email,'password'=>$request->password ],$request->remember))
        {
            return redirect()->intended(route('client.index'));

        }

        return redirect()->back()->withInput($request->only('email', 'remember'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function logoutclient()
    {
       Auth::guard('client')->logout();

        return redirect('/client/login');
    }







}
