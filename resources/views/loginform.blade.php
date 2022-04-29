<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login and Registration Form in HTML | CodingNepal</title>
    <link rel="stylesheet" href="{{ asset('assets/css/loginform.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('./images/24Ocean.png') }}">
</head>
<body>
<div class="wrapper">
    <div class="title-text">
        <div class="title login">
            Login Form
        </div>
        <div class="title signup">
            Signup Form
        </div>
    </div>
    <div class="form-container">
        <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup" >
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
        </div>
        <div class="form-inner">

            <form method="POST" action="{{ route('login') }}" class="login">
                <div>
                    @if($errors->any)
                        @foreach ($errors->all() as $error)
                            <div class="text-error">{{ $error }}</div>
                        @endforeach
                    @endif
                    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
                        @if(session('alert-'.$msg))
                            <div class="alert alert-{{ $msg }} alert-dismissible fade show">{{ session('alert-'.$msg) }} <a
                                    href="#" class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>
                        @endif
                    @endforeach
                </div>
                @csrf
                <div class="field">
                    <input type="text" placeholder="Email Address" name="email">
                </div>
                <div class="field">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="pass-link">
                    <a class="" href="{{ route('password.request') }}">Forgot password?</a>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">
                    Not a member? <a href="">Signup now</a>
                </div>
            </form>
            <form  class="signup" method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    @if($errors->any)
                        @foreach ($errors->all() as $error)
                            <div class="text-error">{{ $error }}</div>
                        @endforeach
                    @endif
                    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
                        @if(session('alert-'.$msg))
                            <div
                                class="alert alert-{{ $msg }} alert-dismissible fade show">{{ session('alert-'.$msg) }}
                                <a
                                    href="#" class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>
                        @endif
                    @endforeach
                </div>
                <div class="field">
                    <input type="text" placeholder="Email Address" name="email">
                </div>
                <div class="field">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="field">
                    <input type="password" placeholder="Confirm password" name="password_confirmation">
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Signup">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    // const loginRadio = document.querySelector("#login");
    // const signupRadio = document.querySelector("#signup");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    // if(loginRadio.checked == true){
    //     loginForm.style.marginLeft = "0%";
    //     loginText.style.marginLeft = "0%";
    // }else if(signupRadio.checked == true){
    //     loginForm.style.marginLeft = "-50%";
    //     loginText.style.marginLeft = "-50%";
    // }
    signupLink.onclick = (() => {
        signupBtn.click();
        return false;
    });
</script>
</body>
</html>
