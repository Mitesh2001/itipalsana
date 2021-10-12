<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class AddXFrameOptions extends Middleware
{
    private $unwantedHeaderList = [
        'X-Powered-By',
        'Server',
    ];
    public function handle($request, Closure $next)
    {
      
        $this->removeUnwantedHeaders($this->unwantedHeaderList);
        $response = $next($request);
        //$response->headers->set('Referrer-Policy', 'no-referrer-when-downgrade');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        //$response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN', false);
        $response->header('Content-Type', 'text/html; charset=utf-8');
        //$response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        //$response->headers->set('Content-Security-Policy', "style-src 'self'"); // Clearly, you will be more elaborate here.
        return $response;
    }
    private function removeUnwantedHeaders($headerList)
    {
        foreach ($headerList as $header)
            header_remove($header);
    }
    /*
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        //$response->headers->set('X-Frame-Options', 'deny'); //Status specify the sameorigin and allow-from depending on the 
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN', false);
        return $response;

    }*/
}
