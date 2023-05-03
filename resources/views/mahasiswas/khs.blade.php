@extends('mahasiswas.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div style="text-align: center">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
                <h3 style="margin-top: 20px; ">Kartu Hasil Studi (KHS)</h3>
            </div>

            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b>{{ $Mahasiswa->Nama }}</li>
                    <li class="list-group-item"><b>Nim: </b>{{ $Mahasiswa->Nim }}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{ $Mahasiswa->kelas->nama_kelas }}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{ $Mahasiswa->Jurusan }}</li>
                </ul><br>
                <div>
                    <table class="table table-hover">
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Nilai</th>
                        </tr>
                        @foreach ($nilai as $n)
                            <tr>
                                <td>{{ $n->matakuliah->nama_matkul }}</td>
                                <td>{{ $n->matakuliah->sks }}</td>
                                <td>{{ $n->matakuliah->semester }}</td>
                                <td>{{ $n->nilai }}</td>
                        @endforeach
                        </tr>
                    </table>
                </div><a class="btn btn-success mt-3" href="{{ route('mahasiswas.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection