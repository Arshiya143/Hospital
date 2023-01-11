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

class patientController extends Controller
{

    public function insertform(){
        return view('registration');
        }
        public function create(Request $request){
        $name = $request->input('name');
        $DOB = $request->input('dob');
        $Gender = $request->input('gender');
        $BloodGroup = $request->input('bloodgroup');
        $email = $request->input('email_id');
        $MobileNumber = $request->input('mobile_number');
        $Address = $request->input('address');
        $data=array('name'=>$name,"dob"=>$DOB,"gender"=>$Gender,"bloodgroup"=>$BloodGroup,"email_id"=>$email,"mobile_number"=>$MobileNumber,"address"=>$Address);
        DB::table('patient')->insert($data);
        echo 'Record inserted successfully.<br/>';
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
}