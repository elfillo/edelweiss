<?php
require_once('core.php');
require preg_replace('/wp-content(?!.*wp-content).*/', '', __DIR__) . '/wp-load.php';

$sync = new SyncFlatData();
$flatsCount = $sync->deleteAllRecords();
$info = 'Данные о '.$flatsCount.' кв. были удалены';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Удаление данных о квартирах</title>
</head>
<body>
<div class="container">
    <div class="info_block">
        <?php echo $info?>
    </div>
    <a class="home_link" href="/wp-admin/options-general.php?page=sync-flat-data">Вернуться в админку</div>
</div>
</body>
</html>
<style>
    html, body{
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
    }
    .container{
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,.5);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .info_block{
        color: white;
    }
    .home_link{
        text-decoration: none;
    }
</style>