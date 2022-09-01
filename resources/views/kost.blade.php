<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3 class="mb-5">lakda</h3>
    @foreach ($query as $kost)
    <article class="mb-5 border-bottom pd-5">
        <h2><a href="{{url('kosts/'.$kost->slug)}}">{{ $kost->title }}</a></h2>

        <p><a href="{{url('kosts/'.$kost->slug)}}" >Ibuk Yanti</a></p>
        <p>{!! $kost->excerpt !!}</p>

        <a href="{{url('kosts/'.$kost->slug)}}" >read more . . .</a>
    </article>
    @endforeach
</body>
</html>