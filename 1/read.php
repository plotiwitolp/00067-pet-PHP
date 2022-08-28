<?php $title = 'read';
require_once __DIR__ . "/../header.php"; ?>
<a href="https://www.youtube.com/watch?v=KRRndV0p_Xg&list=PLM7wFzahDYnFbCIkW-tLHsEuwUk_z1n8P&ab_channel=WebDev%D1%81%D0%BD%D1%83%D0%BB%D1%8F.%D0%9A%D0%B0%D0%BD%D0%B0%D0%BB%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%9B%D1%83%D1%89%D0%B5%D0%BD%D0%BA%D0%BE" target="_blank">Ссылка на урок</a>
<?php
$f = fopen('./test.txt', 'r'); // дескриптор файла
/**
 * будет возвращена ссылка (дескриптор), 
 * путь по которому будут выполняться операции, 
 * ОС будет смотреть на операции по этой ссылке 
 * */
// Чтение строки - fgets()
// Определить конец файла, bool (true - если конец фала достигнут) - feof()
$l = 1;
while (!feof($f) &&  $l < 7) {
    if ($l > 2) {
        echo "<span style='display:inline-block;width:25px;text-align:right;margin-right:5px;'>$l</span> " . fgets($f) . '<br>';
    }
    $l++;
}
fclose($f); // для освобождения ресурсов ОС и возможности манипуляции с файлом другим пользователям
?>

<br>
<div class="code">
    <code>
        <hr>
        <br>
        <?php
        $l2 = 1;
        $f2 = fopen('read.php', 'r');

        while (!feof($f2) && $l2 < 22) {
            echo $l2 . " " . htmlentities(fgets($f2)) . '<br>';
            $l2++;
        }
        fclose($f2);
        ?>
    </code>
</div>