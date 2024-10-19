<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Email_Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailNotification;

class HomeController extends Controller
{
  public function index()
  {
    return view('pages-home');
  }

  public function sendData(Request $request)
  {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:254',
        'birthplace' => 'required|string|max:100',
        'birthday' => 'required|date',
        'message' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422);
    }

    /*$email_data = Email_Info::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'birthplace' => $request->input('birthplace'),
        'birthday' => $request->input('birthday'),
        'message' => $request->input('message'),
    ]);*/
    

    $data =
        [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'birthplace' => $request->input('birthplace'),
            'birthday' => $request->input('birthday'),
            'message' => $request->input('message'),
        ];


    Mail::to('andreamarras634@gmail.com')->send(new EmailNotification($data));

     return response()->json(['success' => true]);

  }
}