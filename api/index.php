<?php

// 1. Memanggil file autoload dan bootstrap Laravel dari folder utama
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 2. Mengatur folder storage sementara khusus untuk serverless Vercel
$app->useStoragePath('/tmp/storage');

// 3. Menjalankan HTTP Kernel Laravel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
