<?php

// $directory = new RecursiveDirectoryIterator(__DIR__ . '/../app');
// $iterator = new RecursiveIteratorIterator($directory);

// foreach ($iterator as $file) {

//     if ($file->isFile() && $file->getExtension() === 'php') {

//         $lines = file($file->getPathname());

//         $insideFunction = false;
//         $functionStart = 0;
//         $braceCount = 0;

//         foreach ($lines as $lineNumber => $line) {

//             if (preg_match('/function\\s+[A-Za-z0-9_]+\\s*\\(/', $line)) {

//                 $insideFunction = true;
//                 $functionStart = $lineNumber;
//             }

//             if ($insideFunction) {

//                 $braceCount += substr_count($line, '{');
//                 $braceCount -= substr_count($line, '}');

//                 if ($braceCount === 0) {

//                     $functionLength = $lineNumber - $functionStart;

//                     if ($functionLength > 100) {

//                         echo "Function exceeds 100 lines in file: " .
//                             $file->getFilename() . PHP_EOL;

//                         exit(1);
//                     }

//                     $insideFunction = false;
//                 }
//             }
//         }
//     }
// }

// echo "All functions are within allowed length." . PHP_EOL;