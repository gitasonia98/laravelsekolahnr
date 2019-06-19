<h1>HALLO GITA </h1>


<!--HEADER-->
<table>
	<tr>
		<th>NAMA DEPAN</th>
		<th>NAMA BELAKANG</th>
		<th>JENIS KELAMIN</th>
		<th>AGAMA</th>
		<th>ALAMAT</th>
	</tr>
<!--AKHIR HEADER , header yg diatas kesampping, kalau td yang kebawah-->
@foreach($data_siswa as $siswa)
	<tr>
		<td>{{$siswa->nama_depan}}</td>
		<td>{{$siswa->nama_belakang}}</td>
		<td>{{$siswa->jenis_kelamin}}</td>
		<td>{{$siswa->agama}}</td>
		<td>{{$siswa->alamat}}</td>
	</tr>
@endforeach
</table>