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
                <a href="/unit/create"><button type="button" class="btn btn-primary">Tambah Data</button></a>
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>
                                No.
                            </th>
                            <th>
                                Nama Building
                            </th>
                            <th>
                                Nama Kamar
                            </th>
                            <th>
                                Kelengkapan
                            </th>
                            <th>
                                Harga
                            </th>
                            <th>
                                Deskripsi
                            </th>
                            <th>
                                Foto
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($unit as $item)
                        <tr>
                            <td>

                            </td>
                            <td>
                                {{$item->building->nama}}
                            </td>
                            <td>
                                {{$item->nama}}
                            </td>
                            <td>
                                @foreach ($amenity as $row)
                                    @if ($row->id_unit == $item->id_unit)

                                    <img src="{{ asset('storage/'.$row->amenity->icon) }}" alt="{{$row->amenity->id_amenity}}"
                                        width="20px" height="20px">
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <p>
                                Harga Jual  : {{$item->harga_jual}} <br>
                                Harga Sewa  : {{$item->harga_sewa}} <br>
                                Harga Cicil : {{$item->harga_cicil}} <br>
                                Doskon      : {{$item->diskon}}
                                </p>
                            </td>
                            <td>
                                {{ Str::limit($item->deskripsi, 30) }}
                            </td>
                            <td>
                                @foreach ($image as $row)
                                    @if ($row->id_unit == $item->id_unit)
                                        <img src="{{ asset('storage/'.$row->path) }}" width="20px" height="20px">
                                    @endif
                                @endforeach
                            </td>
                            <td class="col-xs-2">
                                <a href="/unit/{{$item->id_unit}}"><span _ngcontent-kkv-c19=""
                                        class="material-icons icon-image-preview">visibility</span></a>
                                <a href="/unit/{{$item->id_unit}}/edit"><span _ngcontent-hyn-c19=""
                                        class="material-icons icon-image-preview">edit</span></a>
                                <a href="/unit/delete/{{$item->id_unit}}"><span _ngcontent-hyn-c19=""
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
<style>
    body {
        counter-reset: Serial;
        /* Set the Serial counter to 0 */
    }

    table {
        border-collapse: separate;
    }

    tr td:first-child:before {
        counter-increment: Serial;
        /* Increment the Serial counter */
        content: counter(Serial);
        /* Display the counter */
    }

</style>