<?php

namespace App\Http\Controllers;

use App\Jobs\DoHeavyStuff;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class FileController extends Controller
{
    public function file()
  {
    return view('file.index');
  }
  public function store(Request $request)
  {
    $file = $request->file('file')->store('upload','public');
    $this->dispatch(new DoHeavyStuff($file.'jhgiur'));



  }
}
