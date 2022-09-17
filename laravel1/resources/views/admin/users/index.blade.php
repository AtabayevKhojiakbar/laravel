@extends('.master')
@section('content')

    <div class="container">
        <h1 class="text text-primary text-center">Foydalanuvchilar ro`yxati</h1>
        <table class="table table-bordered border-1 table-striped table-hover">

                <tr>
                    <th>#</th>
                    <th>Ism</th>
                    <th>Email</th>
                </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
