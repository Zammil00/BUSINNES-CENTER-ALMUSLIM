<?php
$cssLink = '<link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />';

$dir = new RecursiveDirectoryIterator(__DIR__);
$ite = new RecursiveIteratorIterator($dir);
$files = new RegexIterator($ite, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

foreach($files as $file) {
    if (basename($file[0]) === 'apply_css.php') continue;
    $content = file_get_contents($file[0]);
    
    // Check if it's an HTML page with <head>
    if (stripos($content, '</head>') !== false) {
        if (strpos($content, 'modern.css') === false) {
            $content = str_ireplace('</head>', "    $cssLink\n</head>", $content);
            file_put_contents($file[0], $content);
            echo "Added CSS to " . $file[0] . "\n";
        }
    }
}
echo "Done.\n";
?>

