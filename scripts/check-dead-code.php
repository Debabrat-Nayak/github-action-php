<?php

// $directory = new RecursiveDirectoryIterator(__DIR__ . '/../app');
// $iterator = new RecursiveIteratorIterator($directory);

// foreach ($iterator as $file) {

//     if ($file->isFile() && $file->getExtension() === 'php') {

//         $content = file_get_contents($file->getPathname());

//         preg_match_all('/\\$([A-Za-z_][A-Za-z0-9_]*)\\s*=/', $content, $matches);

//         foreach ($matches[1] as $variable) {

//             $usageCount = substr_count($content, '$' . $variable);

//             if ($usageCount === 1) {

//                 echo "Unused variable: $" . $variable .
//                     " in file " . $file->getFilename() . PHP_EOL;
    
//                 exit(1);
//             }
//         }
//     }
// }

// echo "No obvious unused variables found." . PHP_EOL;