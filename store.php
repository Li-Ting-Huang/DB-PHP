<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
        $pdo=new PDO($dsn,'root','');

       

        $sql="INSERT INTO `students` (`uni_id`,
                                       `seat_num`,
                                       `name`,
                                       `birthday`,
                                       `national_id`,
                                       `address`,
                                       `parent`,
                                       `telphone`,
                                       `major`,
                                       `secondary`
                                        )values(
                                        '{$_POST['uni_id']}', 
                                        '{$_POST['seat_num']}', 
                                        '{$_POST['name']}', 
                                        '{$_POST['birthday']}', 
                                        '{$_POST['national_id']}', 
                                        '{$_POST['address']}', 
                                        '{$_POST['parent']}', 
                                        '{$_POST['telphone']}', 
                                        '{$_POST['major']}', 
                                        '{$_POST['secondary']}' 
                                        )";
       $pdo->query($sql);
       
       header("location:index.php");
    ?>
</body>
</html>