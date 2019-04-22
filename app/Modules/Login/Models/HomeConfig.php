<?php
/**
 * Created by PhpStorm.
 * User: Seth Phat
 * Date: 10/15/2018
 * Time: 8:48 PM
 */

namespace App\Modules\Home\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    public $timestamps = false;
    public static $snakeAttributes = false;
}