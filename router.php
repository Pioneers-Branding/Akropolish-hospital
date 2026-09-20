<?php
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Serve static files if they exist
$filePath = __DIR__ . $uri;
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    return false;
}

// Suppress Apple App Site Association noise
if (
    $uri === '/apple-app-site-association' ||
    $uri === '/.well-known/apple-app-site-association'
) {
    http_response_code(404);
    exit;
}

// All routes serve index.php (Home page)
include __DIR__ . '/index.php';
