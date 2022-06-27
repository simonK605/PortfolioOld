@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('certificates.index') }}">Certificates</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">All Certificates</div>
        <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable="" style="width: 5%">
                                    <a href="#" class="dataTable-sorter">#id</a>
                                </th>
                                <th data-sortable="" style="width: 45%">
                                    <a href="#" class="dataTable-sorter">name</a>
                                </th>
                                <th data-sortable="" style="width: 45%">
                                    <a href="#" class="dataTable-sorter">img</a>
                                </th>
                                <th data-sortable="" style="width: 5%">
                                    <a href="#" class="dataTable-sorter">panel</a>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($certificates as $certificate)
                                <tr>
                                    <td>{{ $certificate->id }}</td>
                                    <td>{{ $certificate->name }}</td>
                                    <td>
                                        <img width="50%" src="/storage/{{ $certificate->img }}"
                                            alt="{{ $certificate->name }}">
                                    </td>
                                    <td>
                                        <form
                                            action="{{ route('certificates.destroy', ['certificate' => $certificate]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('certificates.edit', ['certificate' => $certificate]) }}"
                                                class="btn btn-datatable btn-icon btn-transparent-dark me-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination__panel mt-2">
                    {{ $certificates->links('vendor.pagination.bootstrap-4') }}

                    <div class="item__panel_cont">
                        <a class="item__panel_link" href="{{ route('certificates.create') }}">
                            <button class="item__btn">Add</button>
                        </a>
                        <a class="item__panel_link" href="{{ route('recycleBin', ['table' => 'certificates']) }}">
                            <button class="item__btn item__recycle_btn">Recycle Bin</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
