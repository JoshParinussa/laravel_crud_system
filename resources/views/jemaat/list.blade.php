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
                List Jemaat
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    <a href="{{ route('jemaats.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                        <i class="la la-plus"></i>
                        Jemaat Baru
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <table class="table table-striped- table-hover table-checkable data-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nama Baptis</th>
                    <th>No Telp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jemaats as $jemaat)
                    <tr>
                        <td>{{ $jemaat->name }}</td>
                        <td>{{ $jemaat->email }}</td>
                        <td>{{ $jemaat->nama_baptis }}</td>
                        <td>{{ $jemaat->no_tlp }}</td>
                        <td>
                            <form action="{{ route('jemaats.destroy',$jemaat->id) }}" method="POST">
                                {{-- @can('edit post') --}}
                                <a class="btn btn-primary" href="{{ route('jemaats.edit',$jemaat->id) }}">Edit</a>
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
        {!! $jemaats->links() !!}
    </div>
</div>
@endsection
