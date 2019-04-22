<?php
/**
 * Route for Home modules
 * Declare route normally like all other :D
 * For most case, your module name will be the parent path (Ex: /home/abc, /home/xxxx)
 */

$module_admin_namespace = "App\Modules\Login\Controllers\admin";

Route::prefix('/admin')->namespace($module_admin_namespace)->group(function () {
    Route::get('/login', "Login@index")->name('adminLogin');
    Route::post('/login', "Login@doLogin")->name('adminLogin');
});