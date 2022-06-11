<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RifaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('rifas.create');
    }

    public function sendImg(Request $request){
        foreach($request->imgRifa as $image){
            Storage::disk('img_rifa')->put($image->getClientOriginalName(), file_get_contents($image));
        }
        //Create folder
        //Storage::disk('img_rifa')->put('filename',$request->imgRifa);
        return "ok";
    }
}
