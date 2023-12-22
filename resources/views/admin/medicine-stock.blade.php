<!-- resources/views/medicines/index.blade.php -->

@extends('layouts.app')

@section('title', 'Persediaan Obat | UPTD Puskesmas Babakan Tarogong')

@section('content')
    @if (session('isAdmin'))
        @include('employee.template.header-admin')
    @else
        @include('employee.template.header')
    @endif

    <main>
        <div class="container mt-5">
            <!-- Add Medicine Button -->
            <a href="{{ route('medicines.create') }}" class="btn btn-primary mt-5 medicine-add-btn">+ Tambah data persediaan obat</a>

            @if ($medicines)
                @php $isCanViewDetail = true; @endphp
                <div class="row mt-5">
                    @foreach ($medicines as $medicine)
                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ htmlspecialchars($medicine['medicineName']) }}
                                    </h5>
                                    <a href="{{ route('medicines.show', $medicine['medicineId']) }}" class="card-link" style="color: #019F90;">Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                @php $isCanViewDetail = false; @endphp
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-center">Maaf, data tidak tersedia</h3>
                    </div>
                </div>
            @endif
        </div>
    </main>

    <!-- jQery -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- footer section -->
    @include('employee.template.footer')
    <!-- footer section -->
@endsection