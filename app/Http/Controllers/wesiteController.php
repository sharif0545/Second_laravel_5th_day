<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class wesiteController extends Controller
{
    public function mywebSite(){

        $hero_section = DB::table('hero_sections')->get();
        $experties = DB:: table('experties')->get();
        $who_am_is = DB:: table('who_am_is')->get();
        $personal_infos = DB::table('personal_infos')->get();
        $experiences = DB::table('experiences')->get();
        $education = DB::table('education')->get();
        $skills = DB::table('skills')->get();
        $languages = DB::table('languages')->get();
        $ctas = DB::table('ctas')->get();
        $countdowns = DB::table('countdowns')->get();
        $services = DB::table('services')->get();


        return view('home', compact('hero_section', 'experties','who_am_is','personal_infos','experiences','education','skills','languages','ctas','countdowns','services'));
      
      
    }

}
