<?php

// $directory = new RecursiveDirectoryIterator(__DIR__ . '/../app');
// $iterator = new RecursiveIteratorIterator($directory);

// foreach ($iterator as $file) {
//     if ($file->isFile() && $file->getExtension() === 'php') {

//         $content = file_get_contents($file->getPathname());

//         preg_match_all('/function\s+([A-Za-z0-9_]+)/', $content, $matches);

//         foreach ($matches[1] as $methodName) {

//             if (!preg_match('/^[a-z][A-Za-z0-9]*$/', $methodName)) {
//                 echo "Invalid method name: $methodName in file " . $file->getFilename() . PHP_EOL;
//                 exit(1);
//             }
//         }
//     }
// }

// echo "All method names are valid." . PHP_EOL;