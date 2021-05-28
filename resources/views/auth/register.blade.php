<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>:: Epic :: Login</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />

    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme2.css') }}" />

</head>

<body class="font-montserrat">

    <div class="auth">
        <div class="auth_left">
            <div class="card">
                <div class="text-center mb-2">
                    <a class="header-brand" href="index.html"><i class="fe fe-command brand-logo"></i></a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-title">Register</div>
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" aria-describedby="emailHelp" placeholder="Enter name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" aria-describedby="emailHelp" placeholder="Enter email"
                                value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password" required
                                autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password-confirm" name="password_confirmation" placeholder="Password" required
                                autocomplete="new-password">
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block"> Register </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="auth_right">
            <div class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/slider1.svg" class="img-fluid" alt="login page" />
                        <div class="px-4 mt-4">
                            <h4>Fully Responsive</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider2.svg" class="img-fluid" alt="login page" />
                        <div class="px-4 mt-4">
                            <h4>Quality Code and Easy Customizability</h4>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider3.svg" class="img-fluid" alt="login page" />
                        <div class="px-4 mt-4">
                            <h4>Cross Browser Compatibility</h4>
                            <p>Overview We're a group of women who want to learn JavaScript.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/bundles/lib.vendor.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/core.js') }}"></script>
</body>

</html>