@extends('admin.master')
@section('content')
    <div class="container">
        <h1 class="text text-primary text-center  mb-0 mt-3">Yangi xizmatlar qo'shish</h1>
        <div class="d-flex">
            @if($errors->any())

                @foreach($errors->all() as $e)
                    <h3 class="text-danger">{{$e}}</h3>
                @endforeach
            @endif
            <form method="post" action="{{route('admin.prices.store')}}"  class="w-100 m-3 mt-0 p-5" >
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label" >Xizmat nomi:</label>
                    <input type="text" name="name" required class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Xizmat narxi kiriting:</label>
                    <input type="text" name="price" required class="form-control" id="img">
                </div>

                <button type="submit" class="btn btn-primary">Qo'shish</button>
            </form>
        </div>
    </div>
@endsection
