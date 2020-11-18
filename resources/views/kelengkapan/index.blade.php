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
                    <a href="/kelengkapan/create"><button type="button" class="btn btn-primary">Tambah Data</button></a>
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Nama Kelengkapan Unit
                                </th>
                                <th>
                                    Icon
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($amenity as $item)
                                <tr>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        {{$item->nama}}
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/'.$item->icon) }}" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <a href="/kelengkapan/{{$item->id_amenity}}"><span _ngcontent-hyn-c19="" class="material-icons icon-image-preview">edit</span></a>
                                        <a href="/kelengkapan/delete/{{$item->id_amenity}}"><span _ngcontent-hyn-c19="" class="material-icons icon-image-preview">highlight_off</span></a>
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