<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\renderUsing;

class GymController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function featur(){
        return view('featur');
    }
    public function classes(){
        return view('classes');
    }
    public function grid(){
        return view('grid');
    }
    public function detail(){
        return view('detail');
    }
    public function contact(){
        return view('contact');
    }
}
