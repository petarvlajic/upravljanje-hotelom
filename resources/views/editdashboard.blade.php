@extends('layout.app')

@section('content')

<div class="container py-5">
    <h2 class="text-info font-weight-bold">U obradi:</h2>
    <table class="table table-striped px-5 my-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ime</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">Odrasli</th>
                <th scope="col">Deca</th>
                <th scope="col">Tip sobe</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>

        </thead>
        <tbody>
            @php
            $i=1;
            @endphp

            @foreach ($reservation as $reservations)
            <tr style="color: #000;font-weight:700;">
                <th class="align-middle" scope="row">{{$i++}}</th>
                <td class="align-middle">{{$reservations->name}}</td>
                <td class="align-middle">{{$reservations->checkIn}}</td>
                <td class="align-middle">{{$reservations->checkOut}}</td>
                <td class="align-middle text-center">{{$reservations->adults}}</td>
                <td class="align-middle text-center">{{$reservations->children}}</td>
                <td class="align-middle">{{$reservations->roomType}}</td>
                <td><button class="btn btn-success font-weight-bold" type="submit">Prihvati</button></td>
                <td><button class="btn btn-danger font-weight-bold" type="submit">Odbij</button></td>

            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection