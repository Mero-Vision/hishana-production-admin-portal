<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Hishana Productions | Admin Portal Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ url('assets/css/login/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/css/login/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/css/login/flaticon.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ url('assets/css/login/login_style.css') }}">

</head>

<body id="top">
    <div class="page_loader"></div>

    <!-- Login 8 start -->
    <div class="login-8">
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-7 col-md-12 form-info">
                    <div class="form-section">
                        <div class=" clearfix">
                            <a href="">
                                <img src="{{ url('assets/img/logo.png') }}" alt="logo" style="width: 100px">
                            </a>
                        </div>
                        <h3>Sign Into Your Account</h3>
                        <div class="login-inner-form">
                            <form action="{{ url('login') }}" method="POST">
                                @csrf
                                <div class="form-group form-box">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Email Address" aria-label="Email Address">
                                    <i class="flaticon-mail-2"></i>
                                    @error('email')
                                        <p class="text-danger text-start">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group form-box">
                                    <input type="password" name="password" class="form-control" autocomplete="off"
                                        placeholder="Password" aria-label="Password">
                                    <i class="flaticon-password"></i>
                                    @error('password')
                                        <p class="text-danger text-start">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="checkbox form-group form-box">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                    <a href="">Forgot Password</a>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn-md btn-theme w-100">Login</button>
                                </div>
                                <p class="text">Don't have an account?<a href="register-8.html"> Register here</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 bg-img">
                    <div class="info">

                        <div class="info-text">
                            <div class="waviy">
                                <span style="--i:1">W</span>
                                <span style="--i:2">e</span>
                                <span style="--i:3">l</span>
                                <span style="--i:4">c</span>
                                <span style="--i:5">o</span>
                                <span style="--i:6">m</span>
                                <span style="--i:7">e</span>
                                <span class="color-yellow" style="--i:8">t</span>
                                <span class="color-yellow" style="--i:9">o</span><br>
                                <span style="--i:10">H</span>
                                <span style="--i:11">i</span>
                                <span style="--i:12">s</span>
                                <span style="--i:13">h</span>
                                <span style="--i:14">a</span>
                                <span style="--i:15">n</span>
                                <span style="--i:16">a</span>


                            </div>
                            <p>Hishana Productions is a dynamic influencer website dedicated to connecting brands with
                                influential social media personalities. Specializing in curated content and impactful
                                campaigns, Hishana Productions leverages the power of influencers to enhance brand
                                visibility and engagement.</p>
                        </div>
                        <ul class="social-list">
                            <li>
                                <a href="#" class="facebook-bg">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google-bg">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin-bg">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest-bg">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login 8 end -->


    <script src="{{ url('assets/js/login/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('assets/js/login/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/login/jquery.validate.min.js') }}"></script>
    <script src="{{ url('assets/js/login/app.js') }}"></script>

</body>

</html>
