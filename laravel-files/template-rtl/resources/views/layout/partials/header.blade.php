
		
        @if(!Route::is(['index-two','index-three','index-four','index-five']))
        <!-- Header -->
            <div class="header">
            
                <!-- Logo -->
                <div class="header-left">
                    <a href="{{url('index')}}"class="logo">
                        <img src="{{ URL::asset('/assets/img/logo.png')}}" alt="Logo">
                    </a>
                    <a href="{{url('index')}}"class="logo logo-small">
                        <img src="{{ URL::asset('/assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
                    </a>
                </div>
                <!-- /Logo -->
                
                <!-- Sidebar Toggle -->
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
                <!-- /Sidebar Toggle -->
                
                <!-- Search -->
                <div class="top-nav-search">
                    <form>
                        <input type="text" class="form-control" placeholder="Search here">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- /Search -->
                
                <!-- Mobile Menu Toggle -->
                <a class="mobile_btn" id="mobile_btn">
                    <i class="fas fa-bars"></i>
                </a>
                <!-- /Mobile Menu Toggle -->
                
                <!-- Header Menu -->
                <ul class="nav nav-tabs user-menu">
                    <!-- Flag -->
                    <li class="nav-item dropdown has-arrow flag-nav">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                            <img src="{{ URL::asset('/assets/img/flags/us.png')}}" alt="" height="20"> <span>English</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('/assets/img/flags/us.png')}}" alt="" height="16"> English
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('assets/img/flags/fr.png')}}" alt="" height="16"> French
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('/assets/img/flags/es.png')}}" alt="" height="16"> Spanish
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('/assets/img/flags/de.png')}}" alt="" height="16"> German
                            </a>
                        </div>
                    </li>
                    <!-- /Flag -->
                    
                    <!-- Notifications -->
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <i data-feather="bell"></i> <span class="badge rounded-pill">5</span>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
                                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">You have received a new message</span></p>
                                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="{{url('activities')}}">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <!-- /Notifications -->
                    
                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}" alt="">
                                <span class="status online"></span>
                            </span>
                            <span>Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('profile')}}"><i data-feather="user" class="me-1"></i> Profile</a>
                            <a class="dropdown-item" href="{{url('settings')}}"><i data-feather="settings" class="me-1"></i> Settings</a>
                            <a class="dropdown-item" href="{{url('login')}}"><i data-feather="log-out" class="me-1"></i> Logout</a>
                        </div>
                    </li>
                    <!-- /User Menu -->
                    
                </ul>
                <!-- /Header Menu -->
                
            </div>
            <!-- /Header -->
        @endif
        
         @if(Route::is(['index-two']))
        <!-- Header -->
            <div class="header header-two">
            
                <!-- Logo -->
                <div class="header-left header-left-two">
                    <!-- Sidebar Toggle -->
                    <a href="javascript:void(0);" id="toggle_btn">
                        <i class="fas fa-bars"></i>
                    </a>
                    <!-- /Sidebar Toggle -->
                    <a href="{{url('index')}}"class="logo">
                        <img src="{{ URL::asset('assets/img/logo-white.png')}}" alt="Logo">
                    </a>
                    <a href="{{url('index')}}"class="dark-logo">
                        <img src="{{ URL::asset('assets/img/logo.png')}}" alt="Logo">
                    </a>
                    <a href="{{url('index')}}"class="logo logo-small">
                        <img src="{{ URL::asset('assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
                    </a>
                </div>
                <!-- /Logo -->
                                
                <!-- Search -->
                <div class="top-nav-search top-nav-search-two">
                    <form>
                        <input type="text" class="form-control" placeholder="Search here">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- /Search -->
                
                <!-- Mobile Menu Toggle -->
                <a class="mobile_btn mobile_btn-two" id="mobile_btn">
                    <i class="fas fa-bars"></i>
                </a>
                <!-- /Mobile Menu Toggle -->
                
                <!-- Header Menu -->
                <ul class="nav nav-tabs user-menu user-menu-two">

                    <!-- Notifications -->
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <i data-feather="bell"></i> <span class="badge rounded-pill">5</span>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
                                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-03.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-04.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">You have received a new message</span></p>
                                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="{{url('activities')}}">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <!-- /Notifications -->
                    
                    <!-- Flag -->
                    <li class="nav-item dropdown has-arrow flag-nav">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                            <img src="{{ URL::asset('assets/img/flags/us.png')}}" alt="" height="20"> <span>English</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('assets/img/flags/us.png')}}" alt="" height="16"> English
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('assets/img/flags/fr.png')}}" alt="" height="16"> French
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('assets/img/flags/es.png')}}" alt="" height="16"> Spanish
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('assets/img/flags/de.png')}}" alt="" height="16"> German
                            </a>
                        </div>
                    </li>
                    <!-- /Flag -->
                    
                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="#" class="dropdown-toggle dropdown-toggle-two nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="">
                                <span class="status online"></span>
                            </span>
                            <span>Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('profile')}}"><i data-feather="user" class="me-1"></i> Profile</a>
                            <a class="dropdown-item" href="{{url('settings')}}"><i data-feather="settings" class="me-1"></i> Settings</a>
                            <a class="dropdown-item" href="{{url('login')}}"><i data-feather="log-out" class="me-1"></i> Logout</a>
                        </div>
                    </li>
                    <!-- /User Menu -->
                    
                </ul>
                <!-- /Header Menu -->
                
            </div>
            <!-- /Header -->   
            @endif 

            @if(Route::is(['index-three']))
           <!-- Header -->
            <div class="header header-five">
                            
                <div class="container">
                    <!-- Logo -->
                    <div class="header-left header-left-five">
                        <a href="{{url('index')}}"class="logo">
                            <img src="{{ URL::asset('assets/img/logo.png')}}" alt="Logo">
                        </a>
                        <a href="{{url('index')}}"class="white-logo">
                            <img src="{{ URL::asset('assets/img/logo-white.png')}}" alt="Logo">
                        </a>
                        <a href="{{url('index')}}"class="logo logo-small">
                            <img src="{{ URL::asset('assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
                        </a>
                    </div>
                    <!-- /Logo -->
                    
                    <!-- Sidebar Toggle -->
                    <a href="javascript:void(0);" id="toggle_btn">
                        <i class="fas fa-bars"></i>
                    </a>
                    <!-- /Sidebar Toggle -->
                    
                    <!-- Search -->
                    <div class="top-nav-search">
                        <form>
                            <input type="text" class="form-control" placeholder="Search here">
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- /Search -->
                    
                    <!-- Mobile Menu Toggle -->
                    <a class="mobile_btn" id="mobile_btn">
                        <i class="fas fa-bars"></i>
                    </a>
                    <!-- /Mobile Menu Toggle -->
                    
                    <!-- Header Menu -->
                    <ul class="nav nav-tabs user-menu">
                        <!-- Flag -->
                        <li class="nav-item dropdown has-arrow flag-nav">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                <img src="{{ URL::asset('assets/img/flags/us.png')}}" alt="" height="20"> <span>English</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('assets/img/flags/us.png')}}" alt="" height="16"> English
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('assets/img/flags/fr.png')}}" alt="" height="16"> French
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('assets/img/flags/es.png')}}" alt="" height="16"> Spanish
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('assets/img/flags/de.png')}}" alt="" height="16"> German
                                </a>
                            </div>
                        </li>
                        <!-- /Flag -->
                        
                        <!-- Notifications -->
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                <i data-feather="bell"></i> <span class="badge rounded-pill">5</span>
                            </a>
                            <div class="dropdown-menu notifications">
                                <div class="topnav-dropdown-header">
                                    <span class="notification-title">Notifications</span>
                                    <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                                </div>
                                <div class="noti-content">
                                    <ul class="notification-list">
                                        <li class="notification-message">
                                            <a href="{{url('activities')}}">
                                                <div class="media d-flex">
                                                    <span class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}">
                                                    </span>
                                                    <div class="media-body">
                                                        <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
                                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-message">
                                            <a href="{{url('activities')}}">
                                                <div class="media d-flex">
                                                    <span class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-03.jpg')}}">
                                                    </span>
                                                    <div class="media-body">
                                                        <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-message">
                                            <a href="{{url('activities')}}">
                                                <div class="media d-flex">
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-message">
                                            <a href="{{url('activities')}}">
                                                <div class="media d-flex">
                                                    <span class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-04.jpg')}}">
                                                    </span>
                                                    <div class="media-body">
                                                        <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-message">
                                            <a href="{{url('activities')}}">
                                                <div class="media d-flex">
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="noti-details"><span class="noti-title">You have received a new message</span></p>
                                                        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="topnav-dropdown-footer">
                                    <a href="{{url('activities')}}">View all Notifications</a>
                                </div>
                            </div>
                        </li>
                        <!-- /Notifications -->
                        
                        <!-- User Menu -->
                        <li class="nav-item dropdown has-arrow main-drop">
                            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                <span class="user-img">
                                    <img src="{{ URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="">
                                    <span class="status online"></span>
                                </span>
                                <span>Admin</span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('profile')}}"><i data-feather="user" class="me-1"></i> Profile</a>
                                <a class="dropdown-item" href="{{url('settings')}}"><i data-feather="settings" class="me-1"></i> Settings</a>
                                <a class="dropdown-item" href="{{url('login')}}"><i data-feather="log-out" class="me-1"></i> Logout</a>
                            </div>
                        </li>
                        <!-- /User Menu -->
                        
                    </ul>
                    <!-- /Header Menu -->
                </div>

            </div>
            <!-- /Header --> 
            @endif

             @if(Route::is(['index-four']))
            <!-- Header -->
            <div class="header header-three">
            
                <!-- Logo -->
                <div class="header-left header-left-three">
                    <a href="{{url('index')}}"class="logo">
                        <img src="{{ URL::asset('assets/img/logo-small.png')}}" alt="Logo">
                    </a>
                    <a href="{{url('index')}}"class="logo logo-small">
                        <img src="{{ URL::asset('assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="top-nav-search top-nav-search-three">
                    <form>
                        <input type="text" class="form-control" placeholder="Search here">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- /Search -->
                
                <!-- Mobile Menu Toggle -->
                <a class="mobile_btn" id="mobile_btn">
                    <i class="fas fa-bars"></i>
                </a>
                <!-- /Mobile Menu Toggle -->
                
                <!-- Header Menu -->
                <ul class="nav nav-tabs user-menu">

                    <!-- Notifications -->
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <i data-feather="bell"></i> <span class="badge rounded-pill">5</span>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
                                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-03.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-04.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{url('activities')}}">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">You have received a new message</span></p>
                                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="{{url('activities')}}">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <!-- /Notifications -->
                    
                    <!-- Flag -->
                    <li class="nav-item dropdown has-arrow flag-nav">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                            <img src="{{ URL::asset('assets/img/flags/us.png')}}" alt="" height="20"> <span>English</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('assets/img/flags/us.png')}}" alt="" height="16"> English
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('assets/img/flags/fr.png')}}" alt="" height="16"> French
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('assets/img/flags/es.png')}}" alt="" height="16"> Spanish
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('assets/img/flags/de.png')}}" alt="" height="16"> German
                            </a>
                        </div>
                    </li>
                    <!-- /Flag -->
                    
                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="#" class="dropdown-toggle dropdown-toggle-two nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="">
                                <span class="status online"></span>
                            </span>
                            <span>Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('profile')}}"><i data-feather="user" class="me-1"></i> Profile</a>
                            <a class="dropdown-item" href="{{url('settings')}}"><i data-feather="settings" class="me-1"></i> Settings</a>
                            <a class="dropdown-item" href="{{url('login')}}"><i data-feather="log-out" class="me-1"></i> Logout</a>
                        </div>
                    </li>
                    <!-- /User Menu -->
                    
                </ul>
                <!-- /Header Menu -->
                
            </div>
            <!-- /Header -->
            @endif

            @if(Route::is(['index-five']))
            <!-- Header -->
            <div class="header header-four">
                <div class="container">

                    <!-- Logo -->
                    <div class="header-left header-left-four">
                        <a href="{{url('index')}}"class="logo">
                            <img src="{{ URL::asset('assets/img/logo-white.png')}}" alt="Logo">
                        </a>
                        <a href="{{url('index')}}"class="dark-logo">
                            <img src="{{ URL::asset('assets/img/logo.png')}}" alt="Logo">
                        </a>
                        <a href="{{url('index')}}"class="logo logo-small">
                            <img src="{{ URL::asset('assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
                        </a>
                    </div>
                    <!-- /Logo -->
                                        
                    
                    <!-- Mobile Menu Toggle -->
                    <a class="mobile_btn mobile_btn-two" id="mobile_btn">
                        <i class="fas fa-bars"></i>
                    </a>
                    <!-- /Mobile Menu Toggle -->

                    <!-- Header Menu List -->
                    <div class="sidebar sidebar-five">
                        <div id="sidebar-menu" class="sidebar-menu sidebar-menu-five">
                            <ul class="nav">
                                <li class="submenu submenu-five nav-item dropdown">
                                    <a href="#" class="dropdown-toggle"><i data-feather="airplay"></i> <span>Main </span> <span class="menu-arrow"></span></a>
                                    <ul class="header-four dropdown-menu dropdown-menu-five dropdown-menu-right">
                                        <li class="active">
                                            <a href="{{url('index')}}"><i data-feather="home"></i> <span>Dashboard</span></a>
                                        </li>
                                        <li>
                                            <a href="{{url('customers')}}"><i data-feather="users"></i> <span>Customers</span></a>
                                        </li>
                                        <li>
                                            <a href="{{url('estimates')}}"><i data-feather="file-text"></i> <span>Estimates</span></a>
                                        </li>
                                        <li class="submenu">
                                            <a href="#"><i data-feather="clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="{{url('invoices')}}">Invoices List</a></li>
                                                <li><a href="{{url('invoice-grid')}}">Invoices Grid</a></li>
                                                <li><a href="{{url('add-invoice')}}">Add Invoices</a></li>
                                                <li><a href="{{url('edit-invoice')}}">Edit Invoices</a></li>
                                                <li><a href="{{url('view-invoice')}}">Invoices Details</a></li>
                                                <li><a href="{{url('invoices-settings')}}">Invoices Settings</a></li>
                                            </ul>
                                        </li>
                                       
                                        <li>
                                            <a href="{{url('payments')}}"><i data-feather="credit-card"></i> <span>Payments</span></a>
                                        </li>
                                        <li>
                                            <a href="{{url('expenses')}}"><i data-feather="package"></i> <span>Expenses</span></a>
                                        </li>
                                        <li class="submenu">
                                            <a href="#"><i data-feather="pie-chart"></i> <span>Reports </span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="{{url('sales-report')}}">Sales Report</a></li>
                                                <li><a href="{{url('expenses-report')}}">Expenses Report</a></li>
                                                <li><a href="{{url('profit-loss-report')}}">Profit & Loss Report</a></li>
                                                <li><a href="{{url('taxs-report')}}">Taxs Report</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('settings')}}"><i data-feather="settings"></i> <span>Settings</span></a>
                                        </li>
                                        <li class="submenu">
                                            <a href="#"><i data-feather="grid"></i> <span> Application</span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="{{url('chat')}}">Chat</a></li>
                                                <li><a href="{{url('calendar')}}">Calendar</a></li>
                                                <li><a href="{{url('inbox')}}">Email</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="submenu submenu-five nav-item dropdown">
                                    <a href="#" class="dropdown-toggle"><i data-feather="file"></i> <span>Pages </span> <span class="menu-arrow"></span></a>
                                    <ul class="header-four dropdown-menu dropdown-menu-five dropdown-menu-right">
                                        <li> 
                                            <a href="{{url('profile')}}"><i data-feather="user-plus"></i> <span>Profile</span></a>
                                        </li>
                                        <li class="submenu">
                                            <a href="#"><i data-feather="lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="{{url('login')}}"> Login </a></li>
                                                <li><a href="{{url('register')}}"> Register </a></li>
                                                <li><a href="{{url('forgot-password')}}"> Forgot Password </a></li>
                                                <li><a href="{{url('lock-screen')}}"> Lock Screen </a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="#"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="{{url('error-404')}}">404 Error </a></li>
                                                <li><a href="{{url('error-500')}}">500 Error </a></li>
                                            </ul>
                                        </li>
                                        <li> 
                                            <a href="{{url('users')}}"><i data-feather="user"></i> <span>Users</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('blank-page')}}"><i data-feather="file"></i> <span>Blank Page</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('maps-vector')}}"><i data-feather="map-pin"></i> <span>Vector Maps</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-five nav-item dropdown"> 
                                    <a href="#" class="dropdown-toggle"><i data-feather="layers"></i> <span>UI Interface </span> <span class="menu-arrow"></span></a>
                                    <ul class="header-four dropdown-menu dropdown-menu-five dropdown-menu-right">
                                        <li> 
                                            <a href="{{url('components')}}"><i data-feather="layers"></i> <span>Components</span></a>
                                        </li>
                                        <li class="submenu">
                                            <a href="#"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                                            <ul>
												<li><a class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}" href="{{ url('form-basic-inputs') }}">Basic Inputs </a></li>
												<li><a class="{{ Request::is('form-input-groups') ? 'active' : '' }}" href="{{ url('form-input-groups') }}">Input Groups </a></li>
												<li><a class="{{ Request::is('form-horizontal') ? 'active' : '' }}" href="{{ url('form-horizontal') }}">Horizontal Form </a></li>
												<li><a class="{{ Request::is('form-vertical') ? 'active' : '' }}" href="{{ url('form-vertical') }}"> Vertical Form </a></li>
												<li><a class="{{ Request::is('form-mask') ? 'active' : '' }}" href="{{ url('form-mask') }}"> Form Mask </a></li>
												<li><a class="{{ Request::is('form-validation') ? 'active' : '' }}" href="{{ url('form-validation') }}"> Form Validation </a></li>									
												<li><a class="{{ Request::is('form-select2') ? 'active' : '' }}" href="{{ url('form-select2') }}">Form Select2 </a></li>
												<li><a class="{{ Request::is('form-fileupload') ? 'active' : '' }}" href="{{ url('form-fileupload') }}">File Upload </a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="#"><i data-feather="layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="tables-basic">Basic Tables </a></li>
                                                <li><a href="data-tables">Data Table </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Header Menu List --> 

                    <!-- Header Menu -->
                    <ul class="nav nav-tabs user-menu user-menu-four">

                        <!-- Notifications -->
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                <i data-feather="bell"></i> <span class="badge rounded-pill">5</span>
                            </a>
                            <div class="dropdown-menu notifications">
                                <div class="topnav-dropdown-header">
                                    <span class="notification-title">Notifications</span>
                                    <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                                </div>
                                <div class="noti-content">
                                    <ul class="notification-list">
                                        <li class="notification-message">
                                            <a href="{{url('activities')}}">
                                                <div class="media d-flex">
                                                    <span class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}">
                                                    </span>
                                                    <div class="media-body">
                                                        <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
                                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-message">
                                            <a href="{{url('activities')}}">
                                                <div class="media d-flex">
                                                    <span class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-03.jpg')}}">
                                                    </span>
                                                    <div class="media-body">
                                                        <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-message">
                                            <a href="{{url('activities')}}">
                                                <div class="media d-flex">
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-message">
                                            <a href="{{url('activities')}}">
                                                <div class="media d-flex">
                                                    <span class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" alt="" src="{{ URL::asset('assets/img/profiles/avatar-04.jpg')}}">
                                                    </span>
                                                    <div class="media-body">
                                                        <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-message">
                                            <a href="{{url('activities')}}">
                                                <div class="media d-flex">
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="noti-details"><span class="noti-title">You have received a new message</span></p>
                                                        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="topnav-dropdown-footer">
                                    <a href="{{url('activities')}}">View all Notifications</a>
                                </div>
                            </div>
                        </li>
                        <!-- /Notifications -->
                        
                        <!-- Flag -->
                        <li class="nav-item dropdown has-arrow flag-nav">
                            <a class="nav-link dropdown-toggle dropdown-toggle-four" data-bs-toggle="dropdown" href="#" role="button">
                                <img src="assets/img/flags/us-one.png" alt="" height="20"> <span>English</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('assets/img/flags/us.png')}}" alt="" height="16"> English
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('assets/img/flags/fr.png')}}" alt="" height="16"> French
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('assets/img/flags/es.png')}}" alt="" height="16"> Spanish
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('assets/img/flags/de.png')}}" alt="" height="16"> German
                                </a>
                            </div>
                        </li>
                        <!-- /Flag -->
                        
                        <!-- User Menu -->
                        <li class="nav-item dropdown has-arrow main-drop">
                            <a href="#" class="dropdown-toggle dropdown-toggle-four nav-link" data-bs-toggle="dropdown">
                                <span class="user-img">
                                    <img src="assets/img/profiles/avatar-14.png" alt="">
                                    <span class="status online"></span>
                                </span>
                                <span>Admin</span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('profile')}}"><i data-feather="user" class="me-1"></i> Profile</a>
                                <a class="dropdown-item" href="{{url('settings')}}"><i data-feather="settings" class="me-1"></i> Settings</a>
                                <a class="dropdown-item" href="{{url('login')}}"><i data-feather="log-out" class="me-1"></i> Logout</a>
                            </div>
                        </li>
                        <!-- /User Menu -->
                        
                    </ul>
                    <!-- /Header Menu -->
                </div>

            </div>
            <!-- /Header -->
            @endif


           