@extends('layouts.mainlayout')

@section('title', 'students')

@section('content')
    <h1>ini adalah halaman Class</h1>
    <h3>Class List</h3>

    <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Classlist as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
@endsection