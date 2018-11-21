<?php

namespace App\Helpers;
use App\Url;
use Carbon\Carbon;

class UrlsHelper {

   
        // public static function formatPrice(Url $url) {           
        //         return $url->generated_at;
        //     }
        // }
    
    
    
    
        public static function formatDate(Carbon $date) {
            return $date->format('F, j Y, H:i:s');
        }
    
}