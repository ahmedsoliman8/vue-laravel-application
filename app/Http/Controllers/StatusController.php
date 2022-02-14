<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public  function index(){
            return Status::with('user')->latest()->get();
    }

    public  function store(Request  $request){
       $this->validate($request,['body'=>'required']);
       $status= User::find(1)->statuses()->create($request->only(['body']));

       return $status->load('user');
    }
}
