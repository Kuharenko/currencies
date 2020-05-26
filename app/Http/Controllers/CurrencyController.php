<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurrencyRequest;
use App\Services\CurrencyService;

class CurrencyController extends Controller
{
    public function index(CurrencyRequest $request) {
        return CurrencyService::get($request->code, $request->date);
    }
}
