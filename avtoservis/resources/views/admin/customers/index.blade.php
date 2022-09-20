@extends('admin.master')
@section('content')
    <div class="container">
        <h2 align="center">Xizmatlar tarixi</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Mashina raqami</th>
                <th>Usta ismi</th>
                <th>Xizmat turi</th>
                <th>Umumiy summa</th>
                <th>Chegirma</th>
                <th>To'lanadigan summa</th>
                <th>Status</th>
                <th>Sana</th>
                <th>Amal</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->car_number}}</td>
                    <td>{{$customer->employee->fio}}</td>
                    <td>{{$customer->price->name}}</td>
                    <td>{{$customer->paysum}} So'm</td>
                    <td>{{$customer->sale}}%</td>
                    <td>{{$customer->payedsum}} So'm</td>
                    <td>@if($customer->status==1)
                            To'langan
                        @else
                            To'lanmagan
                        @endif
                    </td>
                    <td>{{$customer->updated_at}}</td>
                    <td><div class="d-flex">
                            <a class="btn btn-warning btn-sm m-1" href="{{route('admin.customers.edit',$customer->id)}}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>
                            </a>
                            <form action="{{route('admin.customers.destroy',$customer->id)}}" method="POST">
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
