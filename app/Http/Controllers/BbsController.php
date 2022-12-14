<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;

class BbsController extends Controller
{
    public function index()
    {
        $bbs = Bb::latest()->get();
        $s = "Объявления\r\n\r\n";

        foreach ($bbs as $bb)
        {
            $s .= $bb->title."\r\n";
            $s .= $bb->price."руб. \r\n\r\n";
        }

        return response($s) -> header('Content-type', 'text/plain');
    }
}
