<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
//import this
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider{
  /**
  * Register any application services.
  *
  * @return void
  */
  public function register(){
     //add this
     Schema::defaultStringLength(191);
  }
  /**
  * Bootstrap any application services.
  *
  * @return void
  */
   public function boot(){
      //
   }
}
