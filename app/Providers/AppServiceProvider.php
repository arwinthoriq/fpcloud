<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use App\Observers\HomeObserver;
use App\Home;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
//    public function boot()
  //  {
    //    VerifyEmail::toMailUsing(function($notifiable) {
      //      $verifyUrl = URL::temporarySignedRoute(
        //        'verification.verify', Carbon::now()->addMinutes(60), ['id' => $notifiable->getKey()]);
          //      return (new MailMessage)
            //    ->subject('Welcome')
              //  ->markdown('emails.verify', ['url' => $verifyUrl]);
 //       });
   // }
   public function boot(){
    Home::observe(HomeObserver::class);
}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
