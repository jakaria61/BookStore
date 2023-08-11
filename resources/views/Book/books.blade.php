<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class='container m-5'>
    <h4>Book Store</h4> <a class='btn btn-primary' href="/book-add">Add Book</a>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">S.L</th>
      <th scope="col">Title</th>
      <th scope="col">author</th>
      <th scope="col">publication</th>
      <th scope="col">isbn</th>
      <th scope="col">stock</th>
      <th scope="col">price</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

        @foreach($books as $book)
            <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->publication}}</td>
            <td>{{$book->isbn}}</td>
            <td>{{$book->stock}}</td>
            <td>${{$book->price}}</td>
            <td>
                <a class='btn btn-primary' href="/edit-book/{{$book->id}}">Edit</a>
                <a  class='btn btn-danger' href="/delete-book/{{$book->id}}">Delete</a>
            </td>
            </tr>
        @endforeach
  </tbody>
 
</table>
 {{$books->links()}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>