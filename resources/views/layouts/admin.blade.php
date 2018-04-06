<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}} | @yield('title')</title>

    <!-- Bootstrap -->
    <link href="/admins/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admins/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admins/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/admins/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/admins/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
    <link href="/admins/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/admins/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

     <!-- Switchery -->
    <link href="/admins/vendors/switchery/dist/switchery.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/admins/build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('admin')}}" class="site_title">{{-- <i class="fa fa-paw"></i> --}} <span>{{env('APP_NAME')}}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            {{-- <div class="profile">
              <div class="profile_pic">
                <img src="/admins/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div> --}}
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                {{-- <h3>General</h3> --}}
                <ul class="nav side-menu">
                  <li><a class="{{ Request::is('admin') ? "active" : "" }}" href="{{url('/admin')}}"><i class="fa fa-home"></i> Home </span></a>
                    
                  </li>
                  <li><a class="{{ Request::is('admin/category/create') ? "active" : "" }}" href="{{ url('/admin/category/create') }}" ><i class="fa fa-edit"></i> Categories </span></a>
                    
                  </li>
                  <li><a class="{{ Request::is('admin/tags/create') ? "active" : "" }}" href="{{ url('/admin/tags/create') }}" ><i class="fa fa-edit"></i> Tags </span></a>
                    
                  </li>

                  <li><a class="{{ Request::is('admin/product/create') ? "active" : "" }}" href="{{url('/admin/post/create')}}" ><i class="fa fa-desktop"></i>Add Post </span></a>
                    
                  </li>
                  <li><a class="{{ Request::is('admin/product/') ? "active" : "" }}" href="{{url('/admin/post/')}}" ><i class="fa fa-desktop"></i> Posts </span></a>
                    
                  </li>
                  {{-- <li><a><i class="fa fa-table"></i> Tables </span></a> --}}
                    
                  </li>
                  {{-- <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation </span></a> --}}
                    
                  </li>
                  <li><a class="{{ Request::is('manageMailChimp') ? "active" : "" }}" href="{{url('/manageMailChimp')}}"><i class="fa fa-clone"></i>Send Campaigns </span></a>
                    
                  </li>
                </ul>
              </div>
        

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{-- <img src="/admins/images/img.jpg" alt="">John Doe --}}{{Auth::guard('admin')->user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    {{-- <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> --}}
                    <li> <a href="{{ route('admin.auth.logout') }}">
                      <i class="fa fa-sign-out pull-right"></i>
                            Log Out
                      </a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="/admins/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="/admins/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="/admins/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="/admins/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
            
            @yield('content')


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           ©{{ date('Y') }}  {{env('APP_NAME')}} Dashboard by <a target="_blank" href="https://www.appslab.co.ke"> Apps:Lab KE</a> {{-- {{date('Y')}} --}}
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/admins/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/admins/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    {{-- <script src="/admins/vendors/fastclick/lib/fastclick.js"></script> --}}
    <!-- NProgress -->
    <script src="/admins/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/admins/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/admins/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/admins/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/admins/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/admins/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/admins/vendors/Flot/jquery.flot.js"></script>
    <script src="/admins/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/admins/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/admins/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/admins/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/admins/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/admins/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/admins/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/admins/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/admins/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/admins/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/admins/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/admins/js/moment/moment.min.js"></script>
    <script src="/admins/js/datepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/admins/build/js/custom.min.js"></script>

    <!-- FastClick -->
    {{-- <script src="/admins/vendors/fastclick/lib/fastclick.js"></script> --}}
    <!-- Autosize -->
    <script src="/admins/vendors/autosize/dist/autosize.min.js"></script>
    <!-- FastClick -->
    {{-- <script src="/admins/vendors/fastclick/lib/fastclick.js"></script> --}}

    {{-- <!-- bootstrap-wysiwyg -->
    <script src="/admins/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="/admins/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="/admins/vendors/google-code-prettify/src/prettify.js"></script> --}}

    {{-- <link rel="stylesheet" type="text/css" href="{{asset('/css/parsley.css')}}"> --}}
    <script src="/admins/vendors/parsleyjs/dist/parsley.min.js"></script>
    

    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- JQVMap -->
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
      });
    </script>
    <!-- /JQVMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
    
    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->

    <script type="text/javascript" src="{{asset('/js/parsley.js')}}"></script>
    <!-- Parsley -->
    <script>
      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form .btn').on('click', function() {
          $('#demo-form').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });

      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form2 .btn').on('click', function() {
          $('#demo-form2').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form2').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });
      try {
        hljs.initHighlightingOnLoad();
      } catch (err) {}
    </script>
    <!-- /Parsley -->

{{-- CROPPER JS --}}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.js"></script>
<script type="text/javascript"> 
      var canvas2  = $("#canvas-three"),
    context2 = canvas2.get(0).getContext("2d"),
    $result2 = $('#result-three');

$('#fileImage-three').on( 'change', function(){
      // canvas2.cropper('destroy');
    if (this.files && this.files[0]) {
      if ( this.files[0].type.match(/^image\//) ) {
        var reader2 = new FileReader();
        reader2.onload = function(evt2) {
           var img2 = new Image();
           img2.onload = function() {
             context2.canvas.height = img2.height;
             context2.canvas.width  = img2.width;
             context2.drawImage(img2, 0, 0);
             var cropper2 = canvas2.cropper({
               aspectRatio: 22 / 12
             });
             $('#btnCrop-three').click(function() {
                // Get a string base 64 data url

                var croppedImageDataURL2 = canvas2.cropper('getCroppedCanvas').toDataURL("image/png");


                $result2.append( $('<img>').attr('src', croppedImageDataURL2) );
                // var croppedImageBlob = canvas.cropper('getCroppedCanvas').toBlob("image/png");
                $result2.append( $("<input type='hidden' name='thumbnail'>").attr('value', croppedImageDataURL2) );

                // canvas2.cropper('destroy');

             });
             $('#btnRestore-three').click(function() {
               canvas2.cropper('destroy');
               $result2.empty();
             });
           };
           img2.src = evt2.target.result;
        };
        reader2.readAsDataURL(this.files[0]);
        
      }
      else {
        alert("Invalid file type! Please select an image file.");
      }
    }
    else {
      alert('No file(s) selected.');
    }
});</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    <script type="text/javascript">
      $('#tags').select2({
        tags: false,
        tokenSeparators: [','], 
        placeholder: "Add your tags here"
    });
 </script>

    {!! Toastr::render() !!}
  </body>
</html>
