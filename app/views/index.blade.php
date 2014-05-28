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
    

    @if ($companys_personal_infos->isEmpty())
        <p>There are no games! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Company name</th>
                    <th>Email</th>
                    <th>Contact number</th>
                    <th>Company's culture</th>
                    <th>Company's domain</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companys_personal_info as $game)
                <tr>
                    <td>{{ $game->cname }}</td>
                    <td>{{ $game->email }}</td>
                    <!--<td>{{ $game->complete ? 'Yes' : 'No' }}</td>-->
                    <td>
                        <a href="{{ action('GamesController@edit', $game->cid) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('GamesController@delete', $game->cid) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
