<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Detail Pesan | UPTD Puskesmas Babakan Tarogong')

@section('messages', 'active')

<!-- Import Layouting -->
@section('content')
<main>
<div class="container mt-5">
    <div class="row">
        <div class="col-8 sender-information">
            <p class="sender mt-4">
                {{ $message['customerName'] }} | {{ $message['customerEmail'] }} | +62 {{ $message['customerPhoneNumber'] }}
            </p>
        </div>
        <div class="col-4">
            <p class="mt-4">
                {{ \Carbon\Carbon::parse($message['created_at'])->format('j F Y | H:i') }}
            </p>
        </div>
        <hr>
        <div class="col-12">
            {{ $message['customerMessage'] }}
        </div>
    </div>

    <a type="button" class="btn back-btn mt-5" href="{{ url('/messages') }}">Kembali</a>
    <a type="button" class="btn back-btn mt-5 ml-3" target="_blank" href="mailto:{{ $message['customerEmail'] }}?subject=no-reply-UPTD-Puskesmas-Babakan-Tarogong">Balas Via Email</a>
    <a type="button" class="btn btn-danger mt-5 delete-button ml-3" href="{{ url('/messages/delete/'.$message->messageId) }}">Hapus Data Pesan</a>
</div>
@endsection
</main>
