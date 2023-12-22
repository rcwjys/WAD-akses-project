<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Tambah Data Karyawan | UPTD Puskesmas Babakan Tarogong')

@section('employees', 'active')

<!-- Import Layouting -->
@section('content')
    <main>
        <div class="container mt-5">
            <form action="{{ route('add-employees') }}" method="POST">
                @csrf

                @if (session()->has('EmployeeMessageSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('EmployeeMessageSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nama Karyawan</label>
                        <input type="text" name="EmployeesClassName"
                            class="form-control @error('EmployeesClassName') is-invalid @enderror" required
                            value="{{ old('EmployeesClassName') }}" id="inputPassword4"
                            placeholder="Nama Karyawan">
                        @error('EmployeeClassName')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Email Karyawan</label>
                        <select class="form-control" name="employeeId">
                            <option value="" selected disabled hidden></option>
                            @foreach ($employeeClasses as $employeeClasses)
                                <option value="<?= $employeeClass->employeeEmail ?>">
                                    <?= $employeeClass->employeeName ?> </option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <a href="{{ route('add-employees') }}" class="btn btn-primary back-btn">Kembali</a>

                <button type="submit" name="submit" class="btn btn-primary submit-button ml-3">Tambah</button>
            </form>
        </div>
    </main>


@endsection
