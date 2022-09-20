@extends('welcome')
@section('content')

    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>F.I.O</th>
                <th>Phone</th>
                <th>Ish joyi</th>
                <th>Ishga qabul qilingan sana</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->fio}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>{{$employee->branch->name}}</td>
                    <td>{{$employee->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
