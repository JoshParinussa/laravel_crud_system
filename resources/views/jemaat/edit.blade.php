@extends('layouts.base_layouts.base')

@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Jemaat <small>Perbaharui Jemaat</small></h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
            </div>
        </div>
    </div>

    <form action="{{ route('jemaats.update', $jemaat->id) }}" class="kt-form kt-form--label-right form-main" id="kt_form" method="post">
        @csrf
        @method('PUT')
        <div class="kt-portlet__body">
            <div class="kt-section kt-section--first">
                <div class="kt-section__body">
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Nama</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" placeholder="Nama jemaat" name="name" value="{{ $jemaat->name }}">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ $jemaat->email }}">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Jenis kelamin</label>
                        <div class="col-lg-9 col-xl-6">
                            <select class="form-control" name="jk">
                                <option value="laki-laki" @if($jemaat->jk == 'laki-laki') selected='selected' @endif>Laki-laki</option>
                                <option value="perempuan" @if($jemaat->jk == 'perempuan') selected='selected' @endif>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Nama baptis</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" placeholder="Nama baptis" name="nama_baptis" value="{{ $jemaat->nama_baptis }}">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">No kartu keluarga</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="number" class="form-control" placeholder="No kartu keluarga" name="nomer_kk" value="{{ $jemaat->nomer_kk }}">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Alamat sekarang</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" placeholder="Alamat sekarang" name="alamat_skg" value="{{ $jemaat->alamat_skg }}">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Alamat asal</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" placeholder="Alamat asal" name="alamat_asal" value="{{ $jemaat->alamat_asal }}">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tempat lahir</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir" value="{{ $jemaat->tempat_lahir }}">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Pendidikan</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan" value="{{ $jemaat->pendidikan }}">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Pekerjaan</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="{{ $jemaat->pekerjaan }}">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">No telpon</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" placeholder="No telpon" name="no_tlp" value="{{ $jemaat->no_tlp }}">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal lahir</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly="" id="kt_datepicker_3" name="tgl_lahir" value="{{ $jemaat->tgl_lahir }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal sidi</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly="" id="kt_datepicker_3" name="tgl_sidi" value="{{ $jemaat->tgl_sidi }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal pernikahan</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly="" id="kt_datepicker_3" name="tgl_pernikahan" value="{{ $jemaat->tgl_pernikahan }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal baptis</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly="" id="kt_datepicker_3" name="tgl_baptis" value="{{ $jemaat->tgl_baptis }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
                        <div class="col-lg-9 col-xl-6">
                            <select class="form-control" name="status">
                                <option value="aktif" @if($jemaat->status == 'aktif') selected='selected' @endif>Aktif</option>
                                <option value="tidak aktif" @if($jemaat->status == 'tidak aktif') selected='selected' @endif>Tidak aktif</option>
                                <option value="meninggal" @if($jemaat->status == 'meninggal') selected='selected' @endif>Meninggal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal pendaftaran</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group date">
                                <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk" disabled="disabled" value="{{ $jemaat->tgl_masuk }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Jabatan Jemaat</label>
                        <div class="col-lg-9 col-xl-6">
                            <select name="jabatans_id" id="jabatans_id" class="form-control" required autofocus>
                                @foreach($jabatans as $jabatan)
                                <option value="{{ $jabatan->id }}" @if($jemaat->jabatans_id == $jabatan->id) selected='selected' @endif>{{ $jabatan->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <div class="row">
                    <div class="col-lg-3 col-xl-3">
                    </div>
                    <div class="col-lg-9 col-xl-9">
                        <button type="submit" class="btn btn-primary">Update</button>&nbsp;
                        <a href="{{ route('jemaats.index') }}">
                            <button type="button" class="btn btn-secondary">Batal</button>&nbsp;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')
<script src="{{ asset('js/date_picker.js') }}" type="text/javascript"></script>
@endsection