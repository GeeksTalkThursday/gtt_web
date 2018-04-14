<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=' Hyfix Technologies is an online computer and accessories shopping web' />
    <meta name="keywords" content="laptop, repair, electronics , RAM, Hyfix" />
    <meta name="author" content="Apps:Lab KE"/>

    <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('/favicon.ico')}}">
        <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | Login</title>

    <!-- Bootstrap -->
    <link href="/admins/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admins/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admins/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/admins/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/admins/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @include('partials.message._message')
            <form method="POST" action="{{ route('admin.auth.login') }}" data-parsley-validate>
            {{ csrf_field() }}
              <h1>Admin Login Form</h1>
              <div>
                <input type="email" name="email" class="form-control" placeholder="email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" >Log in</button>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
         
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>{{-- <i class="fa fa-paw"> --}}</i> {{env('APP_NAME')}}</h1>
                  <p>©{{ date('Y') }} All Rights Reserved | <a target="_blank" href="https://www.appslab.co.ke"> Apps:Lab KE</a> <br> Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
