<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Edit Sub Kelas Obat | UPTD Puskesmas Babakan Tarogong')

@section('sub-class', 'active')

<!-- Import Layouting -->
@section('content')

    <main>
        <div class="container mt-5">
            <form action="/medicine-sub-class/detail/edit" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nama Sub-Kelas Terapi</label>
                        <input type="text" name="subTherapyClassName"
                            class="form-control @error('subTherapyClassName') is-invalid @enderror" required
                            value="{{ $subMedicineClass->subTherapyClassName }}" id="inputPassword4"
                            placeholder="Nama Sub-Kelas Terapi">
                        @error('subTherapyClassName')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Turunan Kelas Terapi</label>
                        <select class="form-control" name="therapyClassId">
                            @foreach ($medicineClasses as $medicineClass)
                                <option value="<?= $medicineClass->therapyClassId ?>">
                                    {{ $medicineClass->therapyClassName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="subTherapyClassId" value="{{ $subMedicineClass->subTherapyClassId }}">
                </div>
                <a href="{{ route('admin.medicine-sub-class') }}" class="btn btn-primary back-btn">Kembali</a>


                <button type="submit" name="submit" class="btn btn-primary submit-button ml-3">Edit</button>

            </form>
        </div>
    </main>

@endsection