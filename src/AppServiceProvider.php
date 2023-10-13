<?php

namespace LaravelLiberu\CnpValidator;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('cnp', 'LaravelLiberu\CnpValidator\Validators\Validator@cnp');
    }
}
