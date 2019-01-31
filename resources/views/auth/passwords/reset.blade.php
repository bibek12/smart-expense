@extends('layouts.appAuth')

@section('authcontent')
<div class="col-md-4"></div>
<div class="col-md-8 col-md-offset-2 register-top-login">
            

                <form class="form-horizontal register-container tb-padding" method="POST" action="{{ route('password.update') }}">
                       {{csrf_field}}}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="text-center">
                                    Reset Password ?
                                </div>
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="email" class="col-md-4 form-control-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" class="col-md-4 form-control-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="col-md-4 form-control-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-danger btn-block">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
             
           
        </div>
 
@endsection
