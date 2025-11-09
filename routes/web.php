<?php

use Illuminate\\Support\\Facades\\Route;
use Nplesa\\ViewLogs\\Http\\Livewire\\ViewLogs;

Route::middleware(config('viewlogs.middleware', ['web']))->group(function() {
    Route::get(config('viewlogs.route', '/view-logs'), ViewLogs::class);
});
