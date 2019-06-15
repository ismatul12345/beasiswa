<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Content;

class ContentController extends Controller
{
	// function untuk menampilkan page dan data konten
   public function index(){
    	if(Auth::user()) 
    	{
    		$page ='content';
    		$data = Content::all(); 
    		return view($page)->with(compact('data')); 
    	}
    	return view('auth.login');
    }

    //funcion untuk menampilkan page form tambah konten
   public function addContent(){
    	if (Auth::user()) 
    	{
    		$page = 'addcontent';
    		return view($page);
    	}
    	return view('auth.login');
    }

    //function untuk aksi tambah konten
    public function createContent(Request $request){
    	$this->validate($request, [
    		'judul' => 'required',
    		'deskripsi' => 'required',
    		'syarat' => 'required',
    		'tanggal' => 'required',
    	]);

    	$data = new Content();
    	$data->judul = $request->get('judul');
    	$data->deskripsi = $request->get('deskripsi');
    	$data->syarat = $request->get('syarat');
    	$data->tanggal = $request->get('tanggal');
    	$data->save();
    	return redirect()->route('content')->with('alert', 'Data berhasil ditambahkan');

    }

    //function untuk aksi delete konten
    public function deleteContent($id){
    	$deleteContent = Content::findOrFail($id);
    	$deleteContent->delete();
    	return redirect()->route('content')->with('alert', 'Data berhasil dihapus');
    }

    //function untuk menampilkan page edit konten
    public function editContent($id){
    	if(Auth::user())
    	{
    		$page = 'editcontent';
    		$editContent = Content::findOrFail($id);
    		return view($page)->with(compact('editContent'));
    	}
    	return view('auth.login');
    }

    // function aksi untuk aksi edit konten
    public function updateContent(Request $request, $id)
    {
    	$updateContent = Content::findOrFail($id);
    	$updateContent->judul = $request->judul;
    	$updateContent->deskripsi = $request->deskripsi;
    	$updateContent->syarat = $request->syarat;
    	$updateContent->tanggal = $request->tanggal;
    	$success = $updateContent->save();
    	if ($success){
    		return redirect()->route('content')->with('alert', 'Data berhasil diubah');
    	}
    	else{
    		return redirect()->route('editcontent')->with('alert', 'Data tidak berhasil diubah');
    	}

    }
}
