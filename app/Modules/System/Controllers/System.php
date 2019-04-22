<?php
/**
 * Created by PhpStorm.
 * User: Seth Phat
 * Date: 10/15/2018
 * Time: 7:58 PM
 */

namespace App\Modules\System\Controllers;
use App\Http\Controllers\Controller;



class System extends Controller
{
    public function __construct()
    {
        //App::setLocale('vi');
    }

    function page404() {
     
      
        
        return view("System::page404");
    }
    

    

    
}