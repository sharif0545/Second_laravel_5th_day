<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HeroSectionRequest;
use function Laravel\Prompts\select;

class BackendController extends Controller
{
        public function hero_form(){
            return view ('admin.heroform');
        }

        public function hero_list(){
            $hero_section = DB::table('hero_sections')->get();
            return view ('admin.herolist',compact('hero_section'));
        
        }
        public function hero_delete($id){
            DB::select('DELETE FROM hero_sections WHERE id= "'.$id.'"');
            return redirect('/herolist')->with('status', 'Profile updated!');
            
        }
        public function hero_edit($id){
              $hero_updated_by_id = DB::table('hero_sections')->where('id', $id)->first();
        //    var_dump($hero_updated_by_id);
            return view ('admin.heroeditform', compact('hero_updated_by_id'));
        }

        public function hero_form_save(HeroSectionRequest $arequest){
           
              $validate_input = $arequest->validate();
              
        //    $validate_input = $arequest->validate([
        //     'person_name'=>'required|string|max:2',
        //     'hello'=>'required',
        //     'designation'=>'required',
        //     'btn_text'=>'required',
        //     'btn_url'=>'required'
        //    ]);
           
            $hero_name = $arequest->person_name;
            $hero_hello = $arequest->hello;
            $hero_designation = $arequest->designation;
            $hero_btn_text = $arequest->btn_text;
            $hero_btn_url = $arequest->btn_url;
                // dd($hero_btn_text);
            DB::select("INSERT INTO hero_sections(person_name, hello, designation, btn_text, btn_url) 
            VALUES('$hero_name','$hero_hello','$hero_designation','$hero_btn_text','$hero_btn_url')");

            return redirect()->route('admin.herolist');
            // return redirect()->back();
            
        }

        public function hero_form_update(Request $arequest){

            $hero_id = $arequest->id;
            $hero_name = $arequest->person_name;
            $hero_hello = $arequest->hello;
            $hero_designation = $arequest->designation;
            $hero_btn_text = $arequest->btn_text;
            $hero_btn_url = $arequest->btn_url;
        // dd($arequest);

            DB::select("UPDATE hero_sections SET person_name= '$hero_name',hello= '$hero_hello',designation= '$hero_designation',btn_text= '$hero_btn_text',btn_url= '$hero_btn_url' WHERE id ='$hero_id'");
         
            // DB::table('hero_sections')
            // ->where('id', $hero_id)  // find your user by their email
            // // ->limit(3)  // optional - to ensure only one record is updated.
            // ->update(array('person_name'=>$hero_name,'hello'=>$hero_hello,'designation'=>$hero_designation,'btn_text'=>$hero_btn_text,'btn_url'=>$hero_btn_url));  // update the record in the DB. 
                
            return redirect()->route('admin.herolist');
            // return redirect()->back();
        }

}

?>


