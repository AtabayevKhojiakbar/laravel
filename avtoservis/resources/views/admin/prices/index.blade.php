@extends('admin.master')
@section('content')


    <div class="container">
        <h1 class="text-center">Servis Xizmatlarimiz</h1>
        <a href="{{route('admin.prices.create')}}"><button class="btn btn-success float-right m-1">Yangi xizmat qo'shish</button></a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Xizmat nomi</th>
                <th>Xizmat narxlari</th>
                <th>Amal</th>
            </tr>
            </thead>
            <tbody>
            @foreach($prices as $ss)
                <tr>
                    <td>{{$ss->id}}</td>
                    <td>{{$ss->name}}</td>
                    <td>{{$ss->price}} So'm</td>
                    <td><div class="d-flex">
                            <a class="btn btn-warning btn-sm m-1" href="{{route('admin.prices.edit',$ss->id)}}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>
                            </a>
                            <form action="{{route('admin.prices.destroy',$ss->id)}}" method="POST">
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
