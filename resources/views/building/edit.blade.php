@extends('layouts/template')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
                <form action="/building/{{$building->id_building}}" role="form" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf                    
                    <div class="row py-1 py-3">
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Nama Project</label>
                            </div>
                            <div class="col-4 pt-3">
                                <select name="id_project" class="form-control">
                                    <option value="{{$building->id_project}}">
                                        {{$building->project->nama_project}}
                                    </option>
                                    @foreach ($project as $item)
                                    <option value="{{$item->id_project}}">
                                        {{$item->nama_project}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Nama Building/Tower</label>
                                <input type="text" class="form-control" name="nama" value="{{$building->nama}}">
                            </div>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-2">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Jumlah Lantai</label>
                                <input type="text" class="form-control" name="lantai" value="{{$building->lantai}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Luas Building/Tower</label>
                                <input type="text" class="form-control" name="luas" value="{{$building->luas}}">
                            </div>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Keterangan</label>
                                <textarea name="deskripsi" class="form-control" cols="30" row py-1s="10">{{$building->deskripsi}}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Sumbit</button>
                    <a href="{{url()->previous()}}">
                        <input type="button" class="btn btn-danger pull-right mr-3" value="Kembali">
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection