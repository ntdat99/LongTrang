<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="card">
    <div class="card-body">
        <h1>List Product</h1>
        <div style="float: right; margin-right: 50px">
            <a href="/admin/product/create" style="margin-left: 10px"><i class="far fa-plus-square"></i>Create</a>
        </div>
        <table class="table table-striped">
            <thead>
            <tr class="row">
                <td class="col-md-1">Id</td>
                <td class="col-md-1">Name</td>
                <td class="col-md-3">Description</td>
                <td class="col-md-3">Image</td>
                <td class="col-md-2">Price</td>
                <td class="col-md-2">Action</td>
            </tr>
            </thead>

            @foreach($list_obj as $item)
                <tbody>
                <tr class="col-md-1">{{$item->id}}</tr>
                <tr class="col-md-1">{{$item->name}}</tr>
                <tr class="col-md-3">{{$item->description}}</tr>
                <tr class="col-md-3"><img src="{{$item->image}}" style="width: 150px"></tr>
                <tr class="col-md-2">{{$item->price}}</tr>
                <tr class="col-md-2">
                    <a href="/admin/product/{{$item -> id}}/edit">Edit</a>
                    <a href="#/admin/product/{{$item->id}}" id="{{$item->id}}" class="delete-obj">Delete</a>
                </tr>
                </tbody>

            @endforeach
        </table>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('.delete-obj').click(function () {
        var id = this.id;
        var user_confirm = confirm('Are you sure you want to delete this product? ');
        if (user_confirm) {
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/product/' + id,
                method: 'DELETE',
                data: {
                    '_token': "{{ csrf_token() }}"
                },
                success: function () {
                    alert('Deleted');
                    alert('Success!');
                    window.location.reload();
                },
                error: function () {
                    alert('Error.');
                }
            });
        } else {
            alert('!Okie');
        }
    });
</script>
</body>
</html>