@extends('dashboard.Layout.main')

@section('main')
    <div class="container mt-4">
        <h1>Analitik Pengguna</h1>

        <div class="card">
            <div class="card-header">
                Statistik Pengguna
            </div>
            <div class="card-body">
                <h5 class="card-title">Jumlah Pengguna Terdaftar: {{ $jumlahUsers }}</h5>
                <h5 class="card-title">Jumlah Jawaban Form: {{ $jumlahJawaban }}</h5>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getUser as $getUsers)
                            <tr>
                                <td>{{ $getUsers->id }}</td>
                                <td>{{ $getUsers->name }}</td>
                                <td>{{ $getUsers->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
