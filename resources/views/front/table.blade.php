@extends('layouts.front')

@section('content')
    <div class="table-logo logo">
        <img src="{{asset('images/logo.png')}}" alt="">
    </div>
    @component('parts.menu',['audio' => true, 'back' => true, 'close' => true]) @endcomponent
    <main class="Table row justify-center align-center" id="Table">

        <div class="Table-content">
            <h1>POSICIONES </h1>
            <table>
                <tbody>
                @foreach($scores as $score)
                    <tr>
                        <td width="10%" class="idNumber">{{$loop->iteration}}</td>
                        <td  width="10%" class="idNumber Table-image"><img src="{{$score->first()->avatar}}" alt=""></td>
                        <td width="70%" class="padd-left">{{$score->first()->name}}</td>
                        <td width="40%" >{{$score->first()->maxscore}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>


    </main>


@section('script')

@endsection

