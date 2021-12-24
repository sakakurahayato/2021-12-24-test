<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class TestController extends Controller
{
    public function index()
    {
        $items = Author::all();
        return view('index');
    }

    public function thanks(Request $request)
    {
        $this->validate($request,Author::$rules);
        $form = $request->all();
        Author::create($form);
        return view('thanks');
    }
}