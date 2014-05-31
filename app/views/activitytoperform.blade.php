@extends('layout')

@section('content')
    <div class="page-header">
        <h1>List of activity you have to perform<small> catch 'em all!</small></h1>
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


    @foreach($atoplist as $xyz)
    
  <div class="list-group panel">
    
    <a href="#{{$i}}" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">{{ $xyz->activityid }}</a>
    <div class="collapse" id= {{ $i }} >
      <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Domain</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php  $games=DB::table('activity_masters')->where('activityid', $xyz->activityid )->get() ?>
                 @foreach($games as $game)
                <tr>
                    <td>{{ $game->description}}</td>
                    <td>{{ $game->domain }}</td>
                    
                    <td>
                        <input id= {{ $i++ }}  type="file" />
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
</form>
    </div>
     @endforeach
     
    <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    
</div>

   </div>     


    
@stop
