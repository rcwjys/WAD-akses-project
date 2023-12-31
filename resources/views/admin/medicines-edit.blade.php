@extends('employee.template.header')

@section('content')
<div class="container mt-5">
    <div class="card mx-auto" style="width: 60vw;">
        <div class="card-header text-center">
            <h6>Edit Detail Obat</h6>
        </div>
        <form action="" method="POST">
            <div class="row mt-5 px-5">
                <div class="col">
                    <label for="exampleInputEmail1">Nama Obat</label>
                    <input type="text" name="medicineName" class="form-control" id="exampleInputEmail1" aria-label="First name" value="{{ $medicine['medicineName'] }}">
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Stok Obat</label>
                    <input type="number" name="medicineStock" class="form-control" id="exampleInputEmail1" aria-label="First name" value="{{ $medicine['medicineStock'] }}">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Keterangan Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medicineInformation" value="{{ $medicine['medicineInformation'] }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Expired</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="expiredDate" value="{{ $medicine['expiredDate'] }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Ketahanan Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medicinePeriod" value="{{ $medicine['medicinePeriod'] }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Resep Obat</label>
                    <select class="form-control" name="medicineRecipe">
                        <option disabled value="{{ $medicine['recipeId'] }}">{{ $medicine['recipe'] }}</option>
                        @foreach($medicineRecipes as $medicineRecipe)
                        <option value="{{ $medicineRecipe['recipeId'] }}">{{ $medicineRecipe['recipe'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Kelas Terapi</label>
                    <select class="form-control" name="classTherapy">
                        <option disabled value="{{ $medicine['therapyClassId'] }}">{{ $medicine['therapyClassName'] }}</option>
                        @foreach($therapyclasses as $therapyclass)
                        <option value="{{ $therapyclass['therapyClassId'] }}">{{ $therapyclass['therapyClassName'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Sub Kelas Terapi</label>
                    <select class="form-control" name="subClassTherapy">
                        <option value="{{ $medicine['subTherapyClassId'] }}" disabled="disabled">{{ $medicine['subTherapyClassName'] }}</option>
                        @foreach($subtherapyclasses as $subtherapyclass)
                        <option value="{{ $subtherapyclass['subTherapyClassId'] }}">{{ $subtherapyclass['subTherapyClassName'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Satuan</label>
                    <select class="form-control" name="medicineUnit">
                        <option value="{{ $medicine['medicineUnitId'] }}" disabled="disabled">{{ $medicine['medicineUnit'] }}</option>
                        @foreach($medicineUnits as $medicineUnit)
                        <option value="{{ $medicineUnit['medicineUnitId'] }}">{{ $medicineUnit['medicineUnit'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <a type="button" class="btn mt-5 ml-5 my-3 back-btn" href="{{ route('medicines-detail', ['medicineId' => $medicineId]) }}">Kembali</a>

            <button class="btn btn-warning mt-4 ml-3 submit-button edit-button" name="edit-btn">Edit</button>
        </form>
    </div>
</div>
@endsection

