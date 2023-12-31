<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Kelola Pegawai | UPTD Puskesmas Babakan Tarogong')

@section('kelola pegawai', 'active')
<!-- Import Layouting -->
@section('content')

<main>
    <div class="container mt-5">
        <a href="{{ route('admin.add-employee') }}"
            class="btn btn-primary mb-3 medicine-add-btn ">+ Tambah Data Pegawai
        </a>
            <div class="card">
                <div class="card-header text-center">
                    <h6>Data Pegawai</h6>
                </div>  
                <div class="table-responsive table-hover table-bordered table-white align-middle">
                    <table class="table">

                @if (session()->has('MessageAddEmployee'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('MessageAddEmployee') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('MessageDeleteEmployee'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('MessageDeleteEmployee') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('MessageEditEmployee'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('MessageEditEmployee') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                        <thead>
                            <tr>
                                <th scope="row">No</th>
                                <th scope="row" style="width: 40vw;">Nama </th>
                                <th scope="row" style="width: 40vw;">Email</th>
                                <th scope="row" style="width: 40vw;">Phone</th>
                                <th scope="row" style="width: 40vw;">Address</th>
                                <th scope="row" style="width: 40vw;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employeeData as $employee)
                                <tr>
                                    <td scope="row">{{ $loop -> iteration }}</td>
                                    <td scope="row">{{ $employee -> employeeName }}</td>
                                    <td scope="row">{{ $employee -> employeeEmail }}</td>
                                    <td scope="row">{{ $employee -> employeePhone }}</td>
                                    <td scope="row">{{ $employee -> employeeAddress }}</td>
                                    <td scope="row">
                                        <a class="btn medicine-add-btn"
                                            href="{{url('/employee/edit-employee/'.$employee -> employeeId)}}"
                                            name="edit-btn">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
 </main>
@endsection

