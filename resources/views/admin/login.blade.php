<!doctype html>
<html lang="en">


<!-- Mirrored from risingtheme.com/html/demo-grocee/grocee/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2024 09:29:17 GMT -->

<head>
    <meta charset="utf-8">
    <title>Grocee - Organic Food HTML Template</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/favicon.ico">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/plugins/glightbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

</head>

<body>
    <form action="" method="post">
        @csrf
    
    <div class="account__login--inner">
        <label>
            <input class="account__login--input" placeholder="Enter Name" type="text" name="login">
        </label>
        @error('login')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <label>
            <input class="account__login--input" placeholder="Enter Password" type="password" name="password">
        </label>
        @error('password')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
            <div class="account__login--remember position__relative">
                <input class="checkout__checkbox--input" id="check1" type="checkbox" name="remember">
                <span class="checkout__checkbox--checkmark"></span>
                <label class="checkout__checkbox--label login__remember--label" for="check1">
                    Remember me</label>
            </div>
        </div>
        <button class="account__login--btn btn" type="submit">Login</button>
        
        {{-- <p class="account__login--signup__text">Don,t Have an Account? <button type="submit">Sign up now</button></p> --}}
    </div>
</form>

<script src="{{asset('assets')}}/js/vendor/popper.js" defer="defer"></script>
    <script src="{{asset('assets')}}/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="{{asset('assets')}}/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{asset('assets')}}/js/plugins/glightbox.min.js"></script>

    <!-- Customscript js -->
    <script src="{{asset('assets')}}/js/script.js"></script>

</body>

<!-- Mirrored from risingtheme.com/html/demo-grocee/grocee/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2024 09:29:23 GMT -->

</html>