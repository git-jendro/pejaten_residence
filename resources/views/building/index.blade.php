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
                <a href="/building/create"><button type="button" class="btn btn-primary">Tambah Data</button></a>
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>
                                No.
                            </th>
                            <th>
                                Nama Project
                            </th>
                            <th>
                                Nama Building/Tower
                            </th>
                            <th class="col-xs-1">
                                Jml Lantai
                            </th>
                            <th class="col-xs-1">
                                Luas Building
                            </th>
                            <th>
                                Fasilitas
                            </th>
                            <th>
                                Keterangan
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($building as $item)
                        <tr>
                            <td>

                            </td>
                            <td>
                                {{Str::limit($item->project->nama_project, 30)}}
                            </td>
                            <td>
                                {{Str::limit($item->nama, 30)}}
                            </td>
                            <td class="col-xs-1">
                                {{$item->lantai}}
                            </td>
                            <td class="col-xs-1">
                                {{$item->luas}}
                            </td>
                            <td>
                                @foreach ($facility as $row)
                                @if ($row->id_building == $item->id_building)
                            
                                <img src="{{ asset('storage/'.$row->facility->icon) }}" alt="{{$row->facility->id}}" width="20px" height="20px">
                                @endif
                                @endforeach
                            </td>
                            <td>
                                {{Str::limit($item->deskripsi, 30)}}
                            </td>
                            <td class="col-xs-2">
                                <a href="/building/{{$item->id_building}}"><span _ngcontent-kkv-c19=""
                                        class="material-icons icon-image-preview">visibility</span></a>
                                <a href="/building/{{$item->id_building}}/edit"><span _ngcontent-hyn-c19=""
                                        class="material-icons icon-image-preview">edit</span></a>
                                <a href="/building/delete/{{$item->id_building}}"><span _ngcontent-hyn-c19=""
                                        class="material-icons icon-image-preview">highlight_off</span></a>
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
