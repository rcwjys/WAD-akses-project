<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Pesan | UPTD Puskesmas Babakan Tarogong')

@section('messages', 'active')

<!-- Import Layouting -->
@section('content')
<main>
<div class="container mt-5">
        @if($messages->count() >= 1)
            <div class="card mx-auto" style="width: 60vw;">
                <div class="card-header text-center">
                    <h6>Pesan</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Waktu Kirim</th>
                            </tr>
                            @foreach ($messages as $message)
                                <tr>
                                    <td>
                                        <a href="{{ route('message-detail', ['messageId' => $message->messageId]) }}"
                                           class="text-black">{{ $message->customerName }}</a>
                                    </td>
                                    <td>
                                        {{ $message->created_at }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="card mx-auto" style="width: 60vw;">
                <div class="card-header text-center">
                    <h6>Pesan</h6>
                </div>
                <h3 class="text-center py-5 px-5">No data in database</h3>
            </div>
        @endif
    </div>
</main>
@endsection

@section('scripts')
    <!-- Include your script links here using asset() function -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- Add other script links -->
@endsection