<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Content;
class MahasiswaController extends Controller
{
    public function homepage(){
    	if (Auth::user()) 
    	{
    		$page = 'mahasiswa.homepage';
    		$data = Content::all(); 
    		return view($page)->with(compact('data')); 
    	}
    	return view('auth.login');
    
    }
}
