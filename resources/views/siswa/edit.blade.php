<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<!--link ini diambil dari css di getboostratp.com , ini untk css-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>



<div class="container"> 
	<h1>Edit Data Siswa</h1> 
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
	{{session('sukses')}}
	</div>
	@endif
<div class="row">
	<div class="col-lg-12">
	<form action="/siswa/{{$siswa->id}}/update" method="POST">
      {{csrf_field()}}

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nama Depan</label>
	    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value = "{{$siswa->nama_depan}}">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nama Belakang</label>
	    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$siswa->nama_belakang}}">
	  </div>

	<div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
    <option value="L" @if($siswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
    <option value="P" @if($siswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select>
    </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Agama</label>
	    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$siswa->agama}}">
	  </div>

	<div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$siswa->alamat}}</textarea> 
    </div>
    <button type="submit" class="btn btn-warning">Update</button>
</form>
</div> <!--penutup col -->
	</div>
	      
</div>

 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloud flare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>

