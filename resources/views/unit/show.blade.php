@extends('layouts/template')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Simple Table</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <center><img class="my-3" src="{{ asset('storage/'.$unit->foto) }}" alt="{{$unit->id_unit}}" width="300px"
                                    height="300px"></center>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">{{$unit->nama}}</h2>
                                <hr>
                                <h3 class="pt-3">Kelengkapan Unit</h3>
                                <hr>
                                @foreach ($amenity as $row)
                                @if ($row->id_unit == $unit->id_unit)
                                <img src="{{ asset('storage/'.$row->amenity->icon) }}" alt="{{$row->amenity->id}}" width="30px" height="30px">
                                @endif
                                @endforeach
                                <h3 class="pt-3">Deskripsi</h3>
                                <hr>
                                <p class="card-category">
                                    {{$unit->deskripsi}}
                                </p>
                                <h3 class="pt-3">Harga</h3>
                                <hr>
                                Harga Beli : {{$unit->harga_jual}}
                                <br>
                                Harga Sewa : {{$unit->harga_sewa}}
                                <br>
                                Harga Sewa : {{$unit->harga_cicil}}
                                <br>
                                Harga Sewa : {{$unit->diskon}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection