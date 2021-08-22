@extends('layout.app')

@section('content')

<div class="container py-5">
    <h2 class="text-info font-weight-bold">U obradi:</h2>
    <table class="table table-striped px-5 my-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sprat</th>
                <th scope="col">Broj Kreveta In</th>
                <th scope="col">Mini bar</th>
                <th scope="col">Status</th>
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
                <td class="align-middle">{{$room->minibar}}</td>
                <td class="align-start text-center">{{$room->status}}</td>

                @if($room->status==='slobodna')
                <td><button class="btn btn-danger font-weight-bold" type="submit">Rezervisi</button></td>
                @else
                <td><button class="btn btn-success font-weight-bold" type="submit">Oslobodi</button></td>
                @endif

            </tr>
            @endforeach


        </tbody>
    </table>

</div>

@endsection