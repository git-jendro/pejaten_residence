@extends('layouts/template')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
                <form action="/fasilitas/{{$fasilitas->id_facility}}" role="form" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf                    
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Nama Fasilitas</label>
                                <input type="text" value="{{$fasilitas->nama}}" class="form-control" name="nama">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 py-3">
                            <label class="bmd-label-floating">Icon</label>
                            <br>
                            <img src="{{ asset('storage/'.$fasilitas->icon) }}" alt="{{$fasilitas->id}}" width="100px" height="100px">
                            <input type="file" class="form-control" name="icon">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Sumbit</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection