<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b>TH</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Back</b>To Home</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          {{-- <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('/backend/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">
                 <?php if (Auth::check()) :?>{{Auth::user()->name }} <?php endif; ?> 
                  <i class="ti-angle-down" style="color: #fff !important;padding-top: 8px;"></i> 
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('/backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                <p>
                  <span class="username" style="color: #fff;cursor: pointer;">
                     <?php if (Auth::check()) :?>{{Auth::user()->name }} <?php endif; ?> 
                       <i class="ti-angle-down" style="color: #fff !important;padding-top: 8px;"></i> 
                  </span>
                 
                </p>
              </li>
              <!-- Menu Body -->
            
              <li class="user-footer">
              
                <div class="pull-right">
                    <a class="dropdown-item btn btn-default btn-flat" href="/logout"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </li>
            </ul>
          </li> --}}
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
