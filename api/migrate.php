<?php

require __DIR__ . '/../public/index.php';

use Illuminate\Support\Facades\Artisan;

return function ($request, $response) {
    Artisan::call('migrate --seed');
    return $response->json([
        'message' => 'Migrations and seeders executed successfully!',
    ]);
};
