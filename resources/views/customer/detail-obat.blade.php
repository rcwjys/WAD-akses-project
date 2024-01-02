<!-- Import Template -->
@extends('template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Persediaan Obat | UPTD Puskesmas Babakan Tarogong')

<!-- Set class active -->
@section('medicine', 'active')

<!-- Import Layouting -->
@section('content')

    <main>
        <div class="container mt-5">
            <div class="card mx-auto" style="width: 60vw;">
                <div class="card-header text-center">
                    <h6>Detail Obat</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 40vw;">Nama Obat </th>
                                <td>:</td>
                                <td>{{ $medicine->medicineName }}</td>
                            </tr>
                            <tr></tr>
                                <th scope="row">Stok Obat Tersisa</th>
                                <td>:</td>
                                <td>{{ $medicine->medicineStock }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Informasi Obat</th>
                                <td>:</td>
                                <td>{{ $medicine->medicineInformation }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a type="button" class="btn mt-5 mx-3 my-3 back-btn" href="/persediaan-obat">Kembali</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Your JavaScript and footer section go here -->


@endsection
