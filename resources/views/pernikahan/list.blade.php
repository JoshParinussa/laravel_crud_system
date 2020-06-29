{{-- @extends('layouts.app') --}}
@extends('layouts.base_layouts.base')

@section('content')
<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-soft-icons"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                List Pernikahan
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    <a href="{{ route('pernikahan.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                        <i class="la la-plus"></i>
                        Pernikahan Baru
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <table class="table table-striped- table-hover table-checkable data-table">
            <thead>
                <tr>
                    <th>Suami</th>
                    <th>Istri</th>
                    <th>Tgl Pernikahan</th>
                    <th>Pendeta</th>
                    <th>Saksi 1</th>
                    <th>Saksi 2</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pernikahans as $pernikahan)
                    <tr>
                        <td>{{ $pernikahan->suami->name }}</td>
                        <td>{{ $pernikahan->istri->name }}</td>
                        <td>{{ $pernikahan->tgl_pernikahan }}</td>
                        <td>{{ $pernikahan->pendeta->name }}</td>
                        <td>{{ $pernikahan->saksi_1 }}</td>
                        <td>{{ $pernikahan->saksi_2 }}</td>
                        <td>
                            <form action="{{ route('pernikahan.destroy',$pernikahan->id) }}" method="POST">
                                {{-- @can('edit post') --}}
                                <a class="btn btn-primary" href="{{ route('pernikahan.edit',$pernikahan->id) }}">Edit</a>
                                {{-- @endcan --}}
                                {{-- @role('admin') --}}
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Delete</button>
                                {{-- @endrole --}}
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $pernikahans->links() !!}
    </div>
</div>
@endsection
