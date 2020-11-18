@extends('layouts/template')
@section('content')
<div class="card">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="/fasilitas/create"><button type="button" class="btn btn-primary">Tambah Data</button></a>
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>
                                No.
                            </th>
                            <th>
                                Nama Fasilitas
                            </th>
                            <th>
                                Icon
                            </th>
                            <th class="col-xs-2">
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fasilitas as $item)
                        <tr>
                            <td>

                            </td>
                            <td>
                                {{$item->nama}}
                            </td>
                            <td>
                                <img src="{{ asset('storage/'.$item->icon) }}" width="50px"
                                    height="50px">
                            </td>
                            <td class="col-xs-2">
                                <center>
                                    <a href="/fasilitas/{{$item->id_facility}}"><span _ngcontent-hyn-c19=""
                                            class="material-icons icon-image-preview">edit</span></a>
                                    <a href="/fasilitas/delete/{{$item->id_facility}}"><span _ngcontent-hyn-c19=""
                                            class="material-icons icon-image-preview">highlight_off</span></a>
                                </center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection