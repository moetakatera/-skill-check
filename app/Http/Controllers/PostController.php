<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class PostController extends Controller
{
    public function index()
    {
        return view('post');
    }

    public function postDiary(Request $request)
    {
        $request->validate([
			'diary' => 'required|max:200',
		]);
        
        $inputs = $request->all();

        if($request->file("img"))
        {
            $image_name = $request->file("img")->getClientOriginalName();

            $extension = $request->file('img')->getClientOriginalExtension();
            $files = Diary::pluck('img');
            $max = 0;
            foreach ($files as $file) {
                $fileName = pathinfo($file, PATHINFO_FILENAME);
                $number = intval(preg_replace('/[^0-9]/', '', $fileName));
                if ($number > $max) {
                    $max = $number;
                }
            }

            $file_name = 'diary' . ($max + 1) . '.' . $extension;
            $request->file('img')->storeAs('public/diary/img', $file_name);
            $image_path = 'storage/diary/img/' . $file_name;
        
            $postedDiary = $request->only(['title','diary','img']);
            $arrayForCreate = array_merge($postedDiary, ['img'=>$file_name], ['img_path'=>$image_path]);
        
        } else
        {
            $postedDiary = $request->only(['diary','img']);
            $arrayForCreate = $postedDiary;

            $image_name = "";
        }
        Diary::create($arrayForCreate);

        session()->flash('flash_message', '投稿が完了しました');
        return redirect('/');
    }
}