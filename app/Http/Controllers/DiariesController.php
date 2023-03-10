<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class DiariesController extends Controller
{
    public function index()
    {
        $diaries = Diary::latest()->paginate(5);

        return view('diaries', [
            'diaries' => $diaries,
        ]);
    }
}