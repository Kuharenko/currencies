<?php


namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class CurrencyService
{
    public static function get($code = 'USD', $date = null)
    {
        if ($date) {
            $now = Carbon::now()->toDateString();
            return (Http::get("https://api.exchangeratesapi.io/history?base={$code}&start_at=${date}&end_at={$now}"))->json();
        } else {
            $response = Http::get("https://api.exchangeratesapi.io/latest?base={$code}");
            return $response->json();
        }
    }
}
