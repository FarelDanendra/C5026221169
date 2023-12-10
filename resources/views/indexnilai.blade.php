@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Nilai Kuliah</h3>

	<a href="/harddisk/tambah" class="btn btn-primary"> + Tambah Nilai Mahasiswa</a>


	<table class="table table-striped table-hover">
		<tr>
			<th>NRP</th>
			<th>NilaiAngka</th>
			<th>SKS</th>
			<th>NilaiHuruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $nk)
		<tr>
			<td>{{ $nk->NRP }}</td>
			<td>{{ $nk->NilaiAngka }}</td>
			<td>{{ $nk->SKS }}</td>
            <td>
                    @if ($nk->NilaiAngka >= 81)
                       A
                    @elseif ($nk->NilaiAngka >= 61 && $nk->NilaiAngka <= 80)
                        B
                    @elseif ($nk->NilaiAngka >= 41 && $nk->NilaiAngka <= 60)
                        C
                    @elseif ($nk->NilaiAngka <= 40)
                        D
                    @else
                        Invalid grade
                    @endif
            </td>
            <td> {{$nk->NilaiAngka * $nk->SKS}}</td>
		</tr>

		</tr>
		@endforeach
	</table>

@endsection
