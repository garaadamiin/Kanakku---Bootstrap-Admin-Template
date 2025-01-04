<?php error_reporting(0);?>
 @if(!Route::is(['index-two','index-three','index-four','index-five']))
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="{{ Request::is('index') ? 'active' : '' }}">
                    <a href="{{url('index')}}"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li  class="{{ Request::is('customers','add-customer','edit-customer') ? 'active' : '' }}">
                    <a href="{{url('customers')}}"><i data-feather="users"></i> <span>Customers</span></a>
                </li>
                <li  class="{{ Request::is('estimates','add-estimate','edit-estimate','view-estimate') ? 'active' : '' }}">
                    <a href="{{url('estimates')}}"><i data-feather="file-text"></i> <span>Estimates</span></a>
                </li>
                <li class="{{ Request::is('invoices','invoices-paid','invoices-overdue','invoices-draft','invoices-recurring','invoices-cancelled','invoice-grid','add-invoice','edit-invoice','view-invoice','invoices-settings','tax-settings','bank-settings') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
						<ul>
							<li><a class="{{ Request::is('invoices','invoices-paid','invoices-overdue','invoices-draft','invoices-recurring','invoices-cancelled') ? 'active' : '' }}" href="{{url('invoices')}}" >Invoices List</a></li>
							<li><a class="{{ Request::is('invoice-grid') ? 'active' : '' }}" href="{{url('invoice-grid')}}">Invoices Grid</a></li>
							<li><a class="{{ Request::is('add-invoice') ? 'active' : '' }}" href="{{url('add-invoice')}}">Add Invoices</a></li>
							<li><a class="{{ Request::is('edit-invoice') ? 'active' : '' }}" href="{{url('edit-invoice')}}">Edit Invoices</a></li>
							<li><a class="{{ Request::is('view-invoice') ? 'active' : '' }}" href="{{url('view-invoice')}}">Invoices Details</a></li>
							<li><a class="{{ Request::is('invoices-settings','tax-settings','bank-settings') ? 'active' : '' }}" href="{{url('invoices-settings')}}">Invoices Settings</a></li>
						</ul>
				</li>
                <li  class="{{ Request::is('payments','add-payments') ? 'active' : '' }}">
                    <a href="{{url('payments')}}"><i data-feather="credit-card"></i> <span>Payments</span></a>
                </li>
                <li  class="{{ Request::is('expenses','add-expenses','edit-expenses') ? 'active' : '' }}">
                    <a href="{{url('expenses')}}"><i data-feather="package"></i> <span>Expenses</span></a>
                </li>
                <li class="submenu <?php if($page=="sales-report" || $page=="expenses-report" || $page=="profit-loss-report" || $page=="taxs-report") { echo 'active'; } ?>">
                    <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if($page=="sales-report") { echo 'active'; } ?>" href="{{url('sales-report')}}">Sales Report</a></li>
                        <li><a class="<?php if($page=="expenses-report") { echo 'active'; } ?>" href="{{url('expenses-report')}}">Expenses Report</a></li>
                        <li><a class="<?php if($page=="profit-loss-report") { echo 'active'; } ?>" href="{{url('profit-loss-report')}}">Profit & Loss Report</a></li>
                        <li><a class="<?php if($page=="taxs-report") { echo 'active'; } ?>" href="{{url('taxs-report')}}">Taxs Report</a></li>
                    </ul>
                </li>
                <li  class="{{ Request::is('settings','change-password','delete-account','expense-category','notifications','preferences','tax-types') ? 'active' : '' }}">
                    <a href="{{url('settings')}}"><i data-feather="settings"></i> <span>Settings</span></a>
                </li>
                <li class="submenu <?php if($page=="chat" || $page=="calendar" || $page=="calendar" || $page=="inbox") { echo 'active'; } ?>">
                    <a href="#"><i data-feather="grid"></i> <span> Application</span> <span class="menu-arrow"></span></a>
                    <ul>
                    <li><a class="<?php if($page=="chat") { echo 'active'; } ?>" href="{{url('chat')}}">Chat</a></li>                    
                    <li><a class="<?php if($page=="calendar") { echo 'active'; } ?>" href="{{url('calendar')}}">Calendar</a></li>
                    <li><a class="<?php if($page=="inbox") { echo 'active'; } ?>" href="{{url('inbox')}}">Email</a></li>
                    </ul>
                </li>
                <li class="menu-title"> 
                    <span>Pages</span>
                </li>
                <li class="{{ Request::is('profile') ? 'active' : '' }}"> 
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
                <li class="{{ Request::is('users') ? 'active' : '' }}"> 
                    <a href="{{url('users')}}"><i data-feather="user"></i> <span>Users</span></a>
                </li>
                <li class="{{ Request::is('blank-page') ? 'active' : '' }}"> 
                    <a href="{{url('blank-page')}}"><i data-feather="file"></i> <span>Blank Page</span></a>
                </li>
                <li class="{{ Request::is('maps-vector') ? 'active' : '' }}"> 
                    <a href="{{url('maps-vector')}}"><i data-feather="map-pin"></i> <span>Vector Maps</span></a>
                </li>
                <li class="menu-title"> 
                    <span>UI Interface</span>
                </li>
                <li class="{{ Request::is('components') ? 'active' : '' }}"> 
                    <a href="{{url('components')}}"><i data-feather="layers"></i> <span>Components</span></a>
                </li>
                <li class="submenu <?php if($page=="form-basic-inputs" || $page=="form-horizontal" || $page=="form-vertical" || $page=="form-mask" || $page=="form-input-groups" || $page=="form-validation") { echo 'active'; } ?>">
                    <a href="#"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if($page=="form-basic-inputs") { echo 'active'; } ?>" href="{{url('form-basic-inputs')}}">Basic Inputs </a></li>
                        <li><a class="<?php if($page=="form-input-groups") { echo 'active'; } ?>" href="{{url('form-input-groups')}}">Input Groups </a></li>
                        <li><a class="<?php if($page=="form-horizontal") { echo 'active'; } ?>" href="{{url('form-horizontal')}}">Horizontal Form </a></li>
                        <li><a class="<?php if($page=="form-vertical") { echo 'active'; } ?>" href="{{url('form-vertical')}}"> Vertical Form </a></li>
                        <li><a class="<?php if($page=="form-mask") { echo 'active'; } ?>" href="{{url('form-mask')}}"> Form Mask </a></li>
                        <li><a class="<?php if($page=="form-validation") { echo 'active'; } ?>" href="{{url('form-validation')}}"> Form Validation </a></li>
                    </ul>
                </li>

                <li class="submenu <?php if($page=="tables-basic" || $page=="data-tables") { echo 'active'; } ?>">
                    <a href="#"><i data-feather="layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if($page=="tables-basic") { echo 'active'; } ?>" href="{{url('tables-basic')}}">Basic Tables </a></li>
                        <li><a class="<?php if($page=="data-tables") { echo 'active'; } ?>" href="{{url('data-tables')}}">Data Table </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
@endif

    
@if(Route::is(['index-two']))

<!-- Sidebar -->
            <div class="sidebar sidebar-two" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu sidebar-menu-two">
                        <ul>
                            <li class="menu-title menu-title-two"><span>Main</span></li>
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
                                <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
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
                            <li class="menu-title menu-title-two"> 
                                <span>Pages</span>
                            </li>
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
                            <li class="menu-title menu-title-two"> 
                                <span>UI Interface</span>
                            </li>
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
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->
@endif

@if(Route::is(['index-three']))
<!-- Sidebar -->
        <div class="sidebar sidebar-three-three" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"><span>Main</span></li>
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
                            <a href="invoice-items"><i data-feather="star"></i> <span>Items</span></a>
                        </li>
                        <li>
                            <a href="{{url('expenses')}}"><i data-feather="package"></i> <span>Expenses</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
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
                        <li class="menu-title"> 
                            <span>Pages</span>
                        </li>
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
                        <li class="menu-title"> 
                            <span>UI Interface</span>
                        </li>
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
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
@endif

@if(Route::is(['index-four']))
<!-- Sidebar -->
    <div class="sidebar sidebar-three" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu sidebar-menu-three">
                    <aside id="aside" class="ui-aside">
                      <ul class="tab nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link active" href="#home" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"  role="tab" aria-controls="home" aria-selected="true">
                                <i data-feather="airplay"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"  role="tab" aria-controls="messages" aria-selected="false">
                                <i data-feather="layers"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation"> 
                            <a class="tablinks nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"  role="tab" aria-controls="profile" aria-selected="false">
                                <i data-feather="file"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">  
                            <a class="tablinks nav-link" href="{{url('chat')}}" >
                                <i class="feather-message-square"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation"> 
                            <a class="tablinks nav-link" href="{{url('inbox')}}" >
                                <i class="feather-mail"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">  
                            <a class="tablinks nav-link" href="{{url('calendar')}}" >
                                <i class="feather-calendar"></i>
                            </a>
                        </li>
                      </ul>
                    </aside>
                    <div class="tab-content tab-content-three">
                        <ul class="tab-pane active" id="home" aria-labelledby="home-tab">
                            <li  class="menu-title menu-title-three"><span>Main</span></li>
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
                                <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
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
                        <ul class="tab-pane" id="messages" aria-labelledby="messages-tab">
                            <li id="inter" class="menu-title menu-title-three"> 
                                <span>UI Interface</span>
                            </li>
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
                        <ul class="tab-pane" id="profile" aria-labelledby="profile-tab">
                            <li class="menu-title menu-title-three"> 
                                <span>Pages</span>
                            </li>
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
                        
                     </div>
                </div>
            </div>
    </div>
<!-- /Sidebar -->
@endif

@if(Route::is(['index-five']))
<!-- Sidebar -->
<div class="sidebar sidebar-four sidebar-hide" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu sidebar-menu-four">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="active">
                    <a href="{{url('index')}}"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{url('customers')}}"><i data-feather="users"></i> <span>Customers</span></a>
                </li>
                <li>
                    <a href="{{url('estimates')}}"><i data-feather="file-text"></i> <span>Estimates</span></a>
                </li>
                <li>
                    <a href="{{url('invoices')}}"><i data-feather="clipboard"></i> <span>Invoices</span></a>
                </li>
                <li>
                    <a href="{{url('payments')}}"><i data-feather="credit-card"></i> <span>Payments</span></a>
                </li>
                <li>
                    <a href="{{url('expenses')}}"><i data-feather="package"></i> <span>Expenses</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
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
                <li class="menu-title menu-title-two"> 
                    <span>Pages</span>
                </li>
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
                <li class="menu-title menu-title-two"> 
                    <span>UI Interface</span>
                </li>
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
        </div>
    </div>
</div>
<!-- /Sidebar -->
@endif