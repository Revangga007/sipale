@extends('layouts.pengguna.main')

@section('content')
    <section class="inn">
        <div class="container">
            123456789
            {{ Session('biodata')['alamat'] }}
        </div>
    </section>

@endsection
