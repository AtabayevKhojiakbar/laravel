@extends('welcome')
@section('content')
    <div class="container">
        <h1 class="text text-primary text-center  mb-0 mt-3">Ro'yxatga olish</h1>
        <div class="d-flex ">
            @if($errors->any())

                @foreach($errors->all() as $e)
                    <h3 class="text-danger">{{$e}}</h3>
                @endforeach
            @endif
            <form method="post" action="{{route('navbat.store')}}"  class="w-75 m-3 mt-0 p-5" >
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label" >Mashina raqami:</label>
                    <input type="text" name="carnumber" required class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Xizmat turini tanlang:</label>
                    <select name="priceid" class="form-select form-select-lg mb-3" >
                        @foreach($prices as $price)
                        <option value="{{$price->id}}">{{$price->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Ishchini tanlang:</label>
                    <select name="empid" class="form-select form-select-lg mb-3">
                        @foreach($employees as $employee)
                        <option value="{{$employee->id}}">{{$employee->fio}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Qo'shish</button>
            </form>
        </div>
    </div>
@endsection
