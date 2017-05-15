<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Cookie;
class ValidationController extends Controller {
   public function showform(){
	    session(['key' => 'testing']);
	   $session_id = session()->getId();
	   //echo $session_id;exit;
	  
	   //Cookie::queue("ccokname", "sajitha", 3600);
	   //$cookie = Cookie::make('ccokname', 'sajitha', 3660);
	  // $name = Cookie::get('NAME');
	 // $name = Cookie::get('NAME', 'Unknown');
//echo "Hello $name";exit;
      return view('login');
   }
    public function getms(){
		//$n = $_POST['name'];
		$n=Input::get('name');
      $msg = "This is a simple message.".$n;
      return response()->json(array('msg'=> $msg), 200);
   }
   
   
   public function validateform(Request $request){
	   
	 $file = $request->file('image');
	 $username = $request->username;
	  $password = $request->password;
	 //Display File Name
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   //Move Uploaded File
      $destinationPath = 'uploads';
      $file->move($destinationPath,$file->getClientOriginalName());
      DB::insert('insert into login (uname,pwd,photo) values(?,?,?)',[$username,$password,$file->getClientOriginalName()]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/event">Click Here</a> to go back.';
	   
      print_r($request->all());
      $this->validate($request,[
         'username'=>'required|max:8',
         'password'=>'required'
      ]);
   }
}