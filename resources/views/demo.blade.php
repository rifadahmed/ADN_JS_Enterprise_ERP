<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    test
<form action="{{route('storemenu.store')}}" method="POST">
    @csrf
    <button type="submit" class="btn indigo">Save</button> &nbsp;

</form>
</body>
</html>