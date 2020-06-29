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

    <form action="{{ route('pernikahan.store') }}" class="kt-form kt-form--label-right form-main" id="kt_form" method="post">
        @csrf
        <div class="kt-portlet__body">
            <div class="kt-section kt-section--first">
                <div class="kt-section__body">
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Suami</label>
                        <div class="col-lg-9 col-xl-6">
                            <select name="suami_jemaat_id" id="suami_jemaat_id" class="form-control" required autofocus>
                                @foreach($jemaats as $jemaat)
                                <option value="{{ $jemaat->id }}">{{ $jemaat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Istri</label>
                        <div class="col-lg-9 col-xl-6">
                            <select name="istri_jemaat_id" id="istri_jemaat_id" class="form-control" required autofocus>
                                @foreach($jemaats as $jemaat)
                                <option value="{{ $jemaat->id }}">{{ $jemaat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Pernikahan</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly="" id="kt_datepicker_3" name="tgl_pernikahan">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Pendeta</label>
                        <div class="col-lg-9 col-xl-6">
                            <select name="pendeta_jemaat_id" id="pendeta_jemaat_id" class="form-control" required autofocus>
                                @foreach($jemaats as $jemaat)
                                <option value="{{ $jemaat->id }}">{{ $jemaat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Saksi 1</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" placeholder="Nama saksi 1" name="saksi_1">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Saksi 2</label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" placeholder="Nama saksi 2" name="saksi_2">
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
                        <a href="{{ route('pernikahan.index') }}">
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