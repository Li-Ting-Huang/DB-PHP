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
    <h1>新增學生資料</h1>
    <form action="store.php" method = "post">
        <!-- method="post"讀 取 /method="get"新增 -->
        <label for="">學號:<input type="text" name="uni_id" id=""></label>
        <label for="">班級座號:<input type="text" name="seat_num" id=""></label>
        <label for="">姓名:<input type="text" name="name" id=""></label>
        <label for="">生日:<input type="text" name="birthday" id=""></label>
        <label for="">身分證號碼:<input type="text" name="national_id" id=""></label>
        <label for="">住址:<input type="text" name="address" id=""></label>
        <label for="">家長:<input type="text" name="parent" id=""></label>
        <label for="">電話:<input type="text" name="telphone" id=""></label>
        <label for="">科別:<input type="text" name="major" id=""></label>
        <label for="">畢業國中:<input type="text" name="secondary" id=""></label>
        <input type="submit" value="新增">
        <input type="reset" value="重製">
    </form>
</body>
</html>