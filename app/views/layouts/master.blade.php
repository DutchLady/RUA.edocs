
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
      @section('title')
      e-docs
      @show
    </title>
    <meta name="keywords" content="documentation, e-books, agriculture" />
    <meta name="author" content="Imran Ismail" />
    <meta name="description" content="A website that holds a library of documents for the royal university of agriculture cambodia" />

    <!-- CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootswatch.css') }}" rel="stylesheet">


    
    <style type="text/css">
    @section('styles')
    @show
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-fixed-top ">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="{{ URL::to('') }}">e-docs</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <!-- Nav Bar Links-->
                <li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="{{ URL::to('/') }}">Home</a></li>
                @if (Entrust::hasRole('admin'))
                <li><a href="{{ URL::to('admin') }}">Administration</a></li>
                @endif
                </ul>

              <ul class="nav pull-right">
                <li class="divider-vertical"></li>
                @if (Auth::check())
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li {{ (Request::is('account') ? 'class="active"' : '') }}><a href="#"><b>{{ Confide::user()->thisName() }}</b></a></li>
                      <li><a href="{{ URL::to('account/logout') }}">Logout</a></li>
                      @else
                      <li {{ (Request::is('account/login') ? 'class="active"' : '') }}><a href="{{ URL::to('account/login') }}">Log in</a></li>
                      <li {{ (Request::is('account/create') ? 'class="active"' : '') }}><a href="{{ URL::to('account/create') }}">Sign up</a></li>
                      @endif
                    </ul>
              </ul>
            </div><!--/.nav-collapse -->
            <!-- Search Bar Start -->
            <form id="" class="navbar-form form-search pull-right" method="POST" action="{{ URL::to('search') }}" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
               <div class="input-append">
               <input type="text" class="search-query" placeholder="Search" name="searchterm" id="searchterm">
               <button type="submit" class="btn" type="submit"><i class="icon-search"></i></button>
               </div>
            </form>
            <!-- Search Bar Ends-->
          </div>
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
        <!-- Notifications -->
        @include('notifications')

        <!-- Content -->
        @yield('content')

      </div>

      <div id="push"></div>
      
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit">All rights reserved courtesy of <a href="http://www.facebook.com/lightonokira" target="_blank">Imran Ismail</a>.</p>
      </div>
    </div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{{ asset('assets/js/jquery.v1.8.3.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/bootstrap.min.js') }}}"></script>
  </body>
</html>
