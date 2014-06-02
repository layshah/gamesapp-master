@extends('layout')

@section('content')
    <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <h3>
        
    </h3>
        <form role="form" action="{{ action('GamesController@handlelogin') }}" method="post">
            <fieldset>
                <h2>Please Login</h2>
                <hr class="colorgraph">
                <div class="form-group">
                    <input type="text" name="username" id="email" class="form-control input-lg" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                </div>
                <!--
                <span class="button-checkbox">
                    <button type="button" class="btn" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
                    <a href="" class="btn btn-link pull-right">Forgot Password?</a>
                </span>
                -->
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="registration.php" class="btn btn-lg btn-primary btn-block">Register</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
    
</div>

@stop