<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <form class="container" method="POST">
        @csrf
        </br>
        <div class="form-group">
            <label>Product Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description">
        </div>
        <div class="form-group">
            <label>List Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Price">
        </div>
        <div class="form-group">
            <label>Percent</label>
            <input type="number" class="form-control" id="percent" name="percent" placeholder="Percent">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>