<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ ('admin/css/stylelogin.css')}}" media="screen" />
<style>
    #content select{
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    -moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    -ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    -o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    background: #eae7e7 ;
    border: 1px solid #c8c8c8;
    color: #777;
    font: 20px Helvetica, Arial, sans-serif;
    margin: 0 0 10px;
    padding: 15px 10px 15px 40px;
    width: 80%;
    }
</style>

</head>
<body style="background-image: url(images/bg.jpg);">
<div style="margin-top:100px;margin-left: 270px" class="container">
    <section id="content">
    <form action="{{Route('login')}}" method="post">
        @csrf
        <h1> Login</h1>
        <span style="color: red;font-size: 20px;">

    </span>

    <!--select part with css-->
{{--
    <div>
    <select required="required" name="user_role">
    <option>Select user role</option>
<option value="1">Admin</option>
<option value="2">Doctor</option>
<option value="3">Accountant</option>
<option value="4">Nurse</option>
<option value="5">Pharmacy</option>
</select>
</div>--}}

    <div>

    <input type="text" placeholder="Username"  name="email" value="{{ old('email') }}"  required="required" />
    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    <div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>


   <div style="float: left;" class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
<div>
<input type="submit" value="Log in" />
</div>
</form>

<div class="button">
    <a href="">Hospital Management System</a>
</div>

    </section>
</div>
</body>
</html>
