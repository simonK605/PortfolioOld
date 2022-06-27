@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('skills.index') }}">Back</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">All Skills</div>
        <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable="" style="width: 5%">
                                    <a href="#" class="dataTable-sorter">#id</a>
                                </th>
                                <th data-sortable="" style="width: 30%">
                                    <a href="#" class="dataTable-sorter">name</a>
                                </th>
                                <th data-sortable="" style="width: 30%">
                                    <a href="#" class="dataTable-sorter">created at</a>
                                </th>
                                <th data-sortable="" style="width: 30%">
                                    <a href="#" class="dataTable-sorter">deleted at</a>
                                </th>
                                <th data-sortable="" style="width: 5%">
                                    <a href="#" class="dataTable-sorter">panel</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->deleted_at }}</td>
                                    <td>
                                        <a href="{{ route('recycleBin.restore', ['table' => $tableName, 'id' => $item->id]) }}"
                                            class="btn btn-datatable btn-icon btn-transparent-dark me-2">
                                            <i class="fas fa-trash-restore"></i>
                                        </a>
                                        <a
                                            href="{{ route('recycleBin.forcedelete', ['table' => $tableName, 'id' => $item->id]) }}">
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination__panel mt-2">
                    {{ $items->links('vendor.pagination.bootstrap-4') }}

                    <div class="item__panel_cont">
                        <a class="item__panel_link" href="{{ route('recycleBin.restoreAll', ['table' => $tableName]) }}">
                            <button class="item__btn">Restore All</button>
                        </a>
                        <a class="item__panel_link" href="{{ route('recycleBin.deleteAll', ['table' => $tableName]) }}">
                            <button class="item__btn item__recycle_btn">Delete All</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
