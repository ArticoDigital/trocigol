@extends('layouts.back')
@section('content')
    <div>
        <h3 class="is-text-center m-t-32 m-b-0">Niveles de {{$user->name}} del juego {{$game->id}}</h3>
        <div class="row justify-between align-center">
            <a class="col-3 " href="{{route('usersReport')}}">Volver </a>

        </div>
    </div>
    <section class="table-container m-t-32">
        <table>
            <thead>
            <tr>
                <th>Tiempo</th>
                <th>Puntaje</th>
                <th>Fecha</th>
            </tr>
            </thead>
            <tbody>
            @foreach($game->scores as $score)
                <tr>
                    <td>{{$score->time}}</td>
                    <td>{{$score->level}}</td>
                    <td>{{$score->score}}</td>
                    <td>{{$score->created_at}}</td>
                </tr>
            @endForeach
        </table>

    </section>

@endsection
