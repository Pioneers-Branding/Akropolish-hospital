<?php
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// If it's a directory, check for index.php inside it
if (is_dir(__DIR__ . $uri)) {
    $indexFile = rtrim(__DIR__ . $uri, '/') . '/index.php';
    if (file_exists($indexFile)) {
        include $indexFile;
        return;
    }
}

// Clean URL mapping
$clean_urls = [
    '/departments' => 'departments.php',
    '/department' => 'departments.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
    '/doctors' => 'doctors.php',
    '/orthopedics' => 'orthopedics.php',
    '/cardiology' => 'cardiology.php',
    '/neurology' => 'neurology.php',
    '/nephrology' => 'nephrology.php',
    '/oncology' => 'oncology.php',
    '/plastic-surgery' => 'plastic-surgery.php',
    '/obstetrics-gynecology' => 'obstetrics-gynecology.php'
];

if (isset($clean_urls[rtrim($uri, '/')])) {
    include $clean_urls[rtrim($uri, '/')];
    return;
}

// Special redirects from .htaccess style
if ($uri === '/orthopedic-hospital/haryana' || $uri === '/orthopedic-hospital/haryana/') {
    include 'orthopedics.php';
    return;
}
if ($uri === '/haddi-ka-doctor/haryana' || $uri === '/haddi-ka-doctor/haryana/') {
    include 'haddi-ka-doctor.php';
    return;
}

// Fallback to index.php
if ($uri === '/' || $uri === '/index.php') {
    include 'index.php';
    return;
}

return false;
?>
