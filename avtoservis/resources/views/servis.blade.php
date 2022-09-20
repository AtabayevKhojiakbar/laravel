@extends('welcome')
@section('content')


    <div class="container">
        <h2 class="text-center">Servis Xizmatlarimiz</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Xizmat nomi</th>
                <th>Xizmat narxlari</th>
            </tr>
            </thead>
            <tbody>
            @foreach($servis as $ss)
                <tr>
                    <td>{{$ss->id}}</td>
                    <td>{{$ss->name}}</td>
                    <td>{{$ss->price}} So'm</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
