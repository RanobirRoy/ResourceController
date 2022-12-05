<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="{{url('crud/'.$crudModelData->id)}}" method="post">
        @csrf
        @method('PUT')
        {{-- <input type="hidden" name="id" id="" placeholder="id" value="{{$crudModelData->id}}"> --}}
        <input type="text" name="name" id="" placeholder="Name" value="{{$crudModelData->name}}">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>