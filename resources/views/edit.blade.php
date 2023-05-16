<!doctype html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Peperangan Dunia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  
  <body>
    <h2 class="text-center mt-2">Edit Peperangan Dunia</h2>
    <div class="container">
    <form action="{{ '/edit/'.$PerangDunia->id }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_perang" class="form-label">Nama Peperangan Dunia</label>
                <input type="text" class="form-control @error('nama_perang') is-invalid @enderror" id="nama_perang" name="nama_perang" value="{{ $PerangDunia->nama_perang }}">
                @error('nama_perang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kronologi_perang" class="form-label">Kronologi Perang</label>
                <input type="text" class="form-control @error('kronologi_perang') is-invalid @enderror" id="kronologi_perang" name="kronologi_perang" value="{{ $PerangDunia->kronologi_perang }}">
                @error('kronologi_perang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>  
            <a href="/" class="btn btn-primary">Kembali</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> 
  </body>

</html>