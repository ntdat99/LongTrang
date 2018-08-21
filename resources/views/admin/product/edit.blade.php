<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/admin/product/{{$edit_product->id}}" method="post">
    @method('PUT')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label> name </label>
        <input type="text" class="form-control" name="name" value="{{$edit_product->name}}">
    </div>
    <div class="form-group">
        <label> Description</label>
        <input type="text" class="form-control" name="description" value="{{$edit_product->description}}">
    </div>
    <div class="form-group">
        <label> Image</label>
        <input type="url" class="form-control" name="image" value="{{$edit_product->image}}">
    </div>
    <div class="form-group">
        <label> price</label>
        <input type="text" class="form-control" name="price" value="{{$edit_product->price}}">
    </div>
    <button type="submit" class="btn btn_default">Submit</button>
</form>
</body>
</html>