@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Company details<small>Your progress starts here </small></h1>
    </div>

    <form action="{{ action('GamesController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="cname">Company name</label>
            <input type="text" class="form-control" name="cname" />
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="Email" />
        </div>
        <div class="form-group">
            <label for="contactno">Company's contact no. </label>
            
            <input type="text" class="form-control" name="contactno" />
        </div>
        
        <div class="form-group">
            <label for="cculture">Company's culture</label>
            <div> Awesome things that happen at your company.</div>
            <input type="text" class="form-control" name="cculture" />
        </div>
        
        <div class="form-group">
            <label for="cdomain">Company's domain</label>
           
            <input type="text" class="form-control" name="cdomain" />
        </div>


        
        <input type="submit" value="Next" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop

