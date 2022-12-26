<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function index(){
        return view('records.index');
    }

    public function userOnly(){
        $users = Record::get();
        return view('records.index', compact('users'));
    }

    public function showRecord($id){
        $user = User::find($id);
        return view('records.index', compact('id', 'user'));
    }
}
