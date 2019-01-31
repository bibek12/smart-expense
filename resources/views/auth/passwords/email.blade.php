@extends('layouts.authApp')

@section('authcontent')
<div class="col-md-4"></div>
<div class="col-md-4 register-top-login">
            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal register-container tb-padding" method="POST" action="{{ route('password.email') }}">
                        {{csrf_field()}}

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="text-center">
                                    Forgot Password ?
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="col-md-2 col-form-label text-md-right">E-Mail:</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your Reset Email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-danger btn-block">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>

                    <h5 class="text-center">Don't Have An Account? <a href="{{route('register')}}">Sign Up</a></h5>
                    <h5 class="text-center">Go To Login <a href="{{route('login')}}"> Sign In</a></h5>
                </div>
          

@endsection
