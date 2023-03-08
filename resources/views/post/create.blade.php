<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.submit{
    display:flex ;
    
}
</style>
<body>

 <form action="/post" method="POST">
        姓名：<input type="text" name="name" /><br />
        標題：<input type="text" name="title" /><br />
        內容：<textarea name="content"></textarea>
        {{ csrf_field() }}
        <input type="submit" value="送出" />
    </form>
 </div>

</body>
</html>


