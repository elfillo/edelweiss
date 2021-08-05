<?php
require_once('core.php');
require preg_replace('/wp-content(?!.*wp-content).*/', '', __DIR__) . '/wp-load.php';

$sync = new SyncFlatData();

$flats = $sync->getJson();
$flatsArr = json_decode($flats)->result;

foreach ($flatsArr as $flat) {
    $post_id = $sync->createFlatRecord($flat);
    $sync->updatePostMeta($post_id, $flat);
}

$sync->saveDataToFile($flats);
$info = 'Сохранены данные о '.count($flatsArr).' кв.';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сохранение квартир</title>
</head>
<body>
    <div class="container">
        <div class="info_block">
            <?php echo $info?>
        </div>
        <a class="home_link" href="/wp-admin/">Вернуться в админку</div>
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