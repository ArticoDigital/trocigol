@extends('layouts.back')
@section('content')
    <div>
        <h3 class="is-text-center m-t-32 m-b-0">Partidas de {{$user->name}} </h3>
        <div class="row justify-between align-center">
            <a class="col-3 " href="{{route('usersReport')}}">Volver </a>

        </div>
    </div>
    <section class="table-container m-t-32">
        <table>
            <thead>
            <tr>
                <th># Partida</th>
                <th>Nivel</th>
                <th>Puntaje</th>
                <th>Tiempo total</th>
                <th>Fecha</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user->games as $game)
                @if(!$game->scores->isEmpty())
                    <tr>
                        <td>{{$game->id}}</td>
                        <td>{{$game->scores->last()->level}}</td>
                        <td>{{$game->scores->last()->score}}</td>
                        <td>{{$game->scores->last()->time}}</td>
                        <td>{{$game->scores->last()->created_at}}</td>
                    </tr>
            @endif
            @endForeach
        </table>

    </section>

@endsection
