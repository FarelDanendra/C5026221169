@extends('master3')
@section('judulhalaman','Data Harddisk')

@section('konten')
	<center> <h3>Harddisk</h3>
    </center>
	<a href="/harddisk/tambah" class="btn btn-primary"> + Tambah Harddisk</a>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode harddisk</th>
            <th>Merk harddisk</th>
			<th>Stock Harddisk</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($harddisk as $hd)
		<tr>
			<td>{{ $hd->kodeharddisk }}</td>
            <td>{{ $hd->merkharddisk }}</td>
			<td>{{ $hd->stockharddisk }}</td>
			<td>{{ $hd->tersedia }}</td>

            <td>
				<a href="/harddisk/edit/{{ $hd->kodeharddisk }}" class="btn btn-warning">Edit</a>
				|
				<a href="/harddisk/hapus/{{ $hd->kodeharddisk }}"class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
