<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Yuansir\Toastr\Facades\Toastr;

use Illuminate\Mail\Mailer;
use Mail;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public $subscribeEmail ;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(\App\Http\Controllers\MailChimpController $subscribeEmail)
    {
        $this->middleware('guest');
        $this->subscribeEmail = $subscribeEmail;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        dd($data);
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request, $user)
    {

        $name = Auth::user()->name;
        $to_email = Auth::user()->email;
        $link = url('/');

            Mail::send('emails.creation', ['name' => $name,'link'=>$link], function ($message) use ($to_email)
            {

                $message->from(env('MAIL_ACCOUNT'), env('APP_NAME')); 

                $message->to($to_email);

                $message->subject(env('APP_NAME') .' '.'Account creation');

            });

        if ($request->subscribe != null and $request->subscribe == 'on') {
            $this->subscribeEmail->subscribeOnRegister($to_email);

        }
        else{
            // session()->put('success',' Successfully registered');
            Toastr::success('Successfully registered', $title = 'Registration', $options = ["progressBar"=>true]);
        }

        return redirect('/');
    }
}
