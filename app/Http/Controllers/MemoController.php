<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function edit(Memo $memo){
        return view('memo.edit', compact('memo'));
    }
}
