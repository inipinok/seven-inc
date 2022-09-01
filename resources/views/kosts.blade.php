<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="#">{{ $kost->User->name }}</a></p>
    <h1 >{{ $kost->title }}</h1>
    {!! $kost->body !!}
    <a href="{{url('kost')}}">back</a>
</body>
</html>