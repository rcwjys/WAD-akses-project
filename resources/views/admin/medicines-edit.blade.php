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
    <div class="card mx-auto" style="width: 60vw;">
        <div class="card-header text-center">
            <h6>Edit Detail Obat</h6>
        </div>
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="row mt-5 px-5">
                <div class="col">
                    <label for="exampleInputEmail1">Nama Obat</label>
                    <input type="text" name="medicineName" class="form-control" id="medicineName" aria-label="First name" value="{{ $stock->medicineName }}">
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Stok Obat</label>
                    <input type="number" name="medicineStock" class="form-control" id="medicineStock" aria-label="First name" value="{{ $stock->medicineStock }}">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Keterangan Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medicineInformation" value="{{ $stock->medicineInformation }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Expired</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="expiredDate" value="{{ $stock->expiredDate }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Ketahanan Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medicinePeriod" value="{{ $stock->medicinePeriod }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Resep Obat</label>
                    <select class="form-control" name="medicineRecipe">
                        <option disabled value="{{ $medicinerecipe->recipe }}">{{ $medicinerecipe->recipe }}</option>
                        @foreach($medicineRecipes as $medicineRecipe)
                        <option value="{{ $medicineRecipe->recipe }}">{{ $medicineRecipe->recipe }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Kelas Terapi</label>
                    <select class="form-control" name="classTherapy">
                        <option disabled value="{{ $therapyclass->therapyClassName }}">{{ $therapyclass->therapyClassName }}</option>
                        @foreach($therapyclasses as $therapyclasschild)
                        <option value="{{ $therapyclasschild->therapyClassName }}">{{ $therapyclasschild->therapyClassName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Sub Kelas Terapi</label>
                    <select class="form-control" name="subClassTherapy">
                        <option value="{{ $subtherapyclass->subTherapyClassName }}" disabled="disabled">{{ $subtherapyclass->subTherapyClassName }}</option>
                        @foreach($subtherapyclasses as $subtherapyclasschild)
                        <option value="{{ $subtherapyclasschild->subTherapyClassName }}">{{ $subtherapyclasschild->subTherapyClassName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Satuan</label>
                    <select class="form-control" name="medicineUnit">
                        <option value="{{ $medicineunits->recipe }}" disabled="disabled">{{ $medicineunits->recipe }}</option>
                        @foreach($medicineUnits as $medicineUnitChild)
                        <option value="{{ $medicineUnitChild->recipe }}">{{ $medicineUnitChild->recipe }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </div>

            <a type="button" class="btn mt-5 ml-5 my-3 back-btn" href="{{ route('admin.medicine-stock')}}">Kembali</a>

            <button class="btn btn-warning mt-4 ml-3 submit-button edit-button" href="{{ route('admin.medicine-stock')}}" name="submitEditStock">Edit</button>
        </form>
    </div>
</div>
@endsection

