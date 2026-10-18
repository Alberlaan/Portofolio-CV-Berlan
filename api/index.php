<?php

// 1. Arahkan autoload dan bootstrap ke folder yang benar
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 2. WAJIB: Pindahkan folder storage Laravel ke folder sementara /tmp milik Vercel
$app->useStoragePath('/tmp/storage');

// 3. Jalankan HTTP Kernel Laravel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
