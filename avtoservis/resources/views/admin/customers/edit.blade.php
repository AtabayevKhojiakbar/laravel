@extends('admin.master')
@section('content')

    <div class="container">
        <h1 class="text text-primary text-center  mb-0 mt-3">Servis ishchilarni yangilash</h1>
        <div class="d-flex">
            @if($errors->any())

                @foreach($errors->all() as $e)
                    <h3 class="text-danger">{{$e}}</h3>
                @endforeach
            @endif
            <form method="post" action="{{route('admin.cusromers.update',$customers->id)}}"  class="w-100 m-3 mt-0 p-5" >
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label" >Mashina raqami:</label>
                    <input type="text" name="carnumber" required value="{{$customers->car_number}}" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Chegirma:</label>
                    <input type="text" name="sale"  class="form-control" value="{{$customers->sale}}" id="text" required>
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>

@endsection
