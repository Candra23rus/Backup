<style>
    .rotasi {
        -moz-transform: rotate(-90deg);
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
    }

    .spain {
        content: "\2713";
    }
</style>
@include('dashboard.header', ['title' => 'Silamo Form 1.4'])
@include('dashboard.side')
<div class="app-content content">
    <div class="content-wrapper">


        <div class="content-body">
            <!-- Basic form layout section start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">

                                <form id="fileupload" class="form form-horizontal" method="post"
                                    action="{{ route('form3s.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-search"></i> Hasil Seleksi Calon
                                            Penerima Bantuan ->
                                            Peningkatan Kualitas Rlh ->
                                            Format 1.4</h4>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control"
                                                            for="userinput4">Desa/Kelurahan
                                                        </label>
                                                        <div class="col-md-9">
                                                            <select name="desa" id="desa" class="form-control">
                                                                @forelse ($data as $da )
                                                                <option>

                                                                    {{ $da->desa }}
                                                                </option>
                                                                @empty
                                                                        {{"tidak ada data"}}
                                                                    @endforelse ($data as $da)
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Kecamatan
                                                        </label>
                                                        <div class="col-md-9">
                                                            <select name="desa" id="desa" class="form-control">
                                                                @forelse ($data as $da )
                                                                <option>

                                                                    {{ $da->kec }}
                                                                </option>
                                                                @empty
                                                                        {{"tidak ada data"}}
                                                                    @endforelse ($data as $da)
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control"
                                                            for="userinput4">Kabupaten/Kota
                                                            *</label>
                                                        <div class="col-md-9">
                                                            <select name="desa" id="desa" class="form-control">
                                                                @forelse ($data as $da )
                                                                <option>

                                                                    {{ $da->kab }}
                                                                </option>
                                                                @empty
                                                                        {{"tidak ada data"}}
                                                                    @endforelse ($data as $da)
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                        </div>

                        <div class="card-content collpase show">
                            <div class="card-body">
                                <div class="form-body">
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group row">
                                                <table class="table-bordered col-md-10">
                                                    <tr class="bg-success text-light text-center vertical-align border">
                                                        <td rowspan="3">No.</td>
                                                        <td rowspan="3">Nama</td>
                                                        {{-- <td rowspan="3">Jenis Kelamin</td> --}}
                                                        <td rowspan="3">No KTP</td>
                                                        <td rowspan="3">Alamat</td>
                                                        <td colspan="8" class="text-center bg-succes">Keselamatan
                                                            Bangunan</td>
                                                        <td rowspan="3" class="rotasi" width="1px"><small
                                                                class="text-light">Kecukupan Ruang
                                                        </td>
                                                        <td rowspan="2" colspan="3">Kesehatan</td>

                                                        <td rowspan="3" class="rotasi" width="2px" height="200px">
                                                            <small class="text-light">Kesanggupan Berswadaya</small>
                                                        </td>
                                                        <td rowspan="3" class="rotasi" width="2px" height="200px">
                                                            <small class="text-light">Catatan</small>
                                                        </td>
                                                        <td rowspan="3" class="rotasi" width="2px" height="200px">
                                                            <small class="text-light">Hasil Rembug</small>
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-success text-light text-center">
                                                        <td colspan="4" width="4px">Komponen Struktural</td>
                                                        <td colspan="4" width="4px">Komponen non Struktural</td>
                                                    </tr>
                                                    <tr class="bg-success text-light text-center">
                                                        <td class="rotasi" width="2px" height="200px"><small
                                                                class="text-light">Pondasi</small></td>
                                                        <td class="rotasi" width="1px" height="200px"><small
                                                                class="text-light">Tiang</small></td>
                                                        <td class="rotasi" width="2px" height="200px"><small
                                                                class="text-light">Balok</small></td>
                                                        <td class="rotasi" width="2px" height="200px"><small
                                                                class="text-light">Rangka Atap</small></td>

                                                        <td class="rotasi" width="2px" height="200px"><small
                                                                class="text-light">Dinding Pengisi</small></td>
                                                        <td class="rotasi" width="2px" height="200px"><small
                                                                class="text-light">Kusen</small></td>
                                                        <td class="rotasi" width="2px" height="200px"><small
                                                                class="text-light">Penutup Atap<small></td>
                                                        <td class="rotasi" width="2px" height="200px"><small
                                                                class="text-light">Lantai</small></td>
                                                        <td class="rotasi" width="1px" height="200px"><small
                                                                class="text-light">Penghawaan</small></td>
                                                        <td class="rotasi" width="1px" height="200px"><small
                                                                class="text-light">Pencahayaan</small></td>
                                                        <td class="rotasi" width="1px" height="200px"><small
                                                                class="text-light">MCK</small></td>

                                                    </tr>
                                                    @forelse ($data as $d)
                                                    @if ($d->pondasi == 'Rusak')
                                                        <?php
                                                        $dataku = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->tiang == 'Rusak')
                                                        <?php
                                                        $dataku1 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku1 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->balok == 'Rusak')
                                                        <?php
                                                        $dataku2 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku2 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->rangkaAtap == 'Rusak')
                                                        <?php
                                                        $dataku3 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku3 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->dinding == 'Rusak')
                                                        <?php
                                                        $dataku4 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku4 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->kusen == 'Rusak')
                                                        <?php
                                                        $dataku5 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku5 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->atap == 'Rusak')
                                                        <?php
                                                        $dataku6 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku6 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->lantai == 'Rusak')
                                                        <?php
                                                        $dataku7 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku7 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->cukup == 'Rusak')
                                                        <?php
                                                        $dataku8 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku8 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->hawa == 'Rusak')
                                                        <?php
                                                        $dataku9 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku9 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->cahaya == 'Rusak')
                                                        <?php
                                                        $dataku10 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku10 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->mck == 'Rusak')
                                                        <?php
                                                        $dataku11 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku11 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    @if ($d->swadaya == 'Rusak')
                                                        <?php
                                                        $dataku12 = '&#10004;';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $dataku12 = '&#10060;';
                                                        ?>
                                                    @endif
                                                    <tr class="">
                                                        <td>{{ $d->id }}</td>
                                                        <td>{{ $d->nama }}</td>
                                                        <td>{{ $d->ktp }}</td>
                                                        <td>{{ $d->alamat }}</td>
                                                        <td class="spain text-center">{{ html_entity_decode($dataku) }}
                                                        </td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku1) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku2) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku3) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku4) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku5) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku6) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku7) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku8) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku9) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku10) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku11) }}</td>
                                                        <td class="spain text-center">
                                                            {{ html_entity_decode($dataku12) }}</td>
                                                        <td><input type="text" name="catatan"
                                                                class="form-control"></td>
                                                        <td>
                                                            <label for="radio-25"><small
                                                                    class="text-dark">Direkomendasikan</small></label>
                                                            <input type="radio" name="rekomendasi" id="radio-25"
                                                                class="jui-radio-buttons" value="Rekomendasi">
                                                            <label for="radio-26"><small class="text-danger">Tidak
                                                                    Direkomendasikan</small></label>
                                                            <input type="radio" name="rekomendasi" id="radio-26"
                                                                class="jui-radio-buttons" value="Tidak Rekomendasi">
                                                        </td>
                                                    </tr>

                                                @empty
                                                    <tr>
                                                        <td colspan="6" class="text-center">Tidak ada data...</td>
                                                    </tr>
                                                    @endforelse
                                                </table>
                                                <div class="form-actions right">

                                                    <a class="btn btn-outline-black btn-min-width btn-glow mr-1 mb-1 left"
                                                        href="javascript:window.history.go(-1);">
                                                        <i class="ft-skip-back"></i><b> Kembali</b></a>

                                                    <button type="submit"
                                                        class="btn btn-success btn-min-width btn-glow mr-1 mb-1 right">
                                                        <i class="fa fa-check-square-o"></i> Simpan & Lanjut
                                                    </button>

                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('dashboard.footer')
