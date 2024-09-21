<?php

use Illuminate\Support\Facades\Route;
use App\Services\AMP\Service;

Route::any('/services/amp/callback', [Service::class, 'callback'])->name('service.amp.callback');