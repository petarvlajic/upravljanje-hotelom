@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="text-center">Dobro dosli <span class="text-primary">{{auth()->user()->name}}</span>!</h2>




    <div class="">
        <h3>Vase rezervacije:</h3>
        <table class="table table-striped px-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Adults</th>
                    <th scope="col">Children</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                {{$i=1;}}
                @endphp
                @foreach ($reservation as $reservations)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$reservations->checkIn}}</td>
                    <td>{{$reservations->checkOut}}</td>
                    <td>{{$reservations->adults}}</td>
                    <td>{{$reservations->children}}</td>
                    <td>{{$reservations->roomType}}</td>
                    <td
                        class=" @if($reservations->status==='U obradi') text-info @elseif($reservations->status==='prihvaceno') text-success @elseif($reservations->status==='odbijeno') text-danger @endif ">
                        {{$reservations->status}}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <hr>
    <h3>Napravite novu rezervaciju:</h3>
    <form class="px-5" action="{{ route('reservation')}}" method="POST">
        @csrf
        <div class="row no-margin">
            <div class="col-sm-6">
                <div class="form-group">
                    <span class="form-label">Check In</span>
                    <input class="form-control" name="checkIn" type="date" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <span class="form-label">Check Out</span>
                    <input class="form-control" name="checkOut" type="date" required>
                </div>
            </div>
        </div>
        <div class="row no-margin">
            <div class="col-sm-6">
                <div class="form-group">
                    <span class="form-label">Adults (18+)</span>
                    <select class="form-control" name="adults">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <span class="select-arrow"></span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <span class="form-label">Children (0-17)</span>
                    <select class="form-control" name="children">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <span class="select-arrow"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <span class="form-label">Room Type</span>
            <select class="form-control" name="roomType" required>
                <option value="" selected hidden>Select room type</option>
                <option value="1 to 2 people">Private Room (1 to 2 People)</option>
                <option value="1 to 4 people">Family Room (1 to 4 People)</option>
            </select>
            <span class="select-arrow"></span>
        </div>
        <div class="form-group">
            <span class="form-label">Name</span>
            <input class="form-control" name="name" type="text" placeholder="Enter your Name">
        </div>
        <div class="form-group">
            <span class="form-label">Phone</span>
            <input class="form-control" name="phone" type="tel" placeholder="Enter your phone number">
        </div>
        <div class="form-btn">
            <button class="btn btn-success font-weight-bold mb-5">Book Now</button>
        </div>
    </form>


</div>
@endsection