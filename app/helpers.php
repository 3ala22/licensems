<?php


use Illuminate\Support\Facades\Route;

function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');

    if (func_num_args() == 0) {
        return $flash;
    }

    return $flash->info($title, $message);
}

function menuActiveRoute($routeName, $includeClass = true, $className = 'active')
{
    $activeClass = ($includeClass ? "class=\"{$className}\"" : $className);
    return preg_match('/^' . preg_quote($routeName, '/') . '/', Route::currentRouteName()) ? $activeClass : '';
}
