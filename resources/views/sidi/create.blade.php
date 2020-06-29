@extends('layouts.base_layouts.base')

@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Sidi <small>Tambah Sidi</small></h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
            </div>
        </div>
    </div>

    <form action="{{ route('sidi.store') }}" class="kt-form kt-form--label-right form-main" id="kt_form" method="post">
        @csrf
        <div class="kt-portlet__body">
            <div class="kt-section kt-section--first">
                <div class="kt-section__body">
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Sidi</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly="" id="kt_datepicker_3" name="tgl_sidi">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Peserta Sidi</label>
                        <div class="col-lg-9 col-xl-6">
                            <select name="jemaat_id" id="jemaat_id" class="form-control" required autofocus>
                                @foreach($jemaats as $jemaat)
                                <option value="{{ $jemaat->id }}">{{ $jemaat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
                        <div class="col-lg-9 col-xl-6">
                            <select class="form-control" name="status">
                                <option value="selesai">Selesai</option>
                                <option value="belum selesai">Belum selesai</option>
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
                        <button type="submit" class="btn btn-primary">Tambah</button>&nbsp;
                        <a href="{{ route('sidi.index') }}">
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