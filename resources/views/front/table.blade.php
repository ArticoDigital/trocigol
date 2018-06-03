@extends('layouts.front')

@section('content')
    <div class="table-logo logo">
        <img src="{{asset('images/logo.png')}}" alt="">
    </div>
    <main class="Table row justify-center align-center" id="Table">

        <div>
            <h1>POSICIONES </h1>
            <table>
                <tbody>
                @foreach($scores as $score)
                    <tr>
                        <td width="10%" class="idNumber">{{$loop->iteration}}</td>
                        <td width="10%" class="idNumber"><img src="{{$score->avatar}}" alt=""></td>
                        <td width="70%" class="padd-left">{{$score->name}}</td>
                        <td width="40%" >{{$score->maxscore}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="table-back" href="{{route('play')}}">
                <img src="{{asset('images/back.png')}}" alt="">
            </a>
        </div>


    </main>


@section('script')

@endsection

