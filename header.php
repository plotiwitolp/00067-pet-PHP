<?php
//MENU
$home = 'home';

$read = 'read';
$src_t0 = "/1/$read.php";

$form = 'form';
$src_t1 = "/les1/$form.php";

$title_2 = 'file manager';
$src_2 = "/les2/index.php";


?>
<?php require __DIR__ . './head.php'; ?>

<body>
    <ul>
        <li><a href="/"><?= $home; ?></a></li>
        <li><a href="<?php __DIR__ ?><?= $src_t0; ?>"><?= $read; ?></a></li>
        <li><a href="<?php __DIR__ ?><?= $src_t1; ?>"><?= $form; ?></a></li>
        <li><a href="<?php __DIR__ ?><?= $src_2; ?>"><?= $title_2; ?></a></li>
    </ul>