<?php

function checkCamelCase($name)
{
    return preg_match('/^[a-z][a-zA-Z0-9]*$/', $name);
}

function checkPascalCase($name)
{
    return preg_match('/^[A-Z][a-zA-Z0-9]*$/', $name);
}

$directory = __DIR__ . '/..';

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($directory)
);

$hasError = false;

foreach ($iterator as $file) {

    if ($file->getExtension() !== 'php') {
        continue;
    }

    $content = file_get_contents($file->getPathname());

    // Check class names
    preg_match_all('/class\s+([A-Za-z0-9_]+)/', $content, $classes);

    foreach ($classes[1] as $className) {

        if (!checkPascalCase($className)) {

            echo "Invalid Class Name: $className in {$file->getFilename()}\n";
            $hasError = true;
        }
    }

    // Check function names
    preg_match_all('/function\s+([A-Za-z0-9_]+)\s*\(/', $content, $functions);

    foreach ($functions[1] as $functionName) {

        if (!checkCamelCase($functionName)) {

            echo "Invalid Function Name: $functionName in {$file->getFilename()}\n";
            $hasError = true;
        }
    }

    // Check variables
    preg_match_all('/\\$([A-Za-z0-9_]+)/', $content, $variables);

    foreach ($variables[1] as $variableName) {

        if (!checkCamelCase($variableName)) {

            echo "Invalid Variable Name: $variableName in {$file->getFilename()}\n";
            $hasError = true;
        }
    }
}

if ($hasError) {
    exit(1);
}

echo "Naming conventions passed.\n";