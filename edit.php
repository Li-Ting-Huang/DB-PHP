<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增學生資料</title>
    
    <style>
        *{
            
            margin:auto 0;
            padding: 0;
        }
        label{
            display:block;
            padding: 4px;
            width: 100px;
        }
        label input{
            padding:3px;
            font-size:1.2rem;
        }
    </style>
</head>
<body>
    <h1>編輯學生資料</h1>
    <?php

    $id=$_GET['id'];
    /*方法1 echo "<button><a href='edit.php?id={$row['id']}'>更新</button>";
       對應 input type="hidden" name="id" value="<?=$id;?>">
       缺點ID容易被人知道*/ 
    
    //  $id=$_POST['id'];
    /*方法2 對應edit.php<form action="" method="post"></form>*
    ->為了網址不顯示id，不意被人破解*/

    echo "編輯".$id."的資料";

    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');
    
    $sql="SELECT * FROM `students` WHERE `id`='$id'";

    $student = $pdo->query($sql)->fetch();
   /* 將資料表中相對應id資料表取出來*/
    ?>
    <form action="update.php" method = "post">
        <!-- method="post"讀 取 /method="get"新增 -->
        <label for="">學號:<input type="text" name="uni_id" value="<?=$student['uni_id'];?>"></label>
        <label for="">班級座號:<input type="text" name="seat_num" value="<?=$student['seat_num'];?>"></label>
        <label for="">姓名:<input type="text" name="name" value="<?=$student['name'];?>"></label>
        <label for="">生日:<input type="text" name="birthday" value="<?=$student['birthday'];?>"></label>
        <label for="">身分證號碼:<input type="text" name="national_id" value="<?=$student['national_id'];?>"></label>
        <label for="">住址:<input type="text" name="address" value="<?=$student['address'];?>"></label>
        <label for="">家長:<input type="text" name="parent" value="<?=$student['parent'];?>"></label>
        <label for="">電話:<input type="text" name="telphone" value="<?=$student['telphone'];?>"></label>
        <label for="">科別:<input type="text" name="major" value="<?=$student['major'];?>"></label>
        <label for="">畢業國中:<input type="text" name="secondary" value="<?=$student['secondary'];?>"></label>
        
        <input type="hidden" name="id" value="<?=$id;?>">
        
        <input type="submit" value="更改">
        <input type="reset" value="清除">
    </form>
</body>
</html>