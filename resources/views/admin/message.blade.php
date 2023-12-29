<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Pesan | UPTD Puskesmas Babakan Tarogong')

@section('messages', 'active')

<!-- Import Layouting -->
@section('content')
@if($messages->count()>=1)
<div class="container mt-5">
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
        @else
        <div class="card mx-auto" style="width: 60vw;">
            <div class="card-header text-center">
                <h6>Pesan</h6>
            </div>
            <h3 class="text-center py-5 px-5">No data in database</h3>
        </div>
        @endif
</div>
@endsection