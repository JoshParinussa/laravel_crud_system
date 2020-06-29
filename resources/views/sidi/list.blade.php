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
                List Sidi
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    <a href="{{ route('sidi.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                        <i class="la la-plus"></i>
                        Jadwal Sidi Baru
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <table class="table table-striped- table-hover table-checkable data-table">
            <thead>
                <tr>
                    <th>Tanggal Sidi</th>
                    <th>Peserta</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sidis as $sidi)
                    <tr>
                        <td>{{ $sidi->tgl_sidi }}</td>
                        <td>{{ $sidi->jemaats->name }}</td>
                        <td>{{ $sidi->status }}</td>
                        <td>
                            <form action="{{ route('sidi.destroy',$sidi->id) }}" method="POST">
                                {{-- @can('edit post') --}}
                                <a class="btn btn-primary" href="{{ route('sidi.edit',$sidi->id) }}">Edit</a>
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
        {!! $sidis->links() !!}
    </div>
</div>
@endsection
