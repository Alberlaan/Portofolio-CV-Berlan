<?php

$relativePath = rawurldecode((string) ($_GET['file'] ?? ''));
$segments = explode('/', str_replace('\\', '/', $relativePath));

if ($relativePath === '' || in_array('..', $segments, true) || str_contains($relativePath, "\0")) {
    http_response_code(404);
    exit;
}

$publicDirectory = realpath(__DIR__.'/../public');
$assetPath = realpath(__DIR__.'/../public/'.$relativePath);

if (
    $publicDirectory === false
    || $assetPath === false
    || ! is_file($assetPath)
    || ! str_starts_with($assetPath, $publicDirectory.DIRECTORY_SEPARATOR)
) {
    http_response_code(404);
    exit;
}

$mimeType = (new finfo(FILEINFO_MIME_TYPE))->file($assetPath) ?: 'application/octet-stream';

header('Content-Type: '.$mimeType);
header('X-Content-Type-Options: nosniff');
header('Cache-Control: '.(str_starts_with($relativePath, 'build/')
    ? 'public, max-age=31536000, immutable'
    : 'public, max-age=3600'));
header('Content-Length: '.filesize($assetPath));

readfile($assetPath);
