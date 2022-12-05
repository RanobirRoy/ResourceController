<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add students</title>
</head>
<body>
    <a href="{{url('crud/create')}}"><button>Add Data</button></a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($crudModelData as $crudModelData)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$crudModelData->name}}</td>
                    <td><a href="{{url('crud/'.$crudModelData->id)}}">show</a></td>
                    <td><a href="{{url('crud/'.$crudModelData->id.'/edit')}}">edit</a></td>
                    <td><form action="{{url('crud/'.$crudModelData->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>