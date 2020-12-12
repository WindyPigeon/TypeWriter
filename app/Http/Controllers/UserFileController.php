<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserFileController extends Controller
{
    //
    public function index()
    {
        return view('filebrowser/filebrowser');
    }

    public function edit($path, $file)
    {
        $_GET['path'] = $path;
        $_GET['file'] = $file;
        return view('filebrowser/editor');
    }

}
