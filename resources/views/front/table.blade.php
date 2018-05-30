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
                @for($i = 1 ; $i <= 10; $i++)
                    <tr>
                        <td width="10%" class="idNumber">{{($i == 10)?'':0}}{{$i}}</td>
                        <td width="70%" class="padd-left">Nombre y apellido</td>
                        <td width="40%" >1500</td>
                    </tr>
                @endfor
                </tbody>
            </table>
            <a class="table-back" href="{{route('play')}}">
                <img src="{{asset('images/back.png')}}" alt="">
            </a>
        </div>


    </main>


@section('script')

@endsection

