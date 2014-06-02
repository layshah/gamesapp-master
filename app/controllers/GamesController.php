<?php

// app/controllers/GamesController.php

class GamesController extends BaseController
{
    public function index()
    {
        // Show a listing of games.
        //$games = Game::all();

        return View::make('index');
    }

    public function login()
    {
        // Show a listing of games.
        //$games = Game::all();

        return View::make('login');
    }

    public function handlelogin1()
    {
        // Show a listing of games.
        //$games = Game::all();
      $games=activity_master::all();
      $uname=Input::get('username');
      $pass=Input::get('password');
      //echo $uname;
      //echo $pass;
      $pass1=user_master::where('username','=',$uname)->get();
         //echo $pass1;
          if($pass1[0]['password']==$pass)
          {
             
             return View::make('index');
          }
        else
        { 
        return View::make('index');
        }   
    }

    public function create()
    {
        // Show the create game form.
        return View::make('create');
    }

    public function createstudent()
    {
        // Show the create game form.
        return View::make('createstudent');
    }


    public function handleCreatestudent()
    {
        // Handle create form submission.
        $game = new user_master;
        $game->username        = Input::get('username');
        $password    = Input::get('password');
        $game->password = $password; //Hash::make($password);
        
        $game->email = Input::get('email');
        
        $game->save();
        

    //$to = $toEmail; //deeppatelj@gmail.com";
  
  $subject = "Interestship - ";
  $body1 = "<p>Hi ";
  $body2 = "<p>Regards, <br> Team Interestship </p>";
  $body = $body1.$body2;
  $headers = "From: team@interestship.com\r\n";
  $headers .= "Reply-To: team@interestship.com\r\n";
  $headers .= "Return-Path: team@interestship.com\r\n";
  $headers .= "X-Mailer: PHP5\n";
  $headers .= 'MIME-Version: 1.0' . "\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  //$toEmail .= $toEmail."; team@interestship.com"
  //echo $body;
  //echo $body;
  //function email($toEmail, $subject, $body, $headers)
  mail($game->email,$subject,$body,$headers);
  
  




        $mas=$game->id;
        //echo $mas;
         //$mas=user_master::Query('SELECT * FROM mytable WHERE umid = LAST_INSERT_ID()');
       $umid=user_master::where('umid','=',$mas)->get();
       return View::make('userdetail')->with('umid',$umid);
       
       //return Response::make(json_encode($umid), 200); 
       // return Redirect::to('/form_internshipdetail');
    }

    public  function admin() 
    {
        $games = companys_personal_info::all();
        $internshipdetail = internship_detail::all(); 
        $cid=domain::where('pid','=','0')->get();
        return View::make('admin')->with('games',$games)->with('internshipdetail',$internshipdetail)->with('cid',$cid);
    }

   public  function activitylist() 
   {
        $games = activity_master::all();
        //$internshipdetail = internship_detail::all(); 
        //$cid=domain::where('pid','=','0')->get();
        return View::make('activitylist')->with('games',$games);
    }

    public function handleactivitylist()
    {  
        $x=0;
        $activity =array();
        $number = count($_POST['checkbox']);
        print_r($number);
        
        foreach($_POST['checkbox'] as $check) 
              
              {
                $game = new activity_perform_detail;
                $game->activityid  =  $check;
                $game->userid = Input::get('umid');$umid1= Input::get('umid');     
                $game->submit= "";
                $game->save();
                //$activity[$x]=activity_master::where('activityid','=',$check)->get();
                //$x++;                  
              }    
        $mas= Input::get('umid');     
         $umid=user_master::where('umid','=',$mas)->get();
        
        $activitytoperformlist=activity_perform_detail::where('userid','=',$umid1)->get();
       // echo $umid;
        //echo $activity->get();
        return View::make('activitytoperform')->with('umid',$umid)->with('atoplist',$activitytoperformlist);
        // Handle create form submission.
        //$game = new companys_personal_info;
        //$game->cname        = Input::get('cname');
        //$game->Email    = Input::get('Email');
        //$game->contactno = Input::get('contactno');
        //$game->cculture     = Input::get('cculture');
        //$game->cdomain     = Input::get('cdomain');
        //$game->save();

        //return Redirect::action('GamesController@internshipdetail');
       // return Redirect::to('/form_internshipdetail');
    }



    public function handleCreate()
    {
        // Handle create form submission.
        $game = new companys_personal_info;
        $game->cname        = Input::get('cname');
        $game->Email    = Input::get('Email');
        $game->contactno = Input::get('contactno');
        $game->cculture     = Input::get('cculture');
        $game->cdomain     = Input::get('cdomain');
        $game->save();

        return Redirect::action('GamesController@internshipdetail');
       // return Redirect::to('/form_internshipdetail');
    }


    public function handleactivitycreate()
    {
        // Handle create form submission.
        $game = new activity_master;
        $game->activitytitle        = Input::get('activitytitle');
        $game->description    = Input::get('description');
        $game->domain = Input::get('domain');
        
        $game->save();

        
        return Redirect::to('/admin');
    }

    public function handleuserdata()
    {
        $game = new user_detail;
        $game->umid        = Input::get('umid');
        $game->name    = Input::get('name');
        $game->internshipduration = Input::get('internshipduration');
        $game->collage     = Input::get('collage');
        $game->degree     = Input::get('degree');
        $game->semester     = Input::get('semester');
        $game->contactno     = Input::get('contactno');
        $game->aboutyou     = Input::get('aboutyou');
        $game->aboutprojects     = Input::get('aboutprojects');
        $game->experience     = Input::get('experience');
        $game->toolstech     = Input::get('toolstech');
        $game->save(); 
        $umid1=$game->umid;
        $umid=user_master::where('umid','=',$umid1)->get();
         $cid=domain::where('pid','=','0')->get();
        $jid=domain::where('pid','=','0')->get();
      
       return View::make('userinternshipdetail')->with('umid',$umid)->with('cid',$cid)->with('jid',$jid);
        
    }
     
     public function internshipdetail()
     {
        
        $id= new domain;
        $cid=domain::where('pid','=','0')->get();
        $jid=domain::where('pid','=','0')->get();
      
    return View::make('internshipdetail')->with('cid',$cid)->with('jid',$jid);
     }

     
     public function handlesubdomain($q)
     {
      
       $kid=(int)$q;
         
        $jid=domain::where('pid','=',$q)->get();
        $result['products'] = array();
        
        foreach ($jid as $xyzm)
            
           {
            $product=array();
            $product['kid']=$kid;
            $product['id']=$xyzm->did;
           $product['name']=$xyzm->domain;
        array_push($result["products"], $product);
           }
        return Response::make(json_encode($result), 200); 
         
     }

     public function handleInternshipdetailCreate()
     {
        $game = new internship_detail;
        $game->type        = Input::get('type');
        $game->jobdesc    = Input::get('jobdesc');
        $game->nointernswant = Input::get('nointernswant');
        $game->domain     = Input::get('fruits');
        $game->elegibility     = Input::get('elegibility');
        $game->unrelated     = Input::get('unrelated');
        $game->basicqualification     = Input::get('basicqualification');
        $game->stipend     = Input::get('stipend');
        $game->internshipperiod     = Input::get('internshipperiod');
        $game->start     = Input::get('start');
        $game->else     = Input::get('else');
        $game->save();
        return View::make('index');

     }


     public function handleuserInternshipdetail()
     {
        $game = new user_internship_detail;
        $game->umid        = Input::get('umid');
        $game->desire    = Input::get('desire');
        $game->career = Input::get('career');
        $game->learn     = Input::get('learn');
        $game->domain     = Input::get('fruits');
        $game->problem     = Input::get('problem');
        $game->solution     = Input::get('solution');
        $game->confusion     = Input::get('confusion');
        
        $game->save();
        $umid1=$game->umid;
        $umid=user_master::where('umid','=',$umid1)->get();
        $games = activity_master::all();
        return View::make('activitylist')->with('umid',$umid)->with('games',$games);

     } 

    public function edit(Game $game)
    {
        // Show the edit game form.
        return View::make('edit', compact('game'));
    }

    public function handleEdit()
    {
        // Handle edit form submission.
        $game = Game::findOrFail(Input::get('id'));
        $game->title        = Input::get('title');
        $game->publisher    = Input::get('publisher');
        $game->complete     = Input::has('complete');
        $game->save();

        return Redirect::action('GamesController@index');
    }

    public function delete(Game $game)
    {
        // Show delete confirmation page.
        return View::make('delete', compact('game'));
    }

    public function handleDelete()
    {
        // Handle the delete confirmation.
        $id = Input::get('game');
        $game = Game::findOrFail($id);
        $game->delete();

        return Redirect::action('GamesController@index');
    }
}
