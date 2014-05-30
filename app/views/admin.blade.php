@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Interestship <small>admin page catch 'em all!</small></h1>
    </div>

<div id="MainMenu">
  <div class="list-group panel">
    <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Company details</a>
    <div class="collapse" id="demo3">
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

    </div>
    <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Enter activity Info</a>
    <div class="collapse" id="demo4">
       <form action="{{ action('GamesController@handleactivitycreate') }}" method="post" role="form" name="form1">
       
        <div class="form-group">
            <label for="activitytitle">Enter your activity title</label>
            <input type="text" class="form-control" name="activitytitle" />
        </div>
        <div class="form-group">
            <label for="description">Enter Activity description</label>
            <input type="text" class="form-control" name="description" />
        </div>

         <div class="form-group">
            <label for="domain">Enter Domain of activity</label>
           <select  name="domain">

           @foreach($cid as $xyz)

           <option value="{{ $xyz->did }}"> "{{ $xyz->domain }}" </option>
           @endforeach
       </select>

        
        
       


        <input type="submit" value="Submit" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
    </div>
  </div>
</div>
        


    
@stop
