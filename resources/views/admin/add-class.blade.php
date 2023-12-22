<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Tambah Data Sub Kelas Obat | UPTD Puskesmas Babakan Tarogong')

@section('class', 'active')

<!-- Import Layouting -->
@section('content')
    <main>
        <div class="container mt-5">
            <form action="{{ route('admin.submit-form-class') }}" method="POST">
                @csrf

                @if (session()->has('ClassMessageSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('ClassMessageSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">ID Kelas Terapi</label>
                        <input type="text" name="therapyClassID"
                            class="form-control @error('therapyClassID') is-invalid @enderror" required
                            value="{{ old('therapyClassID') }}" id="inputPassword4"
                            placeholder="Nama ID Terapi">
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
                                value="{{ old('therapyClassName') }}" id="inputPassword4"
                                placeholder="Nama Kelas Terapi">
                            @error('therapyClassName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <a href="{{ route('admin.medicine-class') }}" class="btn btn-primary back-btn">Kembali</a>

                <button type="submit" name="submit" class="btn btn-primary submit-button ml-3">Tambah</button>
            </form>
        </div>
    </main>


@endsection
