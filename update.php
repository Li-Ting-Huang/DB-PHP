<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新資料</title>
</head>
<body>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');

    $sql="UPDATE `students` SET
                `uni_id`='{$_POST['uni_id']}',
                `seat_num`='{$_POST['seat_num']}',
                `name`='{$_POST['name']}',
                `birthday`='{$_POST['birthday']}',
                `national_id`='{$_POST['national_id']}',
                `address`='{$_POST['address']}',
                `parent`='{$_POST['parent']}',
                `telphone`='{$_POST['telphone']}',
                `major`='{$_POST['major']}',
                `secondary`='{$_POST['secondary']}'
        WHERE   `id`='{$_POST['id']}'";
    
    echo $sql;

    // $pdo->query($sql);(回傳資料經過sever)

    $pdo->exec($sql);//(簡化回傳資料不用經過sever)

    header("location:index.php");

    /* 檢查
    echo "<pre>";
    echo $sql;*/

    ?>
</body>
</html>