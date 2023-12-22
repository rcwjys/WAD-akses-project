<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Sub Kelas Obat | UPTD Puskesmas Babakan Tarogong')

@section('class', 'active')

<!-- Import Layouting -->
@section('content')

    <main>
        <div class="container">
            <div class="container mt-3">
                @if (session()->has('deleteClassMessage'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('deleteClassMessage') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('EditClassMessage'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('EditClassMessage') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Add Medicine Button -->
                <a href="{{ route('admin.create-form') }}" class="btn btn-primary mt-5 medicine-add-btn">+ Tambah Data
                    Kelas </a>


                <div class="row grid row-gap-3 col-gap-3 mt-4">
                    @foreach ($MedicineClasses as $MedicineClass)
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $MedicineClass->therapyClassName ?>
                                    </h5>
                                    <a href="/medicine-class/detail/<?= $MedicineClass->therapyClassId ?>"
                                        class="card-link" style="color: #019F90;">Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
