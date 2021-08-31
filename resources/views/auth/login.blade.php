<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://www.sunstatelimo.com/images/favicon.png">
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
   <link href="{{ asset('assets/admin_assets/css/app.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin_assets/css/bootstrap.min.css') }}" />

    <meta name="author" content="" />
    <style>
        .forgotpass {
            background-image: url("{{ asset('assets/admin_assets/images/others/loginbg.gif')}}");  
            background-size:100% 100%;
            background-repeat:no-repeat;
}
.row.forgotPadding{
    background-image: url("{{ asset('assets/admin_assets/images/others/loginbg4.jpg')}}");  
            background-size:100% 100%;
            background-repeat:no-repeat;
    min-height: 100vh;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}


@media only screen and (max-width:767px) {
    .row.forgotPadding{
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
    }
    .text-muted, .small, small {
    color:#fff!important;
}
.small{
    padding-left: 7px;;
}
    .card {
    background-color: transparent!important;
    border: 1px solid transparent;
    }
    .card-body {
    margin: -1rem;
    background: transparent;
}
.font-weight-semibold {
    font-weight: 500 !important;
    color: black;
}
@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
}

    </style>

</head>
<body class="forgotpass">
    <div class="container-fluid">
        <div class="row forgotPadding">
            <div class="text-center mx-auto">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between m-b-30">
                            <img class="img-fluid" alt="" src="{{ asset('assets/admin_assets/images/logo/logo.png') }}">
                            
                        </div>
                         <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group text-left">
                                <label class="font-weight-semibold" for="userName">{{ __('E-Mail Address') }}:</label>
                                <div class="input-affix">
                                    <i class="prefix-icon anticon anticon-user"></i>
                                     <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            
                            <div class="form-group text-left">
                                <label class="font-weight-semibold" for="password">{{ __('Password') }}:</label>
                                <a class="float-right font-size-13 text-muted" href="">Forget Password?</a>
                                <div class="input-affix m-b-10">
                                    <i class="prefix-icon anticon anticon-lock"></i>
                                    <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            
                        <!--    <div class="form-group row">-->
                        <!--    <div class="col-md-6 offset-md-4">-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->

                        <!--            <label class="form-check-label" for="remember">-->
                        <!--                {{ __('Remember Me') }}-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                            <div class="form-group">
                                <div class="d-flex align-items-center justify-content-between">
                                    <!--<span class="font-size-13 text-muted">-->
                                    <!--    Don't have an account? -->
                                    <!--    <a class="small" href="signup.html"> Signup</a>-->
                                    <!--</span>-->
                                    <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          
    

        </div><!---------end of row-->

    </div>
    <script src="{{ asset('assets/admin_assets/js/jquery3.min.js') }}"></script>
    <script src="{{ asset('assets/admin_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin_assets/js/bootstrap4.min.js') }}"></script>
    <script>


        if (!HTMLFormElement.prototype.reportValidity) {
            HTMLFormElement.prototype.reportValidity = function () {
                if (this.checkValidity()) return true;
                var btn = document.createElement("button");
                this.appendChild(btn);
                btn.click();
                this.removeChild(btn);
                return false;
            };
        }

        function SubmitForm(form_name) {
            var form = document.getElementsByName(form_name)[0];
            if (form.reportValidity()) {
                form.submit();
                if (window.submitted) window.submitted();
            }
        }</script>
</body>
</html>
