<?php
/**
 * Route for Home modules
 * Declare route normally like all other :D
 * For most case, your module name will be the parent path (Ex: /home/abc, /home/xxxx)
 */

$module_admin_namespace = "App\Modules\Home\Controllers\admin";

Route::prefix('/admin')->namespace($module_admin_namespace)->group(function () {
    Route::get('/', "Home@index")->name("admin")->middleware("AdminLogin");
  

});