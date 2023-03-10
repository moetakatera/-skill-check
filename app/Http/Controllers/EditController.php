<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class EditController extends Controller
{
    public function index($id)
    {
        $postedDiary = Diary::find($id);
        
        return view('edit', [
            'postedDiary' => $postedDiary
        ]);
    }

    public function editDiary(Request $request, $id)
    {
        $request->validate([
            'diary' => 'required|max:200',
        ]);

        try {
            $postedDiary = Diary::find($id);

            if($request->file("img"))
            {
                $image_name = $request->file("img")->getClientOriginalName();
                
                $extension = $request->file('img')->getClientOriginalExtension();
                $fileName = pathinfo($postedDiary->img, PATHINFO_FILENAME);
                $file_name = $fileName . '.' . $extension;
                $request->file('img')->storeAs('public/diary/img', $file_name);
                $image_path = 'storage/diary/img/' . $file_name;
                $postedDiary->img = $file_name;
                $postedDiary->img_path = $image_path;
            }

            $postedDiary->diary = $request->input('diary');
            
            $postedDiary->save();

        } catch (\Exception $e) {
            return back()->with('msg_error', '商品の更新に失敗しました')->withInput();
        }

        session()->flash('flash_message', '編集が完了しました');
        return redirect('/');
    }
}