<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Edit  Kelas Obat | UPTD Puskesmas Babakan Tarogong')

@section('medicine', 'active')

<!-- Import Layouting -->
@section('content')

    <main>
        <div class="container mt-5">
            <!-- Add Medicine Button -->
            <a href="{{ route('admin.medicines-create') }}" class="btn btn-primary mt-5 medicine-add-btn">+ Tambah data persediaan obat</a>

            @if ($medicines)
                @php $isCanViewDetail = true; @endphp
                <div class="row mt-5">
                    @foreach ($medicines as $medicine)
                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ htmlspecialchars($medicine->medicineName) }}
                                    </h5>
                                    <a href="{{ route('admin.medicines-detail', ['medicineId' => $medicine->medicineId]) }}" class="card-link" style="color: #019F90;">Details</a>
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

@endsection