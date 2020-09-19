<?php

namespace App\Http\Controllers;
use App\Models\User;
// use Auth;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.show_all',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignUpRequest $request)
    {
        // dd($request->all());
        $user =new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->code = rand(1,10000000);
        $user->password = $request->password;
        $user->save();
        $mobile = $request->mobile;
        session()->push('msg', 'success');
        session()->push('msg', 'Data has been added successfully');
        // return view('users.verify_code',$mobile);
        return redirect('/verify-code/'.$mobile);

    }


    public function logout()
    {
        auth()->logout();

        return view('welcome');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        if(!$users){abort('404');}
        return view('users.edit', compact('users'));

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
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->save();
        session()->push('msg', 'success');
        session()->push('msg', 'Data has been updated successfully.');
        return redirect('/show-all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        session()->push('msg', 'alert');
        session()->push('msg', 'Data has been deleted successfully.');
        return back();
    }

    public function verify_code($mobile)
    {

        return view('users.verify_code',compact('mobile'));
    }
    public function createLogin()
    {
        return view('users.login');
    }

    public function verify(Request $request)
    {
        $code = $request->code;
        $mobile = $request->mobile;
        $check = User::where('mobile',$mobile)
                      ->where('code',$code)
                      ->first();
        if ($check) {
                        return redirect('/show-all');
                      }else{
                        session()->push('msg', 'alert');
                        session()->push('msg', 'This Code is incorrect');
                        return back();
                      }              


    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            session()->push('msg', 'alert');
            session()->push('msg', 'mobile or password is incorrect');
            return back();
        }

        if (! $token = auth()->attempt($validator->validated())) {
            session()->push('msg', 'alert');
            session()->push('msg', 'This mobile number is unauthorized');
            return back();
        }
         $this->createNewToken($token);
        return redirect('/show-all');
    }


    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
             'user'=>auth()->user()->name,
            'mobile'=>auth()->user()->mobile,
            'code'=>auth()->user()->code,
        ]);
    }
}
