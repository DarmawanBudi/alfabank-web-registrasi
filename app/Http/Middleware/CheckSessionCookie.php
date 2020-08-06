<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Middleware;

class CheckSessionCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //MIDDLEWARE
        //middleware digunakan untuk:
        //filtering request yang dikirimkan oleh user
        //jika request user sesuai kondisi yg didefinisikan pada middleware maka next atau lanjut ke kondisi berikutnya
         $cookie_browser = $request->cookie('user_email');
         $session_server = $request->session()->get('user_email');

         if($cookie_browser && $session_server) {

             if($cookie_browser == $session_server){
                 //jika request cookie dari user sesuai dengan session yang terdapat pada server maka next ke proses selanjutnya
                 return $next($request);
             }
         }
         else{
             return redirect()->to('/user_login');
         }
        
    }
}
