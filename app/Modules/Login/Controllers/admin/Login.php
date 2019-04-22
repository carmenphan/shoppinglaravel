<?php
/**
 * Created by PhpStorm.
 * User: Seth Phat
 * Date: 10/15/2018
 * Time: 7:58 PM
 */

namespace App\Modules\Login\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Modules\User\Models\User;
use Session;
class Login extends Controller
{
    protected $_modelUser ;

    public function __construct(User $user)
    {
        
        $this->_modelUser = $user;
        //App::setLocale('vi');
    }

    function index(Request $request) {
        return view('Login::admin.login', ['text' => trans('Home::home.hello')]);
    }
    function doLogin(Request $request) {
        if (!$request->isMethod("post")){
            return redirect()->route('404');
        }
        $this->_modelUser->username = $request->username;
        $this->_modelUser->password = $request->password;
       
        (int) $_doLogin = $this->_modelUser->Login();
        switch ($_doLogin) {
            case 0:
                Session::flash('message', 'Username Or Password Is Empty');
                Session::flash('alert-class', 'alert-warning'); 
                return redirect()->route('adminLogin');
                break;
            case 1:
                Session::flash('message', 'Username Not Exist In System');
                Session::flash('alert-class', 'alert-warning'); 
                return redirect()->route('adminLogin');
                break;
            case 2:
                Session::flash('message', 'Password Not Match In System');
                Session::flash('alert-class', 'alert-warning'); 
                return redirect()->route('adminLogin');
                break;
            case 3:
                return redirect()->route('admin');
                break;
            
        }
      

    }

    

    
}