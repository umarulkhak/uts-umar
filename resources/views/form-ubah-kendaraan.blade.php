<span class="d-block p-2 bg-dark text-white">
    <h3>Ubah Data Kendaraan</h3>
</span>
<div class="card border-light">
<style>
    h3 {
        font-family: arial, sans-serif;
        position: relative;
        text-align: center;
    }
    form {
        position: relative;
    }
</style>
<div class="card-body">
<div class="container">
<form action="/ubah-kendaraan" method="POST">
    <div class="form-group">
        <label for="nim">NO PLAT : </label>
        <input class="form-control" type="text" name="plat" id="plat" value="{{$data->plat}}">
    </div>
    <div class="form-group">
        <label for="nama">MERK : </label>
        <input class="form-control" type="text" name="merk" id="merk" value="{{$data->merk}}">
    </div>
    <div class="form-group">
        <label for="harga">TIPE : </label>
        <input class="form-control" type="text" name="tipe" id="tipe" value="{{$data->tipe}}">
    </div>
    <input type="hidden" value="{{$data->id}}" id="id" name="id">
    <input class="btn btn-success" type="submit" value="Simpan"><br>
</form>
</div>
</div>
</div>
<nav class="navbar fixed-bottom navbar-light bg-light">
    <a class="navbar-brand">Created by Umar Ulkhak || 2021</a>
  </nav>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

