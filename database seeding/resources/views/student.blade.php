@extends('layouts.mainlayout')

@section('title', 'students')

@section('content')
    <h1>ini adalah halaman students</h1>
    <h3>Students List</h3>
    <ol>
        @foreach ($studentslist as $data)
        <li>
            {{$data->name}} | {{$data->gender}} | {{$data->nis}}
        </li>
        @endforeach
    </ol>
@endsection