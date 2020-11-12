@extends('layouts/template')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Complete your profile</p>
        </div>
        <div class="card-body">
            <form action="{/project/store}" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Nama PT</label>
                            <input type="text" class="form-control" name="nama_pt">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Nama Project</label>
                            <input type="text" class="form-control" name="nama_project">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Alamat</label>
                            <textarea name="alamat" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <a href="{{url()->previous()}}">
                    <input type="button" class="btn btn-danger pull-right" value="Kembali">
                </a>
                <button type="submit" class="btn btn-primary pull-right">Sumbit</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection