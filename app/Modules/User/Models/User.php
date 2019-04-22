<?php
/**
 * Created by PhpStorm.
 * User: Seth Phat
 * Date: 10/15/2018
 * Time: 8:48 PM
 */

namespace App\Modules\User\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Session;

class User extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    public $timestamps = false;
    public static $snakeAttributes = false;
 

   
    function Login ():int{
       
        if ($this->username == "" || $this->password == ""){
            return "0"; // user name or password = ""
        }
        $username = $this->username;
        $password = $this->password;
        $detail = $this->where(["username" => $username ])->first();
        if ($detail == null){
            return 1;
        }
        if (!Hash::check($password,$detail->password)){
            return 2;
        }else {
            //$this->_httpRequest->session()->push("adminUser",$detail);
            session(['adminUser' => $detail]);
            return 3;
        }
        

    }
}