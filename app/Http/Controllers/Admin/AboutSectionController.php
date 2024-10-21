<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutSectionController extends Controller
{
    public function about_form(){
        return view('admin.aboutform');
    }
    public function about_form_save(Request $arequest){
        
         $who = $arequest->who;
         $designation = $arequest->designation;
         $my_des = $arequest->my_des;
         $cv_btn_link = $arequest->cv_btn_link;
         $cv_btn_txt = $arequest->cv_btn_txt;
        //  dd($cv_btn_txt);
         
            DB::insert("INSERT INTO who_am_is(who, designation, my_des, cv_btn_link, cv_btn_txt)
         values('$who','$designation','$my_des','$cv_btn_link','$cv_btn_txt')");
    }
}
