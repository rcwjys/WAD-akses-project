<!-- Import Template -->


@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Stok Obat | UPTD Puskesmas Babakan Tarogong')

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
                        <tr>
                            <th scope="row">Stok Obat Tersisa</th>
                            <td>:</td>
                            <td>{{ $medicine->medicineStock }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Informasi</th>
                            <td>:</td>
                            <td>{{ $medicine->medicineInformation }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Waktu Exipired</th>
                            <td>:</td>
                            <td>{{ $medicine->expiredDate }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Periode Obat</th>
                            <td>:</td>
                            <td>{{ $medicine->medicinePeriod }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Resep Obat</th>
                            <td>:</td>
                            <td>{{ $medicinerecipe->recipe}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Kelas Terapi</th>
                            <td>:</td>
                            <td>{{ $therapyclass->therapyClassName }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Sub Kelas Terapi</th>
                            <td>:</td>
                            <td>{{ $subtherapyclass->subTherapyClassName }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Satuan Obat</th>
                            <td>:</td>
                            <td>{{ $medicineunits->recipe }}</td>
                        </tr>
                    </tbody>
                </table>
                <form action="" method="POST">
                    <a type="button" class="btn mt-5 mx-3 my-3 back-btn" href="{{ route('admin.medicine-stock')}}">Kembali</a>

                    <a class="btn btn-warning mt-4 submit-button edit-button" href="{{ route('admin.medicines-edit', ['medicineId' => $medicine->medicineId]) }}" name="edit-btn">Edit Data Obat</a>

                    <button class="btn btn-danger mt-4 delete-button ml-3" href="/medicine-stock/detail/delete <? $medicine->medicineId ?>" onclick="confirm('Apakah anda yakin ingin menghapus data ini?')" name="deleteStock">Hapus Data Obat</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

