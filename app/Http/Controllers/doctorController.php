<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class doctorController extends Controller
{

    public function insertform(){
        return view('addDoctor');
        }
        public function create(Request $request){
            $name = $request->input('name');
            $age = $request->input('age');
            $Gender = $request->input('gender');
            $specialization = $request->input('specialization');
            $experience = $request->input('experience');
            $languagespoken = $request->input('languagespoken');
            $mobilenumber = $request->input('mobilenumber');
            $dschedule= $request->input('dschedule');
            $data=array('name'=>$name,"age"=>$age,"gender"=>$Gender,"specialization"=>$specialization,"experience"=>$experience,"languagespoken"=>$languagespoken,"mobilenumber"=>$mobilenumber,"dschedule"=>$dschedule);
            DB::table('doctor')->insert($data);
            echo 'Record inserted successfully.<br/>';
            echo '<a href = "/insert">Click Here</a> to go back.';
        }
        public function search(Request $request){
            $Search_text = $request->get('id');
            $doctor=DB::table('doctor')->select('*')->where('d_id', '=', $Search_text)->get();
            return response()->json(array($doctor));
        }

}