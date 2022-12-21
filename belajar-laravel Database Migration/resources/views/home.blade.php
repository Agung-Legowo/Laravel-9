@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
    <h1>ini adalah halaman home</h1>
    <h2>selamat datang, {{ $name }}. Saya adalah {{ $role }}</h2>

        <table class="table">
        <tr>
            <th>NO.</th>
            <th>Nama</th>
        </tr>
        @foreach($sayur as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data}}</td>
        </tr>
        @endforeach
        </table>
@endsection
        
    