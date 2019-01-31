@extends('layouts.authApp')

@section('authcontent')

    <div class="col-md-4"></div>
    <div class="col-md-4 register-top-login">
              <form class="form-horizontal register-container tb-padding" role="form" method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group">
                        <div class="col-md-12">
                            <h3 class="text-center">Login to <span class="text-color">Smart Expense Keeping</span></h3>
                        </div>
                    </div>
                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2">
                                <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                   
                                
                            </div>
                            <div class="col-md-10 no-padding margin-style">Remember Me</div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="submit" value="LOG IN" class="btn btn-danger btn-block">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <i class="fa fa-lock"></i><a href="{{route('password.request')}}" class="forgot-link"> Forgot Your Password?</a>
                                
                            </div>
                        </div>
                    </form>

                    <h5 class="text-center">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></h5>
                    <h5 class="text-center">Developed By Bibek Kumar Singh <a href="http://www.bibeksingh.com">Bibek Singh</a></h5>
               
    </div>
      

@endsection
