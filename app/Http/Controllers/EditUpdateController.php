if(Auth::user()->email == request('email')) {

    $this->validate(request(), [
            'name' => 'required',
          //  'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user->name = request('name');
       // $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();

    }
    else{

    $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();

    }
