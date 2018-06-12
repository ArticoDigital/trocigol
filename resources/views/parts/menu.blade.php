@if(isset($audio))
    <audio preload="none" loop id="Audio">
        <source src="{{asset('audio/audio.mp3')}}"></source>
    </audio>
@endif
<div class="nav-menu">
    <ul class="row ">
        @if(isset($audio))
            <li>
                <div class="playerAudio" id="Player">
                    <svg class="icon play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <path d="M51.109 30.335l-36-24A2 2 0 0 0 12 8v48a2.003 2.003 0 0 0 2 2c.388 0 .775-.113 1.109-.336l36-24a2 2 0 0 0 0-3.329z"/>
                    </svg>
                    <svg class="icon pause" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <path d="M22.537 8.046h17.791c1.104 0 2.003.898 2.003 1.993v79.912a2.005 2.005 0 0 1-2.003 2.003h-17.79a2.005 2.005 0 0 1-2.003-2.003V10.04c0-1.095.898-1.993 2.002-1.993zM59.672 8.046h17.8c1.095 0 1.993.898 1.993 1.993v79.912a2.003 2.003 0 0 1-1.993 2.003h-17.8a1.997 1.997 0 0 1-1.993-2.003V10.04c0-1.095.889-1.993 1.993-1.993z"/>
                    </svg>
                </div>
            </li>
        @endif

        <li>
            @if(isset($back))
                <a href="{{url('jugar')}}"><img src="{{asset('images/back.png')}}" alt=""></a>
            @endif
        </li>
        @if(isset($close))
            <li><a href="{{url('cerrar-sesion')}}"><img src="{{asset('images/close.png')}}" alt=""></a></li>
        @endif
    </ul>
</div>