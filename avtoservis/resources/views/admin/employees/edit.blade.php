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
            <form method="post" action="{{route('admin.employees.update',$employees->id)}}"  class="w-100 m-3 mt-0 p-5" >
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label" >Xizmat nomi:</label>
                    <input type="text" name="name" required value="{{$employees->fio}}" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Xizmatchini telefon raqami:</label>
                    <input type="text" name="phone"  class="form-control" value="{{$employees->phone}}" id="text" required>
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>

@endsection
