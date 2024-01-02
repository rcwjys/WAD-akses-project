<!-- Import Template -->
@php
    $recipes = \App\Models\MedicineRecipes::all();
    $therapyclasses = \App\Models\therapyClasses::all();
    $subClassTherapyClass = \App\Models\subTherapyClasses::all();
    $units = \App\Models\medicineUnits::all();
@endphp

@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Stok Obat | UPTD Puskesmas Babakan Tarogong')

@section('medicine', 'active')

<!-- Import Layouting -->
@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Tambah Data Persediaan Obat
            </div>
            <form action="" method="POST" class="px-5 py-5">
                @csrf
                <div class="form-group">
                    <label for="medicineName">Nama Obat</label>
                    <input type="text" class="form-control" id="medicineName" name="medicineName" required>
                </div>

                <div class="form-group">
                    <label for="medicineStock">Stok Obat</label>
                    <input type="number" class="form-control" id="medicineStock" name="medicineStock" required>
                </div>

                <div class="form-group">
                    <label for="medicineInformation">Keterangan Obat</label>
                    <input type="text" class="form-control" id="medicineInformation" name="medicineInformation" required>
                </div>

                <div class="form-group">
                    <label for="expiredDate">Tanggal Expired</label>
                    <input type="date" class="form-control" id="expiredDate" name="expiredDate" required>
                </div>

                <div class="form-group">
                    <label for="medicinePeriod">Ketahanan Obat</label>
                    <input type="text" class="form-control" id="medicinePeriod" name="medicinePeriod" required>
                </div>


                <div class="form-group">
                    <label for="recipeId">Resep Obat</label>
                    <select class="form-control" name="recipeId" required>
                        <option value="" selected>Resep Obat</option>
                        @foreach ($recipes as $recipe)
                            <option value="{{ $recipe->recipeId }}">{{ $recipe->recipe }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="therapyClassId">Kelas Terapi</label>
                    <select class="form-control" id="classTherapy" name="therapyClassId" required>
                        <option value="" selected disabled>Kelas Terapi</option>
                        @foreach ($therapyclasses as $therapy)
                            <option value="{{ $therapy['therapyClassId'] }}">{{ $therapy['therapyClassName'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="subTherapyClassId">Sub Kelas Terapi</label>
                    <select class="form-control" id="subTherapyClassId" name="subTherapyClassId" required>
                        <option value="" selected disabled>Sub Kelas Terapi</option>
                        @foreach ($subClassTherapyClass as $subTherapy)
                            <option value="{{ $subTherapy['subTherapyClassId'] }}">{{ $subTherapy['subTherapyClassName'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="medicineUnitId">Satuan</label>
                    <select class="form-control" id="medicineUnitId" name="medicineUnitId" required>
                        <option value="" selected disabled>Satuan Obat</option>
                        @foreach ($units as $unit)
                            <option value="{{ $unit['medicineUnitId'] }}">{{ $unit['recipe'] }}</option>
                        @endforeach
                    </select>
                </div>

                <a href="{{ route('admin.medicine-stock') }}" class="btn btn-primary mt-5 mr-3 back-btn">Kembali</a>

                <button type="submit" class="btn btn btn-primary submit-button mt-5" name="addMedicine">Tambah Data</button>
            </form>
        </div>
    </div>

@endsection

</div>
