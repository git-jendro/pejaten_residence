@extends('layouts/template')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
                <form action="/kelengkapan/{{$amenity->id_amenity}}" role="form" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf                    
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Nama Kelengkapan Unit</label>
                                <input type="text" value="{{$amenity->nama}}" class="form-control" name="nama">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 py-3">
                            <label class="bmd-label-floating">Icon</label>
                            <div class="amenity py-2">
                                <img src="{{ asset('storage/'.$amenity->icon) }}" alt="{{$amenity->id}}" width="100px" height="100px">
                    
                            </div>
                            <input type="file" class="form-control" name="icon" id="icon">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Sumbit</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
    .amenity img {
        width: 20%;
    }

</style>
<script>
    $(function() {
        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                        $('.amenity').html('');

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr({src: event.target.result, class: "mr-1", onclick:""}).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#icon').on('change', function() {
            imagesPreview(this, 'div.amenity');
        });
    });
</script>