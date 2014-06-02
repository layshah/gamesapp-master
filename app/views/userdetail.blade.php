@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Enter details about you<small>we require it</small></h1>
    </div>

    <form action="{{ action('GamesController@handleuserdata') }}" method="post" role="form" name="form1">
        <div class="form-group">
            <label for="umid">User masterid</label>
            @foreach($umid as $game)
            <input name="umid" type='text'  value={{ $game->umid }}></input>
            @endforeach
        </div>

        <div class="form-group">
            <label for="uname">User name</label>
            @foreach($umid as $game)
            <input type="text" disabled="disabled" value="{{ $game->username }}" name="username"></input>
            @endforeach
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            @foreach($umid as $game)
            <input name="email" type='text' disabled="disabled" value="{{ $game->email }}">  </input>
            @endforeach
        </div>

        <div class="form-group">
            <label for="name">Enater your name</label>
            <input type="text" class="form-control" name="name" />
        </div>
        <div class="form-group">
            <label for="internshipduration">Enater your avilability for internship</label>
            
            <input type="text" class="form-control" name="internshipduration" />
        </div>
        
        <div class="form-group">
            <label for="collage">Enter your collage name</label>
           <input type="text" class="form-control" name="collage" />
        </div>
       
       <div class="form-group">
            <label for="degree">Degree</label>
            
            <input type="text" class="form-control" name="degree" />
        </div>

       <div class="form-group">
            <label for="semester">Semester</label>
            
            <input type="text" class="form-control" name="semester" />
        </div>
        
        <div class="form-group">
            <label for="contactno">Contactno</label>
            
            <input type="text" class="form-control" name="contactno" />
        </div>
         <div class="form-group">
            <label for="aboutyou">Enater something about you</label>
            
            <input type="textarea" class="form-control" name="aboutyou" />
        </div>
        
        <div class="form-group">
            <label for="aboutprojects">Enter about your projects</label>
            
            <input type="textarea" class="form-control" name="aboutprojects" />
        </div>
        
        <div class="form-group">
            <label for="experience">Enter your experience</label>
            
            <input type="textarea" class="form-control" name="experience" />
        </div>
        
        <div class="form-group">
            <label for="toolstech">Enter tools and technology you know</label>
            
            <input type="textarea" class="form-control" name="toolstech" />
        </div>
        
        

        
        <input type="submit" value="Next" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop