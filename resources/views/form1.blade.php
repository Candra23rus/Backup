@include('dashboard.header', ['title' => 'Silamo Form 1.1'])
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

                                <form class="form form-horizontal" method="post" action="{{ route('form1s.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-search"></i> PENILAIAN KONDISI RUMAH
                                            TIDAK LAYAK HUNI (RTLH) -> Format 1.1</h4>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Nama Penerima
                                                        Bantuan
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" name="nama"
                                                            class="form-control @error('nama')is-invalid @enderror">
                                                        @error('nama')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Nomor KTP
                                                    </label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="ktp">

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Alamat/Dusun
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <textarea required type="text" id="projectinput5" class="form-control" name="alamat"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                        for="userinput4">Desa/Kelurahan
                                                    </label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="desa">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput4">Kecamatan
                                                    </label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="kec">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                        for="userinput4">Kabupaten/Kota
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <select id="projectinput5" name="kab" class="form-control">

                                                            <option value=""></option>
                                                            <option value="Lombok Barat">Lombok Barat</option>
                                                            <option value="Lombok Tengah">Lombok Tengah</option>
                                                            <option value="Lombok Timur">Lombok Timur</option>
                                                            <option value="Lombok Utara">Lombok Utara</option>
                                                            <option value="Kota Mataram">Kota Mataram</option>
                                                            <option value="Kab. Bima">Kab. Bima</option>
                                                            <option value="Kota Bima">Kota Bima</option>
                                                            <option value="Kab. Dompu">Kab. Dompu</option>
                                                            <option value="Kab. Sumbawa">Kab. Sumbawa</option>
                                                            <option value="Kab. Sumbawa Barat">Kab. Sumbawa Barat
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput4">Jumlah
                                                        Penghuni Rumah
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="projectinput5" class="form-control"
                                                            name="jmlPenghuni">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput4">Penghasilan
                                                        Per Bulan
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="projectinput5" class="form-control"
                                                            name="penghasilan">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                        for="userinput5">Usia/Umur</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="projectinput5" class="form-control"
                                                            name="usia">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                    for="userinput5">gambar Depan Rumah</label>
                                                    <div class="row fileupload-buttonbar">
                                                        <div class="col-md-12">
                                                            <span class="btn btn-success fileinput-button mr-1">
                                                                <i class="icon-plus"></i>
                                                                <span>Gambar Depan Rumah</span>
                                                                <input type="file" name="gambar" id="image-source"
                                                                onchange="previewImage();">
                                                            </span>
                                                        </div>
                                                    </div>
                                                        <div class="col-md-12">
                                                            <img id="image-preview" alt="image preview"
                                                            src="/storage/posts/upload.jpg" style="display:none;
                                                            width : auto;
                                                            height : 10vw;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-content collpase show">
                                <div class="card-body">


                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col">
                                                <h4 class="form-section">Komponen Rumah</h4>
                                            </div>
                                            <div class="col">
                                                <h4 class="form-section">Keselamatan Bangunan</h4>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Luas Tanah
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control"
                                                            name="luasTanah">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Status
                                                        Kepimilikan Tanah
                                                    </label>
                                                    <div class="col-md-9">
                                                        <label for="radio-27">Milik</label>
                                                            <input type="radio" name="statusTanah"
                                                                id="radio-27" class="jui-radio-buttons" value="Milik">
                                                                <label for="radio-28">Bukan Milik</label>
                                                            <input type="radio" name="statusTanah"
                                                                id="radio-28" class="jui-radio-buttons" value="Tidak Rusak">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">Luas
                                                        Bangunan
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5"
                                                            class="form-control" name="luasBangunan">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <fieldset><b>STRUKTUR</b>
                                                    <hr>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control"
                                                            for="userinput4">Pondasi</label>
                                                        <div class="col-md-9">
                                                            <label for="radio-13">Rusak</label>
                                                            <input type="radio" name="pondasi"
                                                                id="radio-13" class="jui-radio-buttons" value="Rusak">
                                                                <label for="radio-14">Tidak Rusak</label>
                                                            <input type="radio" name="pondasi"
                                                                id="radio-14" class="jui-radio-buttons" value="Tidak Rusak">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control"
                                                            for="userinput4">Tiang/kolom </label>
                                                        <div class="col-md-9">
                                                            <label for="radio-11">Rusak</label>
                                                            <input type="radio" name="tiang"
                                                                id="radio-11" class="jui-radio-buttons" value="Rusak">
                                                                <label for="radio-12">Tidak Rusak</label>
                                                            <input type="radio" name="tiang"
                                                                id="radio-12" class="jui-radio-buttons" value="Tidak Rusak">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control"
                                                            for="userinput4">Balok</label>
                                                        <div class="col-md-9">

                                                                <label for="radio-9">Rusak</label>
                                                            <input type="radio" name="balok"
                                                                id="radio-9" class="jui-radio-buttons" value="Rusak">
                                                                <label for="radio-10">Tidak Rusak</label>
                                                            <input type="radio" name="balok"
                                                                id="radio-10" class="jui-radio-buttons" value="Tidak Rusak">

                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control"
                                                                for="userinput4">Rangka
                                                                Atap</label>
                                                            <div class="col-md-9">
                                                                <label for="radio-7">Rusak</label>
                                                            <input type="radio" name="rangkaAtap"
                                                                id="radio-7" class="jui-radio-buttons" value="Rusak">
                                                                <label for="radio-8">Tidak Rusak</label>
                                                            <input type="radio" name="rangkaAtap"
                                                                id="radio-8" class="jui-radio-buttons" value="Tidak Rusak">
                                                            </div>
                                                        </div>
                                                </fieldset>
                                                <fieldset><b>NON STRUKTUR</b>
                                                    <hr>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Dinding
                                                            Pengisi</label>
                                                        <div class="col-md-9">
                                                            <label for="radio-5">Rusak</label>
                                                            <input type="radio" name="dinding"
                                                                id="radio-5" class="jui-radio-buttons" value="Rusak">
                                                                <label for="radio-6">Tidak Rusak</label>
                                                            <input type="radio" name="dinding"
                                                                id="radio-6" class="jui-radio-buttons" value="Tidak Rusak">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control"
                                                            for="userinput4">Kusen</label>
                                                        <div class="col-md-9">
                                                            <label for="radio-4">Rusak</label>
                                                            <input type="radio" name="kusen"
                                                                id="radio-4" class="jui-radio-buttons" value="Rusak">
                                                                <label for="radio-3">Tidak Rusak</label>
                                                            <input type="radio" name="kusen"
                                                                id="radio-3" class="jui-radio-buttons"value="Tidak Rusak">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Atap
                                                        </label>
                                                        <div class="col-md-9">
                                                            <label for="radio-1">Rusak</label>
                                                            <input type="radio" name="atap"
                                                                id="radio-1" class="jui-radio-buttons" valu="Rusak">
                                                            <label for="radio-2">Tidak Rusak</label>
                                                            <input type="radio" name="atap"
                                                                id="radio-2" class="jui-radio-buttons" value="Tidak Rusak">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control"
                                                            for="userinput4">Lantai</label>
                                                        <div class="col-md-9">
                                                            <label for="radio-15">Rusak</label>
                                                            <input type="radio" name="lantai"
                                                                id="radio-15" class="jui-radio-buttons" value="Rusak">
                                                                <label for="radio-16">Tidak Rusak</label>
                                                            <input type="radio" name="lantai"
                                                                id="radio-16" class="jui-radio-buttons" value="Tidak Rusak">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content collpase show">
                                <div class="card-body">
                                    <div class="form-body">
                                        <h4 class="form-section">Kecukupan Ruang</h4>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-6"">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Minimum 8
                                                        m<sup>2</sup>/jiwa
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <label for="radio-17">Cukup</label>
                                                        <input type="radio" name="cukup"
                                                            id="radio-17" class="jui-radio-buttons" value="Cukup">
                                                            <label for="radio-18">Tidak Cukup</label>
                                                        <input type="radio" name="cukup"
                                                            id="radio-18" class="jui-radio-buttons" value="Tidak Cukup">
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
                                        <h4 class="form-section">Kesehatan</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Pencahayaan
                                                        Minimal 10% dari luas dinding
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <label for="radio-19">Memenuhi</label>
                                                        <input type="radio" name="cahaya"
                                                            id="radio-19" class="jui-radio-buttons" value="Memenuhi">
                                                            <label for="radio-20">Tidak Memenuhi</label>
                                                        <input type="radio" name="cahaya"
                                                            id="radio-20" class="jui-radio-buttons" value="Tidak Memenuhi">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Penghawaan
                                                        Minimal 5% dari luas dinding ada sirkulasi
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <label for="radio-21">Rusak</label>
                                                            <input type="radio" name="hawa"
                                                                id="radio-21" class="jui-radio-buttons" value="Memenuhi">
                                                                <label for="radio-22">Tidak Rusak</label>
                                                            <input type="radio" name="hawa"
                                                                id="radio-22" class="jui-radio-buttons" value="Tidak Memenuhi">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                        for="userinput1">Ketersediaan MCK
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <label for="radio-23">Ada</label>
                                                            <input type="radio" name="mck"
                                                                id="radio-23" class="jui-radio-buttons" value="Ada">
                                                                <label for="radio-24">Tidak Ada</label>
                                                            <input type="radio" name="mck"
                                                                id="radio-24" class="jui-radio-buttons" value="Tidak Ada">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Kesanggupan
                                                        berswadaya
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <label for="radio-25">Sanggup</label>
                                                            <input type="radio" name="swadaya"
                                                                id="radio-25" class="jui-radio-buttons" value="Sanggup">
                                                                <label for="radio-26">Tidak Sanggup</label>
                                                            <input type="radio" name="swadaya"
                                                                id="radio-26" class="jui-radio-buttons" value="Tidak Sanggup">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

                    <!-- // Basic form layout section end -->

                </div>
            </div>
        </div>
        <script>
            function previewImage() {
                document.getElementById("image-preview").style.display = "block";
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

                oFReader.onload = function(oFREvent) {
                    document.getElementById("image-preview").src = oFREvent.target.result;
                };
            };
            </script>

        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="{{ asset('/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
        <script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{ asset('/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
        <!-- END PAGE LEVEL JS-->

        <script src="{{ asset('/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->

        <script src="{{ asset('/app-assets/js/scripts/ui/breadcrumbs-with-stats.js') }}"></script>
        <script src="{{ asset('/app-assets/js/scripts/forms/checkbox-radio.js') }}"></script>
        <script src="{{ asset('/app-assets/js/scripts/ui/jquery-ui/buttons-selects.js') }}"></script>
        <script src="{{ asset('/app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/vendor/jquery.ui.widget.js') }}"></script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/vendor/tmpl.min.js') }}"></script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/vendor/load-image.all.min.js') }}">
        </script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/vendor/canvas-to-blob.min.js') }}">
        </script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/vendor/jquery.blueimp-gallery.min.js') }}">
        </script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/jquery.iframe-transport.js') }}"></script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/jquery.fileupload.js') }}"></script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/jquery.fileupload-process.js') }}">
        </script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/jquery.fileupload-image.js') }}"></script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/jquery.fileupload-audio.js') }}"></script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/jquery.fileupload-video.js') }}"></script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/jquery.fileupload-validate.js') }}">
        </script>
        <script src="{{ asset('/app-assets/vendors/js/extensions/jquery-file-upload/jquery.fileupload-ui.js') }}"></script>
        <script src="{{ asset('/app-assets/js/scripts/extensions/jquery-file-upload.js') }}"></script>
