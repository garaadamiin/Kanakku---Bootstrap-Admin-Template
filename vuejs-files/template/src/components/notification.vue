<template>
<!-- Notifications -->
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
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
                                        <router-link to="/activities">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="../assets/img/profiles/avatar-02.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
                                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                </div>
                                            </div>
                                        </router-link>
                                    </li>
                                    <li class="notification-message">
                                        <router-link to="/activities">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="../assets/img/profiles/avatar-03.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                </div>
                                            </div>
                                        </router-link>
                                    </li>
                                    <li class="notification-message">
                                        <router-link to="/activities">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                </div>
                                            </div>
                                        </router-link>
                                    </li>
                                    <li class="notification-message">
                                        <router-link to="/activities">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="../assets/img/profiles/avatar-04.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                </div>
                                            </div>
                                        </router-link>
                                    </li>
                                    <li class="notification-message">
                                        <router-link to="/activities">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">You have received a new message</span></p>
                                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                </div>
                                            </div>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <router-link to="/activities">View all Notifications</router-link>
                            </div>
                        </div>
                    </li>
                    <!-- /Notifications -->
</template>