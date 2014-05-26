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

    public function create()
    {
        // Show the create game form.
        return View::make('create');
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
     
     public function internshipdetail()
     {
        
        //$id= new companys_personal_info;
        //$cid=id::last('cid');
        return View::make('internshipdetail');
     }

     public function handleInternshipdetailCreate()
     {
        $game = new internship_detail;
        $game->type        = Input::get('type');
        $game->jobdesc    = Input::get('jobdesc');
        $game->nointernswant = Input::get('nointernswant');
        $game->domain     = Input::get('domain');
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
