<?php

use Illuminate\Support\Facades\Route;
use App\Services\AMPTEST\Service;

Route::any('/services/amptest/callback', [Service::class, 'callback'])->name('service.amptest.callback');