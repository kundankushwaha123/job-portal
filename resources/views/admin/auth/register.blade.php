<!DOCTYPE html>
<html lang="en">
<head>

       <!-- Title -->
    <title>Register | JobPortal</title>

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png')}}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

</head>

<body class="account-page">

    <!-- Main Wrapper -->
     
    <div class="main-wrapper">

        <div class="account-content">
            <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden account-bg-02">
                <div
                    class="d-flex align-items-center justify-content-center flex-wrap vh-100 overflow-auto p-4 w-50 bg-backdrop">
                    <form action="{{route('register-data')}}" method="POST" class="flex-fill">
                        @csrf
                        <div class="mx-auto mw-450">
                            <div class="text-center mb-4">
                                <img src="{{asset('assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
                            </div>
                            <div class="mb-4">
                                <h4 class="mb-2 fs-20">Register</h4>
                                <p>Create new CRMS account</p>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Name</label>
                                <div class="position-relative">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-user"></i>
                                    </span>
                                    <input type="text" value="{{old('name')}}" name="name"class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Email Address</label>
                                <div class="position-relative">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-mail"></i>
                                    </span>
                                    <input type="email" value="{{old('email')}}" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input form-control" name="password">
                                    <span class="ti toggle-password ti-eye-off"></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Confirm Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-inputs form-control" name="password_confirmation">
                                    <span class="ti toggle-passwords ti-eye-off"></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                            </div>
                            <div class="mb-3">
                                <h6>Already have an account? <a href="{{route('login')}}" class="text-purple link-hover"> Sign
                                        In Instead</a></h6>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /Main Wrapper -->

    

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}" type="9758ece26150084b5c9026d7-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}" type="9758ece26150084b5c9026d7-text/javascript"></script>

    <!-- Feather Icon JS -->
    <script src="{{ asset('assets/js/feather.min.js')}}" type="9758ece26150084b5c9026d7-text/javascript"></script>


    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js')}}" type="9758ece26150084b5c9026d7-text/javascript"></script>

</html>