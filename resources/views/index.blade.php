<!doctype html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Peperangan Besar Dunia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  
  <body>
    <h2 class="text-center mt-2">Data Peperangan Besar Dunia</h2>
    <div class="container mt-3">
      <a href="/tambah" class="btn btn-primary">Tambah Data</a>
      <table class="table">
        <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Perang</th>
      <th scope="col">Kronologi Perang</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($PerangDunia as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <th>{{ $item->nama_perang }}</th>
      <th>{{ $item->kronologi_perang }}</th>
      <th>
         <a href="{{ '/lihat/'.$item->id }}" class="btn btn-info">Lihat</a>
         <a href="{{ '/edit/'.$item->id }}" class="btn btn-warning">Edit</a>
         <a onclick="return confirm('Anda Yakin untuk Menghapus?')" href="{{ '/hapus/'.$item->id }}" class="btn btn-danger">Hapus</a>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
  </body>

</html>