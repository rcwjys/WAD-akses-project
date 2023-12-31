<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Tambah Data Karyawan | UPTD Puskesmas Babakan Tarogong')

@section('kelola pegawai', 'active')

<!-- Import Layouting -->
@section('content')
    <main>
        <div class="container mt-5">
            <form action="" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputemployeeName">Name</label>
                        <input type="text" name="employeeName"
                            class="form-control" required
                            id="inputemployeeName"
                            placeholder="Nama Karyawan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="employeeEmail"
                            class="form-control" required
                            id="inputemployeeEmail"
                            placeholder="Email Karyawan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputAlamat1">Address</label>
                        <input type="text" name="employeeAddress"
                            class="form-control" required
                            id="inputemployeeAddress"
                            placeholder="Alamat Karyawan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputPhone">Phone</label>
                        <input type="number" name="employeePhone"
                            class="form-control" required
                            id="inputemployeePhone"
                            placeholder="Nomor Karyawan">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" name="employeePassword"
                            class="form-control" required
                            id="inputemployeePassword"
                            placeholder="Password Karyawan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputConfirmPassword4">Confirm Password</label>
                        <input type="password" name="employeeConfirmPassword"
                            class="form-control" required
                            id="inputemployeeConfirmPassword"
                            placeholder="Confirm Password">
                    </div>

                    @if ($errors->has('employeeEmail'))
                        <p class="text-danger">{{ $errors->first('employeeEmail') }}</p>
                    @endif
                    @if ($errors->has('employeePhone'))
                        <p class="text-danger">{{ $errors->first('employeePhone') }}</p>
                    @endif
                    @if ($errors->has('employeePassword'))
                        <p class="text-danger">{{ $errors->first('employeePassword') }}</p>
                    @endif
                    @if ($errors->has('employeeConfirmPassword'))
                        <p class="text-danger">{{ $errors->first('employeeConfirmPassword') }}</p>
                    @endif

                </div>
                <a href="{{ route('admin.employee') }}" class="btn btn-primary back-btn">Kembali</a>
                <button type="submit" name="submit" class="btn btn-primary submit-button ml-3">Tambah</button>
            </form>
        </div>
    </main>


@endsection
