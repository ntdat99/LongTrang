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
<h1>Thêm Sp</h1>
<form action="/admin/product" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label> name </label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label> Description</label>
        <input type="text" class="form-control" name="description">
    </div>
    <div class="form-group">
        <label> Image</label>
        <input type="url" class="form-control" name="image">
    </div>
    <div class="form-group">
        <label> price</label>
        <input type="text" class="form-control" name="price">
    </div>
    <button type="submit" class="btn btn_default">Submit</button>
</form>
</body>
</html>