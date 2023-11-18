<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page1">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gleek - Bootstrap Admin Dashboard HTML Template</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin.assets/images/favicon.png') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('main/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<div class="login-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content login-form">
                    <div class="card">
                        <div class="card-body">
                            <div class="logo text-center">
                                <a href="{{ route('admin.auth') }}">
                                    <img src="{{ asset('admin.assets/images/f-logo.png') }}" alt="">
                                </a>
                            </div>
                            <h4 class="text-center mt-4">Log into Your Account</h4>
                            @error('invalid')
                                <br><div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <form class="mt-5 mb-5" method="post" action="{{ route('admin.auth') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="text-center mb-4 mt-4">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
<!-- Common JS -->
<script src="{{ asset('admin.assets/plugins/common/common.min.js') }}"></script>
<!-- Custom script -->
<script src="{{ asset('main/js/custom.min.js') }}"></script>
<script src="{{ asset('main/js/settings.js') }}"></script>
<script src="{{ asset('main/js/gleek.js') }}"></script>
</body>

</html>
