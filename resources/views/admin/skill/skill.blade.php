@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('skills.index') }}">Skills</a>
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
                                <th data-sortable="" style="width: 45%">
                                    <a href="#" class="dataTable-sorter">name</a>
                                </th>
                                <th data-sortable="" style="width: 45%">
                                    <a href="#" class="dataTable-sorter">percent</a>
                                </th>
                                <th data-sortable="" style="width: 5%">
                                    <a href="#" class="dataTable-sorter">panel</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skill)
                                <tr>
                                    <td>{{ $skill->id }}</td>
                                    <td>{{ $skill->name }}</td>
                                    <td>{{ $skill->percent }}</td>
                                    <td>
                                        <form action="{{ route('skills.destroy', ['skill' => $skill]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('skills.edit', ['skill' => $skill]) }}"
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
                    {{ $skills->links('vendor.pagination.bootstrap-4') }}

                    <div class="item__panel_cont">
                        <a class="item__panel_link" href="{{ route('skills.create') }}">
                            <button class="item__btn">Add</button>
                        </a>
                        <a class="item__panel_link" href="{{ route('recycleBin', ['table' => 'skills']) }}">
                            <button class="item__btn item__recycle_btn">Recycle Bin</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
