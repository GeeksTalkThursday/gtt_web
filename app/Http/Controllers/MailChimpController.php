<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Auth;

use Config;
use Illuminate\Support\Facades\Session;
use Yuansir\Toastr\Facades\Toastr;


class MailChimpController extends Controller

{


    public $mailchimp ;

    public $listId = '335f95ac0b';


    public function __construct(\Mailchimp $mailchimp)

    {

        $this->mailchimp = $mailchimp;

    }


    public function manageMailChimp()

    {

        return view('admin.dashboard/mailchimp');

    }


    public function subscribe(Request $request)

    {

    	$this->validate($request, [

	    	'email' => 'required|email',

        ]);


        try {


        	

            $this->mailchimp

            ->lists

            ->subscribe(

                $this->listId,

                ['email' => $request->input('email')]

            );

            // session()->put('success','Notifications Subscribed successfully, check your email');
            Toastr::success('Notifications Subscribed successfully, check your email', $title = 'Email Notifications', $options = ["progressBar"=>true]);

            return redirect()->back();


        } catch (\Mailchimp_List_AlreadySubscribed $e) {

            // session()->put('warning','Email already subscribed');
            Toastr::warning('Email already Subscribed', $title = 'Email Subscription', $options = ["progressBar"=>true]);
            return redirect()->back();

        } catch (\Mailchimp_Error $e) {

            // session()->put('error','Error from Mailchimp');
            Toastr::error('Error from Mailchimp', $title = 'Mailchimp error', $options = ["progressBar"=>true]);
            return redirect()->back();

        }

    }
     //reg subscription

    public function subscribeOnRegister($email)

    {

        try {

            $this->mailchimp

            ->lists

            ->subscribe(

                $this->listId,

                ['email' => $email]

            );
        // session()->put('success','Registered, Notifications Subscribed successfully, check your email');
            // Toastr::success('Registered, Notifications Subscribed successfully, check your email', $title = 'Registration', $options = ["progressBar"=>true]);

        } catch (\Mailchimp_List_AlreadySubscribed $e) {

            // session()->put('warning','Email already subscribed');
            // Toastr::warning('Email already subscribed', $title = 'Registration', $options = ["progressBar"=>true]);


        } catch (\Mailchimp_Error $e) {

            // session()->put('error','Error from Mailchimp');
            // Toastr::error('Error from Mailchimp', $title = 'Mailchimp error', $options = ["progressBar"=>true]);

        }

    }


    public function sendCompaign(Request $request)

    {

    	$this->validate($request, [

	    	'subject' => 'required',

	    	'to_email' => 'required',

	    	// 'from_email' => 'required',

	    	'message' => 'required',

        ]);


        try {


	        $options = [

	        'list_id'   => $this->listId,

	        'subject' => $request->input('subject'),

	        'from_name' => env('APP_NAME'), //$request->input('from_email')

	        'from_email' => env('MAILCHIMP_EMAIL_SENDER'),

	        // 'to_name' => $request->input('to_email')
             'to_name' => 'mail@appsla.co.ke'

	        ];


	        $content = [

	        'html' => $request->input('message'),

	        'text' => strip_tags($request->input('message'))

	        ];


	        $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);

	        $this->mailchimp->campaigns->send($campaign['id']);

            // session()->put('success','send campaign successful');
            Toastr::success('send campaign successful', $title = 'Mailchimp campaign', $options = ["progressBar"=>true]);
        	return redirect()->back();


        	

        } catch (Exception $e) {

           // session()->put('error','Error from Mailchimp');
            Toastr::error('Error from Mailchimp', $title = 'Mailchimp error', $options = ["progressBar"=>true]);
        	return redirect()->back();

        }

    }


}