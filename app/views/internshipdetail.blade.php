@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create Internship<small>remember that this form is for one domain</small></h1>
    </div>

    <form action="{{ action('GamesController@handleInternshipdetailCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="type">Type of internship</label>
            <input type="text" class="form-control" name="type" />
        </div>
        <div class="form-group">
            <label for="jobdesc">Internship description</label>
            <input type="text" class="form-control" name="jobdesc" />
        </div>
        <div class="form-group">
            <label for="nointernswant">Number of interns you want</label>
            
            <input type="text" class="form-control" name="nointernswant" />
        </div>
        
        <div class="form-group">
            <label for="domain">Enter Domain of intern</label>
           
            <input type="text" class="form-control" name="domain" />
        </div>

         <div class="form-group">
            <label for="elegibility">Enter elegibility</label>
           
            <input type="text" class="form-control" name="elegibility" />
        </div>
        <div class="form-group">
            <label for="unrelated">Are unrelated branch people allowed</label>
           
            <input type="boolean" class="form-control" name="unrelated" />
        </div>

        <div class="form-group">
            <label for="basicqualification">Enter Basic qulification you want</label>
           
            <input type="text" class="form-control" name="basicqualification" />
        </div>

        <div class="form-group">
            <label for="stipend">Enter stipend</label>
           
            <input type="text" class="form-control" name="stipend" />
        </div>

        <div class="form-group">
            <label for="internshipperiod">Enter internship duration</label>
           
            <input type="text" class="form-control" name="internshipperiod" />
        </div>

        <div class="form-group">
            <label for="start">Enter start date</label>
           
            <input type="text" class="form-control" name="start" />
        </div>

        <div class="form-group">
            <label for="else">Anything else you want</label>
           
            <input type="text" class="form-control" name="else" />
        </div>


        <input type="submit" value="Next" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop

