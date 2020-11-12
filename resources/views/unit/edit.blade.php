@extends('layouts/template')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Complete your profile</p>
        </div>
        <div class="card-body">
            <form action="/unit/{{$unit->id_unit}}" role="form" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="row py-1 py-3">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Nama Building</label>
                        </div>
                        <div class="col-4 pt-3">
                            <select name="id_building" class="form-control">
                                <option value="">
                                    {{$unit->building->nama}}
                                </option>
                                @foreach ($building as $item)
                                <option value="{{$item->id_building}}">
                                    {{$item->nama}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Nama Unit</label>
                            <input type="text" class="form-control" value="{{$unit->nama}}" name="nama">
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-12">
                        <label class="bmd-label-floating py-3">Kelengkapan Unit</label>
                        <table class="table">
                            <tr>
                                @foreach ($ame as $item)
                                <th class="col-md-1 text-center">
                                    <label class="py-2">
                                        <input type="checkbox" name="id_amenity[]" value="{{$item->id_amenity}}"
                                            class="form-control" @foreach ($amenity as $a) {{$item->id_amenity == $a->id_amenity ? 'checked' : ''}} @endforeach>
                                        {{$item->nama}}
                                        <br>
                                        <img src="{{ asset('storage/'.$item->icon) }}" alt="{{$item->id_amenity}}"
                                            width="30px" height="30px">
                                    </label>
                                </th>
                                @endforeach
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-2 mr-2">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Harga Jual</label>
                            <input type="text" class="form-control" value="{{$unit->harga_jual}}" name="harga_jual">
                        </div>
                    </div>
                    <div class="col-md-2 mr-2">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Harga Sewa</label>
                            <input type="text" class="form-control" value="{{$unit->harga_sewa}}" name="harga_sewa">
                        </div>
                    </div>
                    <div class="col-md-2 mr-2">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Harga Cicil</label>
                            <input type="text" class="form-control" value="{{$unit->harga_cicil}}" name="harga_cicil">
                        </div>
                    </div>
                    <div class="col-md-2 mr-2">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Diskon</label>
                            <input type="text" class="form-control" value="{{$unit->diskon}}" name="diskon">
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="10">{{$unit->deskripsi}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-12 py-3">
                        <label class="bmd-label-floating">Gambar Utama</label>
                        <div class="ugallery py-2">
                            @foreach ($image as $item)
                                @if ($item->role == 1)
                                    <img src="{{ asset('storage/'.$item->path) }}">
                                @endif 
                            @endforeach
                        </div>
                        <input type="file" class="form-control" name="utama" id="utama" />
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-12 py-3">
                        <label class="bmd-label-floating">List Gambar</label>
                        <div class="lgallery py-2">
                            @foreach ($image as $item)
                                @if ($item->role == null)
                                    <img src="{{ asset('storage/'.$item->path) }}">
                                @endif 
                            @endforeach
                        </div>
                        <input type="file" multiple class="form-control" name="path[]" id="foto">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-12 py-3">
                        <label class="bmd-label-floating">Gambar 360</label>
                        <div class="tgallery py-2">
                            @foreach ($image as $item)
                                @if ($item->role == 2)
                                    <img src="{{ asset('storage/'.$item->path) }}">
                                @endif 
                            @endforeach
                        </div>
                        <input type="file" class="form-control" name="tri" id="360">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Sumbit</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
<style>
    .ugallery img {
        width: 20%;
    }

    .lgallery img {
        width: 20%;
    }

    .tgallery img {
        width: 20%;
    }

</style>
<script type="text/javascript">
    $(function() {
        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr({src: event.target.result, class: "mr-1", onclick:""}).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#foto').on('change', function() {
            imagesPreview(this, 'div.lgallery');
        });
    });

    $(function() {
        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr({src: event.target.result, class: "mr-1", onclick:""}).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#utama').on('change', function() {
            imagesPreview(this, 'div.ugallery');
        });
    });
    $(function() {
        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr({src: event.target.result, class: "mr-1", onclick:""}).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#360').on('change', function() {
            imagesPreview(this, 'div.tgallery');
        });
    });
</script>