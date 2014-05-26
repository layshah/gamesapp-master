@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Interestship <small>admin page catch 'em all!</small></h1>
    </div>

    it is here

    
    
    yes it is here
        <table>
            <thead>
                <tr>
                    <th>Company id</th>
                    <th>Company name</th>
                    <th>Email</th>
                    <th>Contact number</th>
                    <th>Company's culture</th>
                    <th>Company's domain</th>
                </tr>
            </thead>
            <tbody>
                @foreach($games as $xyz)
                <tr>
                    <td>{{ $xyz->cid }}</td>
                    <td>{{ $xyz->cname }}</td>
                    <td>{{ $xyz->email }}</td>
                    <td>{{ $xyz->contactno }}</td>
                    <td>{{ $xyz->cculture }}</td>
                    <td>{{ $xyz->cdomain }}</td>
                    <td>
                        <a href="{{ action('GamesController@edit', $xyz->cid) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('GamesController@delete', $xyz->cid) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
@stop
