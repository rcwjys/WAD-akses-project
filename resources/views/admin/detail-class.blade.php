<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Halaman Detail Kelas | UPTD Puskesmas Babakan Tarogong')

<!-- Set class active -->
@section('class', 'active')

<!-- Import Layouting -->
@section('content')

    <main>
        <div class="container mt-5">
            
            <div class="card mx-auto" style="width: 60vw;">
                <div class="card-header text-center">
                    <h6>Detail Kelas</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 40vw;">Nama  Kelas </th>
                                <td>:</td>
                                <td><?= $MedicineClass->therapyClassName ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Dibuat Pada</th>
                                <td>:</td>
                                <td><?= date('l jS \of F Y', strtotime($MedicineClass->created_at)) . ' ' . '|' . ' ' . date('h:i:s A', strtotime($MedicineClass->created_at)) ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Diperbaharui Pada</th>
                                <td>:</td>
                                <td><?= date('l jS \of F Y', strtotime($MedicineClass->updated_at)) . ' ' . '|' . ' ' . date('h:i:s A', strtotime($MedicineClass->created_at)) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a type="button" class="btn mt-5 mx-3 my-3 back-btn"
                        href="{{ route('admin.medicine-class') }}">Kembali</a>

                    <a class="btn btn-warning mt-4 submit-button edit-button"
                        href="/medicine-class/detail/edit/<?= $MedicineClass->therapyClassId ?>"
                        name="edit-btn">Edit Data
                        Obat</a>

                    <a type="button" class="btn btn-danger mt-4 delete-button ml-3"
                        href="/medicine-class/delete/<?= $MedicineClass->therapyClassId ?>">Hapus Data 
                        Kelas</a>

                </div>
            </div>
        </div>
    </main>


@endsection
