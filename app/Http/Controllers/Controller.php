<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function logout()
    {
        Auth::logout();
        return redirect('login');

    }

    // To Convert Site Language
    // function language($lang = 'arabic')
    // {
    //     App::setLocale($lang);
    //     $lang = 1;
    //     $status = array();
    //     return view('welcome',compact('lang'));
    // }

    /*function language($lang)
    {
        if($lang == 'arabic')
        {
        $status = 1;
        $language_type = 'arabic';
        App::setLocale($lang);
        }else
        {
        $status = 0;
        $language_type = 'english';
        App::setLocale($lang);
        }
        $categories = Category::all();
        return view('welcome',compact('status','language_type','categories'));
    }*/


}
