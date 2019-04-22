<?php
/**
 * Route for Home modules
 * Declare route normally like all other :D
 * For most case, your module name will be the parent path (Ex: /home/abc, /home/xxxx)
 */

$module_namespace = "App\Modules\System\Controllers";

Route::prefix('/404')->namespace($module_namespace)->group(function () {
    Route::get('/', "System@page404")->name("404");
  
});