<?php

// in_array function retruns a bool value

$names = ['scott', 'pierre', 'noel'];

var_dump(in_array('pierre', $names)); // true

if(in_array('scott', $names))
{
    echo "status: 200\n";
}

$fileTypes = ['jpg', 'svg', 'png'];
$filename = 'bike.png';

$fileParts = explode('.', $filename);
$fileExtension = end($fileParts);

if(in_array($fileExtension, $fileTypes))
{
    echo "$fileExtension can be uplaoded\n";
}


//Checking contents of files
//useful when you need to set a condition to check for multiple items
//use in_array instead of (if($file == '.' || $file == '..' || $file == 'DS'))

$files = opendir('files');
$ignoreFiles = ['.', '..', '.DS_Store'];

while(($file = readdir($files)) !== false)
{
    if(in_array($file, $ignoreFiles))
    {
        continue;
    }
    var_dump($file);
}