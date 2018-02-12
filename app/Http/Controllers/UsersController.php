<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests;
use App\User;
use App\Trabajador;
use App\Acceso;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::Users();
        return view("users.index")->with([
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = new User;

        $accesos = Acceso::All();

        

        return view("auth.register")->with([
            'users' => $users,

            'accesos' => $accesos

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->trabajador_id = $request->trabajador;

        // dd($request);

        if($user->save()){
            //  dd($user);
            $user->accesos()->attach($request->accesos);
            // dd($user);
            return redirect("/users");
        }else{
            //  dd($user);
            return view("/users.create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function postLogin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email', 'password' => 'required',
		]);
 
		$credentials = $request->only('email', 'password');
		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
        //dd($request);
			return redirect()->intended($this->redirectPath());
		}
 
		return redirect($this->loginPath())
					->withInput($request->only('email', 'remember'))
					->withErrors([
						'email' => $this->getFailedLoginMessage(),
					]);
	}


    public function show($id)
    {
        //
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
}
