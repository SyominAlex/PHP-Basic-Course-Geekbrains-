<?php

$dir = __DIR__;

//Рекурсивный обход директории с помощью родных методов
//function recursive($dir)
//{
//    static $deep = 0;
//    $odir = opendir($dir);
//    while (($file = readdir($odir)) !== FALSE)
//    {
//        if ($file == '.' || $file == '..')
//        {
//            continue;
//        }
//        else
//        {
//            echo str_repeat('+--', $deep) . $dir . DIRECTORY_SEPARATOR . $file . '<br>';
//        }
//        if (is_dir($dir . DIRECTORY_SEPARATOR . $file))
//        {
//            $deep ++;
//            recursive($dir . DIRECTORY_SEPARATOR . $file);
//            $deep --;
//        }
//    }
//    closedir($odir);
//}
//recursive($dir);

//Рекурсивный обход директории с помощью итератора (RecursiveDirectoryIterator)
$rdir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir), TRUE);
foreach ($rdir as $file)
{
    echo str_repeat('+--', $rdir->getDepth()) . $file . '<br>';
}
