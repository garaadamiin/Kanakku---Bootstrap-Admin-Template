<template>
    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">

        <div class="login-wrapper">
            <div class="container">
            <img class="img-fluid logo-dark mb-4" src="../../assets/img/logo.png" alt="Logo">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <div class="lock-user">
                                <img class="rounded-circle" src="../../assets/img/profiles/avatar-02.jpg" alt="User Image">
                                <h4>John Doe</h4>
                            </div>
                            
                            <!-- Form -->
                            <form>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-lg btn-block btn-primary w-100" type="button" @click="$router.push('/')">Enter</button>
                                </div>
                            </form>
                            <!-- /Form -->
                            
                            <div class="text-center dont-have">Sign in as a different user? <router-link to="/login">Login</router-link></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
</template>