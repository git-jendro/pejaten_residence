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
                    <div class="row py-2">
                        <div class="col-md-12">
                            <label class="bmd-label-floating py-3">Kelengkapan Unit</label>
                            <table class="table">
                                <tr>
                                    <input type="hidden" id="building" value="{{$building->id_building}}">
                                    @foreach ($fac as $item)
                                    <th class="col-md-1 text-center">
                                        <label class="py-2">
                                            <input id="id{{$item->id_facility}}" type="checkbox" name="id_facility[]"
                                                value="{{$item->id_facility}}" onchange="facility({{$item->id_facility}})" class="form-control"
                                                @foreach ($facility as $a) {{$item->id_facility == $a->id_facility ? 'checked' : ''}}
                                                @endforeach>
                                            {{$item->nama}}
                                            <br>
                                            <img src="{{ asset('storage/'.$item->icon) }}" alt="{{$item->id_facility}}" width="30px"
                                                height="30px">
                                        </label>
                                    </th>
                                    @endforeach
                                </tr>
                            </table>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    function facility(id) {
        var facility = $("#id"+id).val();
        var building = $("#building").val();
        $.ajax({
            type : 'GET',
            url : 'http://localhost:8000/building/'+building+'/'+facility,
            success : function(res) {
                console.log(res);
            }
        })
    }
</script>