@extends('layouts.admin')
@section('title', 'Data Siswa')


@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Siswa</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="/DataSiswa/create" class="btn btn-primary"> Tambah Siswa </a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive px-3">
                                    <table class="table table-striped" id="siswaTable">
                                        <thead>
                                            <th>#</th>
                                            <th>NISN</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>No Telepon</th>
                                            <th>Alamat</th>
                                            <th width="150px">Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($siswa as $i => $sis)
                                                <tr>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $sis->nisn }}</td>
                                                    <td>{{ $sis->nis }}</td>
                                                    <td>{{ $sis->nama }}</td>
                                                    <td>{{ $sis->kelas->nama_kelas }}</td>
                                                    <td>{{ $sis->no_telp }}</td>
                                                    <td>{{ $sis->alamat }}</td>
                                                    <td class="">
                                                        <a href=""
                                                            class="btn btn-warning btn-sm">Edit</a>
                                                        <form action="{{ url('DataSiswa', $sis->nisn) }}" class="d-inline"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-sm"
                                                                type="button">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#siswaTable').dataTable();
        });
    </script>
@endpush
