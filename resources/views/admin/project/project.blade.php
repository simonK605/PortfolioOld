@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('projects.index') }}">Projects</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">All Projects</div>
        <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable="" style="width: 5%">
                                    <a href="#" class="dataTable-sorter">#id</a>
                                </th>
                                <th data-sortable="" style="width: 35%">
                                    <a href="#" class="dataTable-sorter">name</a>
                                </th>
                                <th data-sortable="" style="width: 20%">
                                    <a href="#" class="dataTable-sorter">img</a>
                                </th>
                                <th data-sortable="" style="width: 35%">
                                    <a href="#" class="dataTable-sorter">link</a>
                                </th>
                                <th data-sortable="" style="width: 5%">
                                    <a href="#" class="dataTable-sorter">panel</a>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>
                                        <img width="100%" src="/storage/{{ $project->img }}" alt="{{ $project->name }}">
                                    </td>
                                    <td>{{ $project->link }}</td>
                                    <td>
                                        <form action="{{ route('projects.destroy', ['project' => $project]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('projects.edit', ['project' => $project]) }}"
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
                    {{ $projects->links('vendor.pagination.bootstrap-4') }}

                    <div class="item__panel_cont">
                        <a class="item__panel_link" href="{{ route('projects.create') }}">
                            <button class="item__btn">Add</button>
                        </a>
                        <a class="item__panel_link" href="{{ route('recycleBin', ['table' => 'projects']) }}">
                            <button class="item__btn item__recycle_btn">Recycle Bin</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
