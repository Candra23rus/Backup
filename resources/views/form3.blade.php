@include('dashboard.header', ['title' => 'Silamo Form 1.3'])
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
                                        <h4 class="form-section"><i class="fa fa-search"></i> Tabel Hasil Analisa Perhitungan Tingkat Kerusakan Rumah ->
                                            Format 1.3</h4>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Nama Penerima
                                                        Bantuan
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" name="nama"
                                                            class="form-control" value="{{ session('nama') }}" disabled>
                                                        <input type="text" id="projectinput5" name="nama"
                                                            class="form-control" value="{{ session('nama') }}" hidden>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Nomor KTP
                                                    </label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="ktp" value="{{ session('id') }}" disabled>
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="ktp" value="{{ session('id') }}" hidden>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Alamat/Dusun
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <textarea required type="text" id="projectinput5" class="form-control" name="alamat" disabled>
                                                            {{ session('alamat') }}</textarea>
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="alamat" value="{{ session('alamat') }}" hidden>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                        for="userinput4">Desa/Kelurahan
                                                    </label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="desa" value="{{ session('desa') }}" disabled>
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="desa" value="{{ session('desa') }}" hidden>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput4">Kecamatan
                                                    </label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="kec" value="{{ session('kec') }}" disabled>
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="kec" value="{{ session('kec') }}" hidden>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                        for="userinput4">Kabupaten/Kota
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="kec" value="{{ session('kab') }}" disabled>
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="kab" value="{{ session('kab') }}" hidden>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <div class="form-body"> <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <table class="table table-xs">
                                                    <tr class="bg-success text-light text-center vertical-align">
                                                        <td rowspan="2">No.</td>
                                                        <td rowspan="2">Komponen</td>
                                                        <td rowspan="2">Sub Komponen</td>
                                                        <td colspan="3" class="text-center">Bobot</td>
                                                        <td rowspan="2">Keterangan</td>
                                                    </tr>
                                                    <tr class="bg-success text-light text-center">
                                                    <td>Terhadap Seluruh Bangunan</td>
                                                    <td>Tingkat Kerusakan %</td>
                                                    <td>Nilai Kerusakan %</td>
                                                    </tr>
                                                    <tr class="text-center bg-dark text-light">
                                                        <td>a</td>
                                                        <td>b</td>
                                                        <td>c</td>
                                                        <td>d</td>
                                                        <td>e</td>
                                                        <td>f (d x e)</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Pondasi</td>
                                                        <td>Pondasi</td>
                                                        <td>12</td>
                                                        <td>12</td>
                                                        <td><input type="text" name="pondasi" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Struktur</td>
                                                        <td>Kolom dan Balok</td>
                                                        <td>19</td>
                                                        <td>19</td>
                                                        <td><input type="text" name="balok" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Plesteran</td>
                                                        <td>2</td>
                                                        <td>2</td>
                                                        <td><input type="text" name="plesteran1" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Atap</td>
                                                        <td>Kuda-kuda</td>
                                                        <td>5.5</td>
                                                        <td>5.5</td>
                                                        <td><input type="text" name="kuda" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Gording/Lisplank</td>
                                                        <td>2.2</td>
                                                        <td>2.2</td>
                                                        <td><input type="text" name="gording" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Penutup Atap</td>
                                                        <td>4</td>
                                                        <td>4</td>
                                                        <td><input type="text" name="penutupAtap" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Plafond</td>
                                                        <td>Rangka Plafond</td>
                                                        <td>4</td>
                                                        <td>4</td>
                                                        <td><input type="text" name="rangkaPlafond" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Penutup Plafond</td>
                                                        <td>5</td>
                                                        <td>5</td>
                                                        <td><input type="text" name="penutupPlafond" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Dinding</td>
                                                        <td>Bata/Batako</td>
                                                        <td>7</td>
                                                        <td>7</td>
                                                        <td><input type="text" name="dinding1" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Plesteran</td>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td><input type="text" name="plesteran2" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Daun Jendela</td>
                                                        <td>2.5</td>
                                                        <td>2.5</td>
                                                        <td><input type="text" name="daun" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Daun Pintu</td>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td><input type="text" name="daunPintu" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Kusen</td>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td><input type="text" name="kusen" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Lantai</td>
                                                        <td>Penutup Lantai</td>
                                                        <td>10.5</td>
                                                        <td>10.5</td>
                                                        <td><input type="text" name="lantai" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Utilitas</td>
                                                        <td>Instalasi Listrik</td>
                                                        <td>4</td>
                                                        <td>4</td>
                                                        <td><input type="text" name="listrikin" class="form-control"></td>
                                                        <td>
                                                            <div class="col-md-4">
                                                                <label for="radio-2">Ada</label>
                                                                    <input type="radio" name="listrik"
                                                                        id="radio-2" class="jui-radio-buttons" value="Ada">
                                                                        <label for="radio-3">Tidak Ada</label>
                                                                    <input type="radio" name="listrik"
                                                                        id="radio-3" class="jui-radio-buttons" value="Tidak Ada">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Instalasi Air</td>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td><input type="text" name="airin" class="form-control"></td>
                                                        <td>
                                                            <div class="col-md-4">
                                                                <label for="radio-23">Ada</label>
                                                                    <input type="radio" name="air"
                                                                        id="radio-23" class="jui-radio-buttons" value="Ada">
                                                                        <label for="radio-24">Tidak Ada</label>
                                                                    <input type="radio" name="air"
                                                                        id="radio-24" class="jui-radio-buttons" value="Tidak Ada">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Drainase/Limbah</td>
                                                        <td>1.5</td>
                                                        <td>1.5</td>
                                                        <td><input type="text" name="drainase" class="form-control"></td>
                                                        <td>
                                                            <div class="col-md-4">
                                                                <label for="radio-4">Ada</label>
                                                                    <input type="radio" name="limbah"
                                                                        id="radio-4" class="jui-radio-buttons" value="Ada">
                                                                        <label for="radio-5">Tidak Ada</label>
                                                                    <input type="radio" name="limbah"
                                                                        id="radio-5" class="jui-radio-buttons" value="Tidak Ada">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Finishing</td>
                                                        <td>Struktur</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td><input type="text" name="finishingStruktur" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Plafond</td>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td><input type="text" name="finishingPlafond" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Dinding</td>
                                                        <td>2.5</td>
                                                        <td>2.5</td>
                                                        <td><input type="text" name="finishingDinding" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Kusen/Daun</td>
                                                        <td>2.5</td>
                                                        <td>2.5</td>
                                                        <td><input type="text" name="finishingKusen" class="form-control"></td>
                                                        <td></td>
                                                    </tr>
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
