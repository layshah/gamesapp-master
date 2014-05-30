<html>

<head>
   <meta charset="UTF-8">
    <title>Games Collection</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
<script>
function showsubdomain(str) {
    alert("hi");
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.open("get","/handlesubdomain/"+str,true);
  xmlhttp.send();
  xmlhttp.onreadystatechange = function(){
        if(xmlhttp.status == 200)
        {
        
        console.log(xmlhttp.responseText);
            var retValue = JSON.parse(xmlhttp.responseText);
            //console.log(retValue);
            select = document.getElementsByName('fruits')[0];
            select.innerHTML="";
            console.log(retValue.products.length);
            for (var i = 0; i < retValue.products.length; i++) {
        var option = document.createElement("option");
        option.value = retValue.products[i].id;
        option.innerHTML = retValue.products[i].name;
        console.dir(option);
        select.appendChild(option);
    }
        }
  }
}
</script>
</head>



<body>
    <div class="page-header">
        <h1>Enter your desired internship detail<small>remember that this form is for one domain</small></h1>
    </div>

    <form action="{{ action('GamesController@handleuserInternshipdetail') }}" method="post" role="form" name="form1">
        <div class="form-group">
            <label for="umid">User masterid</label>
            @foreach( $umid as $game)
            <input name="umid" type='text'  value={{ $game->umid }}></input>
            @endforeach
        </div>



        <div class="form-group">
            <label for="type">Type of internship</label>
            <input type="text" class="form-control" name="type" />
        </div>
        <div class="form-group">
            <label for="desire">Enter your desire from internship</label>
            <input type="text" class="form-control" name="desire" />
        </div>
        <div class="form-group">
            <label for="career">Would you like to take this as career</label>
            
            <input type="text" class="form-control" name="career" />
        </div>
        
        <div class="form-group">
            <label for="learn">Would you think you need to learn anything to join this domain</label>
           
            <input type="text" class="form-control" name="learn" />
        </div>

        <div class="form-group">
            <label for="domain">Enter Domain of intern</label>
           <select onchange="showsubdomain(this.value)" name="domain">

           @foreach($cid as $xyz)

           <option value="{{ $xyz->did }}"> "{{ $xyz->domain }}" </option>
           @endforeach
       </select>
         

        </div>

        <div class="form-group">
            <label for="subdomain">Enter SubDomain of intern</label>
           <select name="fruits">

           @foreach($jid as $xyzm)

           <option value="{{ $xyzm->did }}"> "{{ $xyzm->domain }}" </option>
           @endforeach
       </select>
         
         </div>

         
        
        <div class="form-group">
            <label for="problem">What is the problems you were facing during getting internship</label>
           
            <input type="textarea" class="form-control" name="problem" />
        </div>

        <div class="form-group">
            <label for="solution">how that problems is solved</label>
           
            <input type="textarea" class="form-control" name="solution" />
        </div>

        <div class="form-group">
            <label for="confusion">Any confusion</label>
           
            <input type="text" class="form-control" name="confusion" />
        </div>

        
        <input type="submit" value="Submit" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
</body>

<html>