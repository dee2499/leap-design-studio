<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('vendor/images/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/style.css') }}">
    <script src="{{ asset('vendor/js/modernizr-2.6.2.min.js') }}" type="text/javascript"></script>

</head>
<body>
<div class="topcurv">
    <div class="topcurv-right">
        <div class="containerbox">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo"><a href="#"><img src="{{ asset('vendor/images/logo.png') }}" alt="Leaf Design Studio" /></a></div>
                </div>
                <div class="col-sm-6">
                    <div class="topNav">
                        <ul>
                            <li><a href="#">Price</a></li>
                            <li><a href="{{url('/login')}}">Login</a></li>
                            <li><a href="{{url('/register')}}">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="boxtest">
                <h1 class="text-center">User testing with your customers</h1>
                <p class="text-center">Send a test and get result in on click.</p>
                <div class="text-center"><button class="currentbtn">Try it free</button> <button>Preview live test</button></div>
                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="round">1</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pointtext">Sign up for a free trial
                            <span>You'll be allowed to test 3 participants.</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="round">2</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pointtext"> Include what you want to test <span>Add a link to your invision prototype, or your live website.</span></div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="round">3</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pointtext"> Create a step by step questionaire <span>Create a user flow journey</span></div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="round">4</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pointtext">Share the public URL  <span>Send the test to your leads, choose to gift them afterward.</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clientbox">
            <div class="containerbox">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="whitebox">&nbsp;</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="testimonial">"This is the best way for us to do User Testing. Before we had to schedule interviews with our customers, and spend a lot of time performing user tests. Now it's so much more simple, we can send what we want to test to our most valuable customers."<br /><br /> </div>
                        <div class="row">
                            <div class="col-sm-2"><img src="{{asset('vendor/images/client.jpg')}}" /></div>
                            <div class="col-sm-10">
                                <p class="cltitle">Name <span>Head of Design at AddThis</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clientboxleft">
            <div class="containerbox">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="testimonial">"This is the best way for us to do User Testing. Before we had to schedule interviews with our customers, and spend a lot of time performing user tests. Now it's so much more simple, we can send what we want to test to our most valuable customers."<br /><br /> </div>
                        <div class="row">
                            <div class="col-sm-2"><img src="{{ asset('vendor/images/client.jpg') }}" /></div>
                            <div class="col-sm-10">
                                <p class="cltitle">Name <span>Head of Design at AddThis</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="whitebox">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <div class="container">
            <h1 class="text-center">Used by some of these companies</h1>
            <div class="companies">
                <ul>
                    <li><img src="{{asset('vendor/images/google.jpg')}}" /></li>
                    <li><img src="{{asset('vendor/images/saleforce.jpg')}}" /></li>
                    <li><img src="{{asset('vendor/images/hubsport.jpg')}}" /></li>
                    <li><img src="{{asset('vendor/images/marketo.jpg')}}" /></li>
                    <li class="bdrlast"><img src="{{asset('vendor/images/salesloft.jpg')}}" /></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div class="boxtest">
        <h1 class="text-center">Want to start testing? </h1>
        <p class="text-center">Send a test and get result in one click.</p>
        <div class="text-center"><button class="currentbtn">Try it free</button> <button>Preview live test</button></div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
    </div>
</div>
<footer>
    <div class="containerbox">
        <div class="row">
            <div class="col-sm-3"><img src="{{asset('vendor/images/logo-dark.png')}}" /> &nbsp;&nbsp;Created by Leap Design Studio</div>
            <div class="col-sm-6">
                <ul>
                    <li><a href="#">FAQ</a> </li>
                    <li><a href="#">Terms of Service</a>
                    <li>
                    <li><a href="">Privacy Policy</a>
                    <li>
                    <li><a href="#">Careers</a>
                    <li>
                    <li><a href="#">Contact Us</a>
                    <li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><a href="#"><i class="fa fa-2x fa-dribbble"></i></a> </li>
                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a> </li>
                    <li><a href="#"><i class="fa fa-2x fa-twitter"></i></a> </li>
                    <li><a href="#"><i class="fa fa-2x fa-instagram"></i></a> </li>
                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a> </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
