@extends('welcome')
@section('content')
<div class="container">
    <div class="card">
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
                    @if($customer->sale>0)
                    <td>{{$customer->paysum * (100-$customer->sale)/100}} So'm</td>
                    @else
                        <td>{{$customer->payedsum}}</td>
                    @endif
                    <td>@if($customer->status==1)
                            To'langan
                        @else
                            To'lanmagan
                        @endif
                    </td>
                    <td>{{$customer->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
