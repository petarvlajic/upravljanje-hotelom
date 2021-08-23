@extends('layout.app');

@section('content');

<div class="container">
<form class="px-5" action="{{ route('rooms')}}" method="POST">
        @csrf
        
        <div class="row no-margin">
            <div class="col-sm-6">
                <div class="form-group">
                    <span class="form-label">Sprat</span>
                    <select class="form-control" name="floor">
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
                    <span class="form-label">Broj kreveta</span>
                    <select class="form-control" name="bedNum">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <span class="select-arrow"></span>
                </div>
            </div>
        </div>
        <div class="row no-margin">
            <div class="col-sm-6">
                <div class="form-group">
                    <span class="form-label">Minibar</span>
                    <select class="form-control" name="minibar">
                        <option value="da">Da</option>
                        <option value="ne">Ne</option>
                    </select>
                    <span class="select-arrow"></span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <span class="form-label">Status</span>
                    <select class="form-control" name="status">
                        <option value="zauzeta">Zauzeta</option>
                        <option value="slobodna">Slobodna</option>
                    </select>
                    <span class="select-arrow"></span>
                </div>
            </div>
        </div>
        
       
        <div class="form-btn">
            <button class="btn btn-success font-weight-bold mb-5">Dodaj</button>
        </div>
    </form>
</div>



@endsection