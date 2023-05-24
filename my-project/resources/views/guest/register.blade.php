<!doctype html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.70/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('guest/css/style.css') }}">

</head>

<body class="img" style="background-image: url({{ asset('guest/images/bg.jpg') }}); width: 100vw; height: 100vh;">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Sign Up</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap">
                        <h3 class="text-center mb-4">Create Your Account</h3>
                        <form action="/register" method="POST" class="signup-form">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="label" for="name">Full Name</label>
                                <input name="name" type="text" class="form-control" placeholder="John Doe">
                                <span class="icon fa fa-user-o"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="email">Email Address</label>
                                <input name="email" type="text" class="form-control"
                                    placeholder="johndoe@gmail.com">
                                <span class="icon fa fa-paper-plane-o"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                            </div>
                        </form>
                        <p>I'm already a member! <a href="{{ url('/login') }}">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('guest/js/jquery.min.js') }}"></script>
    <script src="{{ asset('guest/js/popper.js') }}"></script>
    <script src="{{ asset('guest/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('guest/js/main.js') }}"></script>

</body>

</html>
