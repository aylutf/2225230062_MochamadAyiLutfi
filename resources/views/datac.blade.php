<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data 1c</title>
  </head>
  <body>
    <style>
      body{
        background: url('bg.jpg');
        background-size: cover;
        height: auto;
        width: 100%;
        filter: 100%;
        background-repeat: no-repeat;
        color: white;
        font-family: Georgia, serif;
      }
      h1,h2,p{
        font-weight: bold;
      }
      marquee{
        color: yellow;
      }
      table{
	      margin: auto;
        padding-bottom: 50px;
        color: #000000;
        background: #F5FFFA;
        height: 1px;
        border-radius: 30px;
        width: 40%;
        padding: 1%;
        font-size: 18px;
      }
      table td{
      padding: 8px 0;
    }
    </style>
    <marquee>Web ini dibuat untuk memenuhi tugas Ujian Akhir Semester Matakuliah Algoritma dan Pemograman</marquee>
    <h1 class="text-center" mb-4>Data Mahasiswa Kelas 1C</h1>
    <h2 class="text-center" mb-4>Pendidikan Matematika Tahun 2023</h2>
    <p class="text-center" mb-4>Universitas Sultan Ageng Tirtayasa</p>
    <div class="container">
    <a href="/tambahdata" class="btn btn-success">Tambah +</a>
    <div class="row">
      @if ($message = Session::get('success'))
      <div class="alert alert-primary" role="alert">
     {{ $message }}
    </div>
    @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tempat, Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Diciptakan</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
@php
$no = 1;
@endphp
    @foreach ($data as $row)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->nim }}</td>
      <td>{{ $row->jk }}</td>
      <td>{{ $row->ttl }}</td>
      <td>{{ $row->alamat }}</td>
      <td>{{ $row->created_at->diffForHumans() }}</td>
      <td>
      <a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning">Edit</a>
      <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>