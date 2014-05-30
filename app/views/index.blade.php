@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Interestship <small>home page catch 'em all!</small></h1>
    </div>
  <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('GamesController@create') }}" class="btn btn-primary">Create company</a>
            <a href="{{ action('GamesController@createstudent') }}" class="btn btn-primary">Create student</a>
        </div>
    </div>
    

    
@stop
