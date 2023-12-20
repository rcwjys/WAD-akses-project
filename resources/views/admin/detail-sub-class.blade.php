<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Halaman Detail Sub Kelas | UPTD Puskesmas Babakan Tarogong')

<!-- Set class active -->
@section('sub-class', 'active')

<!-- Import Layouting -->
@section('content')

    <main>
        <div class="container mt-5">
            
            <div class="card mx-auto" style="width: 60vw;">
                <div class="card-header text-center">
                    <h6>Detail Sub Kelas</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 40vw;">Nama Sub Kelas </th>
                                <td>:</td>
                                <td><?= $subMedicineClass->subTherapyClassName ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Turunan Dari Kelas</th>
                                <td>:</td>
                                <td><?= $classData->therapyClassName ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Dibuat Pada</th>
                                <td>:</td>
                                <td><?= date('l jS \of F Y', strtotime($subMedicineClass->created_at)) . ' ' . '|' . ' ' . date('h:i:s A', strtotime($subMedicineClass->created_at)) ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Diperbaharui Pada</th>
                                <td>:</td>
                                <td><?= date('l jS \of F Y', strtotime($subMedicineClass->updated_at)) . ' ' . '|' . ' ' . date('h:i:s A', strtotime($subMedicineClass->created_at)) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a type="button" class="btn mt-5 mx-3 my-3 back-btn"
                        href="{{ route('admin.medicine-sub-class') }}">Kembali</a>

                    <a class="btn btn-warning mt-4 submit-button edit-button"
                        href="/medicine-sub-class/detail/edit/<?= $subMedicineClass->subTherapyClassId ?>"
                        name="edit-btn">Edit Data
                        Obat</a>

                    <a type="button" class="btn btn-danger mt-4 delete-button ml-3"
                        href="/medicine-sub-class/delete/<?= $subMedicineClass->subTherapyClassId ?>">Hapus Data Sub
                        Kelas</a>

                </div>
            </div>
        </div>
    </main>


@endsection
