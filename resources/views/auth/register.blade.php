@extends('layouts.authApp')

@section('authcontent')
 <div class="col-md-8 col-md-offset-2">
            <div class="col md-12"></div>
            <div class="col-md-12 register-top">
                <form class="form-horizontal register-container tb-padding" method="POST" action="{{ route('register') }}">
                            {{csrf_field()}}

                            <div class="form-group">
                                <div class="col-md-12">
                                    <h3 class="text-center">Sign Up to <span class="text-color">Smart Expense Keeping</span></h3>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-2 form-control-label">Name:</label>

                                <div class="col-md-10">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-2 form-control-label">E-Mail Address:</label>

                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-2 form-control-label">Password</label>

                                <div class="col-md-10">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-2 form-control-label">Confirm Password</label>

                                <div class="col-md-10">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="country" class="col-md-2 form-control-label">Country</label>

                                <div class="col-md-10">
                                    <select id="country" class="form-control" name="country" required>
                                        <option value="#">Nepal</option>
                                        <option value="#">Usa</option>
                                        <option value="#">India</option>
                                    </select>
                                    @if ($errors->has('country'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="state" class="col-md-2 form-control-label">State</label>

                                <div class="col-md-10">
                                    <select id="state" class="form-control" name="state" required>
                                        <option value="#">State 1</option>
                                        <option value="#">State 2</option>
                                        <option value="#">State 3</option>
                                    </select>
                                    @if ($errors->has('state'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="city" class="col-md-2 form-control-label">City</label>

                                <div class="col-md-10">
                                    <input id="city" type="text" class="form-control" name="city" required>
                                @if ($errors->has('city'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-md-2 form-control-label">Address</label>

                                <div class="col-md-10">
                                    <input id="address" type="text" class="form-control" name="address" required>
                                @if ($errors->has('address'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="postalcode" class="col-md-2 form-control-label">PostalCode</label>

                                <div class="col-md-10">
                                    <input id="postalcode" type="text" class="form-control" name="postalcode" required>
                                @if ($errors->has('postalcode'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('postalcode') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="logo" class="col-md-2 form-control-label">Logo</label>

                                <div class="col-md-10">
                                    <input id="logo" type="file" class="form-control" name="logo" required>
                                @if ($errors->has('logo'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('logo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 offset-md-2">
                                    <button type="submit" class="btn btn-danger btn-block">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    <h5 class="text-center">Already Have An Account? <a href="{{route('login')}}">Sign In</a></h5>
                    <div class="col-sm-10"></div>
            </div>
        </div><!--end of col-md-8-->

@endsection
