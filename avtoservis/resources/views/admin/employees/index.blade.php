@extends('admin.master')
@section('content')

    <div class="container">
        <h1 align="center">Servis ishchilar</h1>
        <a href="{{route('admin.employees.create')}}"><button class="btn btn-success float-right m-1">Yangi xizmatchi qo'shish</button></a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>F.I.O</th>
                <th>Phone</th>
                <th>Ish joyi</th>
                <th>Ishga qabul qilingan sana</th>
                <th>Amal</th>
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
                    <td><div class="d-flex">
                            <a class="btn btn-warning btn-sm m-1" href="{{route('admin.employees.edit',$employee->id)}}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>
                            </a>
                            <form action="{{route('admin.employees.destroy',$employee->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm m-1"><span class="btn-label">
                                            <i class="fa fa-trash"></i>
                                        </span></button>
                            </form>
                        </div></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
