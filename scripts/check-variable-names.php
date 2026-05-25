<?php

// $directory = new RecursiveDirectoryIterator(__DIR__ . '/../app');
// $iterator = new RecursiveIteratorIterator($directory);

// foreach ($iterator as $file) {

//     if ($file->isFile() && $file->getExtension() === 'php') {

//         $content = file_get_contents($file->getPathname());

//         preg_match_all('/\\$([A-Za-z_][A-Za-z0-9_]*)/', $content, $matches);

//         foreach ($matches[1] as $variableName) {

//             if (!preg_match('/^[a-z][a-zA-Z0-9]*$/', $variableName)) {

//                 echo "Invalid variable name: $variableName in file " .
//                     $file->getFilename() . PHP_EOL;

//                 exit(1);
//             }
//         }
//     }
// }

// echo "All variable names are valid." . PHP_EOL;