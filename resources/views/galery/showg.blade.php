<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>VIEW</title>
</head>
<body style="background-color: antiquewhite">
  <br><br>
  <div class="container">
    <div class="btn btn-danger"><a href="/galery" style="text-decoration: none;color:black">Close</a></div><br><br>
  <div class="card mb-5" style="max-width:1000px;">
    <div class="row g-0">
      <div class="col-md-8">
        <img src="{{  url('asset/galeri/'.$galeri->gambar) }}" class="img-fluid rounded-start" alt="..." width="1000px">
      </div>
      <div class="col-md-4">
        <div class="card-body">
          <h5 class="card-title">Caption:{{ $galeri->deskripsi }}</h5>
          <p class="card-text">Artikel:<br>{{ $galeri->artikel }}</p>
        </div>
      </div>
    </div>
  </div></div>
</body>
</html>

