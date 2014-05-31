@extends('layout')

@section('content')
    <div class="page-header">
        <h1>List of activity <small> catch 'em all!</small></h1>
    </div>

<div id="MainMenu">
    <?php $i=0?>
    <form  action="{{ action('GamesController@handleactivitylist') }}" method="post" role="form" name="form1">
    <div class="form-group">
            <label for="umid">User masterid</label>
            @foreach( $umid as $game)
            <input name="umid" type='text'  value={{ $game->umid }}></input>
            @endforeach
        </div>


    @foreach($games as $xyz)
  <div class="list-group panel">
    
    <a href="#{{$i}}" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">{{ $xyz->activitytitle }}</a>
    <div class="collapse" id= {{ $i }} >
      <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Domain</th>
                    
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>{{ $xyz->description }}</td>
                    <td>{{ $xyz->domain }}</td>
                    
                    <td>
                        <input id= {{ $i }} name="checkbox[{{ $i++ }}]" type="checkbox" value="{{ $xyz->activityid }}"/>
                    </td>
                </tr>
               
            </tbody>
        </table>

    </div>
     @endforeach
     <input type="submit" value="Submit" class="btn btn-primary">
    <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>

   </div>     


    
@stop
