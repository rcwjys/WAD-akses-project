<!-- Import Template -->
@extends('template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Persediaan Obat | UPTD Puskesmas Babakan Tarogong')

<!-- Set class active -->
@section('medicine', 'active')

<!-- Import Layouting -->
@section('content')

    <main>
        <div class="container mt-5">
            @if($medicines)
                @php(session(['isCanViewDetail' => true]))
                <div class="row">
                    @foreach($medicines as $medicine)
                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ htmlspecialchars($medicine->medicineName) }}
                                    </h5>
                                    <a href="/persediaan-obat/detail-obat/?medicineId={{$medicine->medicineId}}" class="card-link" style="color: #019F90;">Details</a>
                                </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                @php(session(['isCanViewDetail' => false]))
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-center">Maaf, data tidak tersedia</h3>
                    </div>
                </div>
            @endif
        </div>
    </main>



@endsection