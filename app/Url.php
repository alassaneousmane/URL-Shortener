<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    //


    public $timestamps = false;

    protected $fillable = ['url', 'shortened'];


    public static function getUniqueShortUrl() {
		$shortened = str_random(5);

		if(self::whereShortened($shortened)->count() != 0) {
			return getUniqueShortUrl();
		}

		return $shortened;
	}

	public static function formatDate(Carbon $date) {
            return $date->format('F, j Y, H:i:s');
        }
}
