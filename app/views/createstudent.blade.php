@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Student details<small>Your progress starts here </small></h1>
    </div>

    <form action="{{ action('GamesController@handleCreatestudent') }}" method="post" role="form">
        <div class="form-group">
            <label for="username">User name :</label>
            <input type="text" class="form-control" name="username" />
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            
            <input type="email" class="form-control" name="email" />
        </div>
        
        


        
        <input type="submit" value="Next" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop

