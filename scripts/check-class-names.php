<?php

// $directory = new RecursiveDirectoryIterator(__DIR__ . '/../app');
// $iterator = new RecursiveIteratorIterator($directory);

// foreach ($iterator as $file) {
//     if ($file->isFile() && $file->getExtension() === 'php') {

//         $content = file_get_contents($file->getPathname());

//         preg_match('/class\s+([A-Za-z0-9_]+)/', $content, $matches);

//         if (isset($matches[1])) {
//             $className = $matches[1];

//             if (!preg_match('/^[A-Z][A-Za-z0-9]*$/', $className)) {
//                 echo "Invalid class name in file: " . $file->getFilename() . PHP_EOL;
//                 exit(1);
//             }
//         }
//     }
// }

// echo "All class names are valid." . PHP_EOL;