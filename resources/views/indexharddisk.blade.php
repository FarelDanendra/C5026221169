@extends('master3')
@section('judulhalaman','Data Pegawai')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>harddisk</h3>

	<a href="/harddisk/tambah" class="btn btn-primary"> + Tambah Harddisk</a>


	<table class="table table-striped table-hover">
		<tr>
			<th>merkharddisk</th>
			<th>stockharddisk</th>
			<th>tersedia</th>
		</tr>
		@foreach($harddisk as $hd)
		<tr>
			<td>{{ $hd->merkharddisk }}</td>
			<td>{{ $hd->stockharddisk }}</td>
			<td>{{ $hd->tersedia }}</td>
		</tr>
		@endforeach
	</table>

@endsection
