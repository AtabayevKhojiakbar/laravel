@extends('admin.master')
@section('content')

    <div class="container">
        <h1 class="text text-primary text-center  mb-0 mt-3">Servis xizmatlarni yangilash</h1>
        <div class="d-flex">
            @if($errors->any())

                @foreach($errors->all() as $e)
                    <h3 class="text-danger">{{$e}}</h3>
                @endforeach
            @endif
            <form method="post" action="{{route('admin.prices.update',$prices->id)}}"  class="w-100 m-3 mt-0 p-5" >
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label" >Xizmat nomi:</label>
                    <input type="text" name="name" required value="{{$prices->name}}" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Xizmat narxi:</label>
                    <input type="text" name="price"  class="form-control" value="{{$prices->price}}" id="text" required>
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>

@endsection
