<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class GeneralServiceProvider extends ServiceProvider
{
  public function boot(){}

  public function register()
  {
    App::bind('general', function()
    {
      return new \App\Helpers\General;
    });
  }
}