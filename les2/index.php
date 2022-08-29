<?php
$title = 'file_manager';
require_once __DIR__ . "/../header.php";

$folder = 't1';

if (is_dir($folder)) {
    if ($dh = opendir($folder)) {
        while (($file = readdir($dh)) !== false) {
            echo "<span>папка: $file " .  "</span><br>";
        }
        closedir($dh);
    }
}
// working with com project №00069