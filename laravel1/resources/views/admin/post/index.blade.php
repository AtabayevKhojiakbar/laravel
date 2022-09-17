@extends('master')
@section('content')

    <div class="container">
        <h1 class="text text-primary text-center">Postlar ro`yxati</h1>
        <a href="{{route('admin.post.create')}}"><button class="btn btn-success float-right m-1">Yangi post yaratish</button></a>
        <table class="table table-bordered border-1 table-striped table-hover">
                <tr>
                    <th>#</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Ko'rilgan soni</th>
                    <th>Rasm</th>
                    <th>Amal</th>
                </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->avtor->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->view}}</td>
                    <td align="center"><img src='{{asset("posts/images/$post->img")}}' alt="" style="width: 180px; height: 130"></td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning btn-sm m-1" href="{{route('admin.post.edit',$post->id)}}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>
                            </a>
                            <form action="{{route('admin.post.destroy',$post->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm m-1"><span class="btn-label">
                                            <i class="fa fa-trash"></i>
                                        </span></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
