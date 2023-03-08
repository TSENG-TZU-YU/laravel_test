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
<form name="signup" action="signup.php" method="post">
    <p>Username : <input type=text name="name"></p>
    <p>Password : <input type=password name="password"></p>
 <div class='submit'>
 <p><input type="submit" name="submit" value="Sign up">
    <p><input type="submit" name="Reset" value="Reset">
 </div>
 <div>
        @foreach ($datas as $key => $data)
            <a href="/post/{{ $data->id }}">{{ $data->title }}</a> <br />
            作者：{{ $data->name }} <br />
            內容：{{ $data->content }} <br />
            時間:{{$data->created_at}} <br />
        @endforeach

        @foreach ($datas as $data)
            <a href="/post/{{ $data->id }}">{{ $datas[0]->title }}</a> <br />
            作者：{{ $data->name }} <br />
            內容：{{ $data->content }} <br />
            時間:{{$data->created_at}} <br />
        @endforeach
 </div>

</body>
</html>