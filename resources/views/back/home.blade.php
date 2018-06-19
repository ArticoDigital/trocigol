@extends('layouts.back')
@section('content')
    <div>
        <h1 class="is-text-center m-t-32 m-b-0">Reporte de usuarios </h1>
        <div class="row justify-between align-center">
            <form action="{{route('gamesUserSearch')}}" class="row col-10">
                <label for=""><input type="text" name="name" placeholder="Búsqueda por nombre"></label>
                <button>Buscar</button>
            </form>
            <a href="{{route('userAllExcel')}}" class="col-2 col-m-1">
                <img src="{{asset('images/document.svg')}}" alt="">
            </a>
        </div>
    </div>
    <section class="table-container m-t-32">
        <table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Fecha de registro</th>
                <th>Ver juegos</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a target="_blank" href="{{$user->avatar}}">Ver avatar</a></td>
                    <td>{{$user->created_at}}</td>
                    <td><a href="{{route('gamesUserReport',$user->id)}}">Ver juegos</a></td>
                </tr>
            @endForeach
        </table>

    </section>
    {{ $users->links() }}
@endsection
