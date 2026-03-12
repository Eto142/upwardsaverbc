<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Login — Upward Saver Bank Corporation</title>

        <link rel="icon" href="{{ asset('logo1.png') }}" type="image/png"/>
                   
            <link href="auth/temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <!-- Icons -->
            <link href="auth/temp/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        
            <link rel="auth/stylesheet" href="temp/css/line.css">
            
            <!-- Main Css -->
            <link href="auth/temp/css/style.css" rel="stylesheet" type="text/css" />
            <link href="auth/temp/css/colors/default.css" rel="stylesheet">
        

    </head>
    <body class="h-100 bg-soft-primary">
       <section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    <a href="{{ url('/') }}"><img src="{{ asset('logo1.png') }}" alt="Upward Saver Bank" class="mb-3 img-fluid auth__logo" style="max-height:60px;"></a>
                    
                                                                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <h4 class="text-center card-title">User Login</h4>
                            <form method="POST" action="{{ route('login') }}">
                                           @csrf                             
                                    <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name ="email" value="" id="email" placeholder="name@example.com" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" name="password" id="password" placeholder="Enter Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1" name="remember">
                                                    <label class="custom-control-label" for="customCheck1">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                            <p class="mb-0 forgot-pass"><a href="{{ route('password.request') }}"
                                                    class="text-dark font-weight-bold">Forgot password ?</a></p>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit">Sign in</button>
                                    </div>
                                    <!--end col-->

                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; {{ date('Y') }} &nbsp; Upward Saver Bank Corporation &nbsp; All Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->




                 <script src="auth/temp/js/jquery-3.5.1.min.js"></script>
            <script src="auth/temp/js/bootstrap.bundle.min.js"></script>
            
            <!-- SLIDER -->
            <script src="auth/temp/js/owl.carousel.min.js"></script>
            <script src="auth/temp/js/owl.init.js"></script>
            <!-- Icons -->
            <script src="auth/temp/js/feather.min.js"></script>
            <script src="auth/temp/js/bundle.html"></script>
            
            <script src="auth/temp/js/app.js"></script>
            <script src="auth/temp/js/widget.js"></script>
       

    </body>
</html>
</html>
