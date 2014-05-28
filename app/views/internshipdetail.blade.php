<html>

<head>
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
        <h1>Create Internship<small>remember that this form is for one domain</small></h1>
    </div>

    <form action="{{ action('GamesController@handleInternshipdetailCreate') }}" method="post" role="form" name="form1">
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