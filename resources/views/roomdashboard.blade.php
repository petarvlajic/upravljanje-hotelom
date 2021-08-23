@extends('layout.app')

@section('content')

<div class="container py-5">
    <h2 class="text-info font-weight-bold">Sobe:</h2>
    <table class="table table-striped px-5 my-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sprat</th>
                <th scope="col">Broj Kreveta In</th>
                <th scope="col">Mini bar</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @php
            $i=1;
            @endphp

            @foreach ($rooms as $room)
            <tr style="color: #000;font-weight:700;">
                <th class="align-middle" scope="row">{{$i++}}</th>
                <td class="align-middle">{{$room->floor}}</td>
                <td class="align-middle">{{$room->bedNum}}</td>
                <td class="align-middle text-capitalize">{{$room->minibar}}</td>
                <td class=" align-middle text-capitalize">{{$room->status}}</td>

                @if($room->status==='slobodna')
                <td><a href="{{ route('roomstatus', $room->id) }}" class="btn btn-danger font-weight-bold" type="submit">Rezervisi</a></td>
                @else
                <td><a href="{{ route('roomstatus', $room->id) }}" class="btn btn-success font-weight-bold" type="submit">Oslobodi</a></td>
                @endif
                <td><a href="{{ route('room.delete', $room->id)}}" class="btn btn-danger font-weight-bold border-rounded"><i class="fas fa-trash-alt"></i></a></td>

            </tr>
            @endforeach


        </tbody>
    </table>


    <a href="{{ route('newroom')}}" class="btn btn-success font-weight-bold"> Dodaj sobu </a>

</div>

@endsection