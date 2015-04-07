<?php namespace IzinAir\Http\Controllers;

use App\Http\Requests\FriendFormRequest;
// use Illuminate\Routing\Controller;
use Response;
use View;

class FormIzinController extends Controller
{
    public function getForm()
    {
        return view('form');
    }

    public function postForm(FormIzinAirRequest $request)
    {
        return Response::make('Response added!');
    }
}