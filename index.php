<?php
function list_dir($dir)
{
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file == '.' || $file == '..') {
                    continue;
                }
                $path = $dir . '/' . $file;
                if (is_dir($path)) {
                    echo 'папка:' . $file . "<br>";
                    list_dir($path);
                } else {
                    echo 'файл:' . $file . "<br>";
                }
            }
            closedir($dh);
        }
    }
}

$dir = getcwd();
list_dir($dir);