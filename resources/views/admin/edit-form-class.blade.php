<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Edit  Kelas Obat | UPTD Puskesmas Babakan Tarogong')

@section('class', 'active')

<!-- Import Layouting -->
@section('content')

    <main>
        <div class="container mt-5">
        <form action="/medicine-class/detail/edit" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">ID Kelas Terapi</label>
                        <input type="text" name="therapyClassID"
                            class="form-control @error('therapyClassID') is-invalid @enderror" required
                            value="{{ $MedicineClass->therapyClassId }}" id="inputPassword4"
                            disabled>
                        @error('therapyClassID')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nama Kelas Terapi</label>
                        <input type="text" name="therapyClassName"
                            class="form-control @error('therapyClassName') is-invalid @enderror" required
                            value="{{ $MedicineClass->therapyClassName }}" id="inputPassword4"
                            placeholder="Nama Kelas Terapi">
                        @error('therapyClassName')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <input type="hidden" name="therapyClassId" value="{{ $MedicineClass->therapyClassId }}">
                </div>
                <a href="{{ route('admin.edit-form-class', ['TherapyClassId' => $MedicineClass->therapyClassId]) }}" class="btn btn-primary back-btn">Kembali</a>
                <button type="submit" name="submit" class="btn btn-primary submit-button ml-3">Edit</button>

            </form>
        </div>
    </main>

@endsection