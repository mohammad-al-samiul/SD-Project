<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id)
    {
        $email = 'alsamiul123@gmail.com';
        $phone = '01832997080';
        $sports = ['criket', 'football', 'tennis'];
        $sports2 = [
            ['id' => 1, 'name' => 'cricket'],
            ['id' => 2, 'name' => 'football'],
            ['id' => 3, 'name' => 'tennis']
        ];
        $show = True;
        return view('news', ['newsId' => $id, 'myphone' => $phone, 'myemail' => $email, 'sports' => $sports, 'sports2' => $sports2, 'show' => $show]);
    }
}
