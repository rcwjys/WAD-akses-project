<!-- Import Template -->
@extends('template.no-header')

<!-- Set Title Halaman -->
@section('title', 'Halaman Registrasi | UPTD Puskesmas Babakan Tarogong')

<!-- Import Layouting -->
@section('content')

    <style>
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            /* Optional background color */
        }

        .login-container {
            max-width: 800px;
        }

        .login-btn {
            background-color: #019F90;
            color: #fff;
        }

        .login-btn {
            background-color: #019F90;
            color: #fff;
            transition: transform 0.3s;
        }

        .login-btn:hover {
            transform: scale(1.02);
            color: #fff;
            /* Resetting text color on hover */
            background-color: #019F90;
            /* Resetting background color on hover */
            box-shadow: none;
            /* Resetting box-shadow on hover */
        }

        .footer_section {
            background-color: #f8f9fa;
        }

        a.back-link {
            color: #019F90;
        }
    </style>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-container">
                        <h2 class="text-center mb-5">Register Pegawai</h2>
                        <form action="/register" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="username">Nama Pegawai</label>
                                <input type="text" name="employeeName"
                                    class="form-control @error('employeeName') is-invalid @enderror" required
                                    value="{{ old('employeeName') }}">
                                @error('employeeName')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="username">Email Pegawai</label>
                                <input type="text" name="employeeEmail"
                                    class="form-control @error('employeeEmail') is-invalid @enderror" required
                                    value="{{ old('employeeEmail') }}">
                                @error('employeeEmail')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="password">
                                    No Telepon Pegawai (+62)
                                </label>
                                <input type="text" name="employeePhone"
                                    class="form-control @error('employeePhone') is-invalid @enderror" required
                                    value="{{ old('employeePhone') }}">
                                @error('employeePhone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat Pegawai </label>
                                <textarea class="form-control @error('employeeAddress') is-invalid @enderror " name="employeeAddress"
                                    value="{{ old('employeeAddress') }}" id="exampleFormControlTextarea1" rows="2" required></textarea>
                                @error('employeeAddress')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="employeePassword"
                                    class="form-control @error('employeePassword') is-invalid @enderror"
                                    id="employeePassword" required>
                                @error('employeePassword')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Konfirmasi Password</label>
                                <input type="password" name="passwordConfirmation"
                                    class="form-control @error('passwordConfirmation') is-invalid @enderror" id="password"
                                    required>
                                @error('passwordConfirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group text-right">
                                <a href="" class="back-link">Kembali</a>
                            </div>
                            <button type="submit" name="register" class="btn btn-block login-btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    @endsection
