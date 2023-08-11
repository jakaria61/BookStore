<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class='container m-5'>
    <h1>update your  book</h1>
    <form method='post' action="/book-update/{{$book->id}}">
        @csrf
        @method('put')
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter book title</label>
            <input type="text" value='{{$book->title}}' name='title' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter Author name</label>
            <input type="text" value='{{$book->author}}' name='author' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter publication name</label>
            <input type="text" value='{{$book->publication}}' name='publication' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter isbn number</label>
            <input type="text" value='{{$book->isbn}} 'name='isbn' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter stock number</label>
            <input type="number" value='{{$book->stock}}' name='stock' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Enter price </label>
            <input type="number" value='{{$book->price}}' name='price' class="form-control" id="exampleFormControlInput1" required/>
        </div>
        <button class='btn btn-success 'type='submit'>Update Now</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>