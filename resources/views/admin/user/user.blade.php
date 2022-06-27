@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('users.index') }}">Users</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">All Users</div>
        <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable="" style="width: 5%">
                                    <a href="#" class="dataTable-sorter">#id</a>
                                </th>
                                <th data-sortable="" style="width: 15%">
                                    <a href="#" class="dataTable-sorter">name</a>
                                </th>
                                <th data-sortable="" style="width: 15%">
                                    <a href="#" class="dataTable-sorter">last name</a>
                                </th>
                                <th data-sortable="" style="width: 30%">
                                    <a href="#" class="dataTable-sorter">email</a>
                                </th>
                                <th data-sortable="" style="width: 15%">
                                    <a href="#" class="dataTable-sorter">login</a>
                                </th>
                                <th data-sortable="" style="width: 15%">
                                    <a href="#" class="dataTable-sorter">role</a>
                                </th>
                                <th data-sortable="" style="width: 5%">
                                    <a href="#" class="dataTable-sorter">panel</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->login }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <form action="{{ route('users.destroy', ['user' => $user]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('users.edit', ['user' => $user]) }}"
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
                    {{ $users->links('vendor.pagination.bootstrap-4') }}

                    <div class="item__panel_cont">
                        <a class="item__panel_link" href="{{ route('recycleBin', ['table' => 'users']) }}">
                            <button class="item__btn item__recycle_btn">Recycle Bin</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
