@extends('.master')
@section('content')
    <div class="container">
        <h1 class="text text-primary text-center  mb-0 mt-3">Yangi post yaratish</h1>
        <div class="d-flex">
            @if($errors->any())

                @foreach($errors->all() as $e)
                    <h3 class="text-danger">{{$e}}</h3>
                @endforeach
            @endif
            <form method="post" action="{{route('admin.post.update',$post->id)}}" enctype="multipart/form-data" class="w-100 m-3 mt-0 p-5" >
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label" >Post mavzusini kiriting:</label>
                    <input type="text" name="title" required value="{{$post->title}}" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Post texti:</label>
                    <textarea name="text" rows="10" class="form-control" id="text" required>{{$post->text}}</textarea>
                </div><div class="mb-3">
                    <label for="img" class="form-label">Post rasmini yuklang:</label>
                    <input type="file" name="img"  class="form-control" id="img">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection