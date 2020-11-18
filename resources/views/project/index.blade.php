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
                <a href="/project/create"><button type="button" class="btn btn-primary">Tambah Data</button></a>
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>
                                No.
                            </th>
                            <th>
                                Nama PT
                            </th>
                            <th>
                                Nama Project
                            </th>
                            <th>
                                Alamat
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($project as $item)
                        <tr>
                            <td>

                            </td>
                            <td>
                                {{Str::limit($item->nama_pt, 30)}}
                            </td>
                            <td>
                                {{Str::limit($item->nama_project, 30)}}
                            </td>
                            <td>
                                {{Str::limit($item->alamat, 30)}}
                            </td>
                            <td class="col-xs-2">
                                <center>
                                    <a href="/project/{{$item->id_project}}"><span _ngcontent-kkv-c19=""
                                            class="material-icons icon-image-preview">visibility</span></a>
                                    <a href="/project/{{$item->id_project}}/edit"><span _ngcontent-hyn-c19=""
                                            class="material-icons icon-image-preview">edit</span></a>
                                    <a href="/project/delete/{{$item->id_project}}"><span _ngcontent-hyn-c19=""
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