<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Test PT.Eannovate</title>
  </head>
  <body>
    <h3 class="text-center pt-5 m-3">Class</h3>
    <div class="container">
        <a href="createdata" class="btn btn-success mb-4">Create</a>
        <div class="row" id="data">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Age</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Email</th>
                  <th scope="col">Class Name</th>
                  <th scope="col">Major</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td>Agis </td>
                  <td>083183530014</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>4</td>
                  <td>
                      <a href="" class="btn btn-primary">Edit</a>
                      <a href="" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>

      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script>
      $(document).ready(function(){
        index();
      });

      function store(){
        var name = $("#data").val();
        $.ajax({
          type: "get",
          url: "{{ url('api/kelas') }}",
          data: 
          "name=" + name,
          "umur=" + umur,
          "no=" + no,
          "email=" + email,
          "nama_kelas="+ nama_kelas,
          "jurusan=" + jurusan

        })
      }
    </script>
  </body>
</html>