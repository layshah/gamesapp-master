<html>

<body>
    <div class="page-header">
        <h1>Enter details about you<small>we require it</small></h1>
    </div>

    <form action="{{ action('GamesController@handleuserdata') }}" method="post" role="form" name="form1">
        <div class="form-group">
            <label for="umid">User masterid</label>
            @foreach($umid as $game)
            {{ $game->umid }}
            @endforeach
        </div>

        <div class="form-group">
            <label for="uname">User name</label>
            @foreach($umid as $game)
            {{ $game->username }}
            @endforeach
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            @foreach($umid as $game)
            {{ $game->email }}
            @endforeach
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
           <select onchange="showsubdomain(this.value)" name="domain">

          
       </select>
         

        </div>

        <div class="form-group">
            <label for="subdomain">Enter SubDomain of intern</label>
           <select name="fruits">

          
       </select>
         
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
</body>

<html>