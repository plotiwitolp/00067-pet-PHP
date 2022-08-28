<?php
$title = 'form';
require_once __DIR__ . "/../header.php";
/**
 * https://www.youtube.com/watch?v=zR3Xxv1pjFU&list=PLM7wFzahDYnFbCIkW-tLHsEuwUk_z1n8P&index=2&ab_channel=WebDev%D1%81%D0%BD%D1%83%D0%BB%D1%8F.%D0%9A%D0%B0%D0%BD%D0%B0%D0%BB%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%9B%D1%83%D1%89%D0%B5%D0%BD%D0%BA%D0%BE
 */
?>

<form action="1.php" method="GET">
    <p>Число 1 <input type="text" name="n1"></p>
    <p>Число 2 <input type="text" name="n2"></p>
    <p>Радио 1 <input type="radio" name="radio" value="111"></p>
    <p>Радио 2 <input type="radio" name="radio" value="222"></p>
    <p>Радио 3 <input type="radio" name="radio" value="333"></p>
    <input type="submit" value="Go">
</form>