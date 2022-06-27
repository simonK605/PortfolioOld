@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('educations.index') }}">Educations</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">All Educations</div>
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
                                    <a href="#" class="dataTable-sorter">profession</a>
                                </th>
                                <th data-sortable="" style="width: 30%">
                                    <a href="#" class="dataTable-sorter">date</a>
                                </th>
                                <th data-sortable="" style="width: 5%">
                                    <a href="#" class="dataTable-sorter">panel</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($educations as $education)
                                <tr>
                                    <td>{{ $education->id }}</td>
                                    <td>{{ $education->name }}</td>
                                    <td>{{ $education->profession }}</td>
                                    <td>{{ $education->date }}</td>
                                    <td>
                                        <form action="{{ route('educations.destroy', ['education' => $education]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('educations.edit', ['education' => $education]) }}"
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
                    {{ $educations->links('vendor.pagination.bootstrap-4') }}

                    <div class="item__panel_cont">
                        <a class="item__panel_link" href="{{ route('educations.create') }}">
                            <button class="item__btn">Add</button>
                        </a>
                        <a class="item__panel_link" href="{{ route('recycleBin', ['table' => 'educations']) }}">
                            <button class="item__btn item__recycle_btn">Recycle Bin</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
