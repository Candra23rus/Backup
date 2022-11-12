<style>
    img {
        max-width: 180px;
    }

    input[type=file] {
        padding: 10px;
        background: #2d2d2d;
    }
</style>
@include('dashboard.header', ['title' => 'Silamo Form 1.2'])
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
                                    action="{{ route('form2s.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-search"></i> GAMBAR/FOTO RUMAH KONDISI
                                            AWAL (0%) ->
                                            Format 1.2</h4>

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
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-md-12 label-control" for="userinput1">Foto KondisiAwal Tampak Depan Rumah</label>
                                                <div class="col-md-12">
                                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                                    <span class="btn btn-success fileinput-button mr-1 form-control">
                                                        <i class="icon-plus"></i>
                                                        <span>Foto Kondisi Awal
                                                            Tampak Depan Rumah</span>
                                                        <input type="file" name="depan" id="image-source"
                                                            onchange="previewImage();">
                                                        @error('depan')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-md-12">
                                                    <img id="image-preview" alt="image preview"
                                                    src="/storage/posts/upload.jpg" style="display:none;
                                                    width : auto;
                                                    height : 10vw;">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-12 label-control" for="userinput2">Foto Kondisi Awal Dalam Rumah
                                                </label>
                                                <div class="col-md-12">
                                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                                    <span class="btn btn-success fileinput-button mr-1 form-control">
                                                        <i class="icon-plus"></i>
                                                        <span>Foto Kondisi Awal
                                                            Dalam Rumah</span>
                                                        <input type="file" name="dalam" id="image-source1"
                                                            onchange="previewImage1();">
                                                    </span>
                                                </div><div class="col-md-12">
                                                <img id="image-preview1" alt="image preview1"
                                                src="/storage/posts/upload.jpg" style="display:none;
                                                width : auto;
                                                height : 10vw;">
                                            </div>
                                            </div>
                                    <div class="form-group row">
                                        <label class="col-md-8 label-control" for="userinput2">Foto Kondisi Awal Tampak Belakang</label>
                                                <div class="col-md-12">
                                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                                    <span class="btn btn-success fileinput-button mr-1 form-control">
                                                        <i class="icon-plus"></i>
                                                        <span>Foto Kondisi
                                                            Awal Tampak Belakang</span>
                                                        <input type="file" name="belakang" id="image-source3"
                                                        onchange="previewImage3();">
                                                    </span>
                                                </div>
                                                <div class="col-md-12">
                                                    <img id="image-preview3" alt="image preview1"
                                                    src="/storage/posts/upload.jpg" style="display:none;
                                                    width : auto;
                                                    height : 10vw;">
                                                </div>
                                            </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group row">
                                        <label class="col-md-8 label-control" for="userinput4">Foto Kondisi
                                            Awal Tampak Samping Kiri</label>
                                                <div class="col-md-12">
                                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                                    <span class="btn btn-success fileinput-button mr-1 form-control">
                                                        <i class="icon-plus"></i>
                                                        <span>Foto Kondisi
                                                            Awal Tampak Samping Kiri </span>
                                                        <input type="file" name="kiri" id="image-source4"
                                                        onchange="previewImage4();">
                                                    </span>
                                                </div>
                                                <div class="col-md-12">
                                                    <img id="image-preview4" alt="image preview1"
                                                    src="/storage/posts/upload.jpg" style="display:none;
                                                    width : auto;
                                                    height : 10vw;">
                                                </div>
                                            </div>
                                    <div class="form-group row">
                                        <label class="col-md-8 label-control" for="userinput4">Foto Kondisi
                                            Awal Tampak Samping Kanan </label>
                                        <div class="col-md-12">
                                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                                    <span class="btn btn-success fileinput-button mr-1 form-control">
                                                        <i class="icon-plus"></i>
                                                        <span>Foto Kondisi
                                                            Awal Tampak Samping Kanan</span>
                                                        <input type="file" name="kanan" id="image-source5"
                                                        onchange="previewImage5();">
                                                    </span>
                                                </div>
                                                <div class="col-md-12">
                                                    <img id="image-preview5" alt="image preview1"
                                                    src="/storage/posts/upload.jpg" style="display:none;
                                                    width : auto;
                                                    height : 10vw;">
                                                </div>
                                            </div>

                                    <div class="form-group row">
                                        <label class="col-md-12 label-control" for="userinput4">Foto Kondisi
                                            WC/Kamar Mandi</label>
                                        <div class="col-md-12">
                                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                                    <span class="btn btn-success fileinput-button mr-1 form-control">
                                                        <i class="icon-plus"></i>
                                                        <span>Foto Kondisi
                                                            WC/Kamar Mandi</span>
                                                        <input type="file" name="wc" id="image-source6"
                                                        onchange="previewImage6();">
                                                    </span>
                                                </div>
                                                <div class="col-md-12">
                                                    <img id="image-preview6" alt="image preview1"
                                                        src="/storage/posts/upload.jpg" style="display:none;
                                                        width : auto;
                                                        height : 10vw;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                            <div class="card-content collpase show">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="form-section">Material Kondisi Awal</h4>
                                            </div>
                                            <div class="col">
                                                <h4 class="form-section">Material Rencana Usulan</h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Jenis Atap
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="atap1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Jenis
                                                        Lantai
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="lantai1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Jenis
                                                        Dinding
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="dinding1" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Jenis Atap
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="" aria-describedby="basic-addon2"
                                                                    name="atap">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"
                                                                        id="basic-addon2">vol.m<sup>2</sup></span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Jenis
                                                        Lantai
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="" aria-describedby="basic-addon2"
                                                                    name="lantai">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"
                                                                        id="basic-addon2">vol.m<sup>2</sup></span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Jenis
                                                        Dinding
                                                        *</label>
                                                    <div class="col-md-9">
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="" aria-describedby="basic-addon2"
                                                                    name="dinding">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"
                                                                        id="basic-addon2">vol.m<sup>2</sup></span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
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

                function previewImage1() {
                    document.getElementById("image-preview1").style.display = "block";
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("image-source1").files[0]);

                    oFReader.onload = function(oFREvent) {
                        document.getElementById("image-preview1").src = oFREvent.target.result;
                    };
                };

                function previewImage3() {
                    document.getElementById("image-preview3").style.display = "block";
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("image-source3").files[0]);

                    oFReader.onload = function(oFREvent) {
                        document.getElementById("image-preview3").src = oFREvent.target.result;
                    };
                };

                function previewImage4() {
                    document.getElementById("image-preview4").style.display = "block";
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("image-source4").files[0]);

                    oFReader.onload = function(oFREvent) {
                        document.getElementById("image-preview4").src = oFREvent.target.result;
                    };
                };

                function previewImage5() {
                    document.getElementById("image-preview5").style.display = "block";
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("image-source5").files[0]);

                    oFReader.onload = function(oFREvent) {
                        document.getElementById("image-preview5").src = oFREvent.target.result;
                    };
                };

                function previewImage6() {
                    document.getElementById("image-preview6").style.display = "block";
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("image-source6").files[0]);

                    oFReader.onload = function(oFREvent) {
                        document.getElementById("image-preview6").src = oFREvent.target.result;
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
            <script src="{{ asset('/app-assets/js/scripts/forms/input-groups.js') }}"></script>
