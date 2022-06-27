@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('back-projects.index') }}">Projects</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Add Project</div>
        <div class="card-body">
            <form action="{{ route('back-projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="admin__form_inp" type="text" name="name" value="{{ old('name') }}" placeholder="Name">

                <div>
                    <label for="img" class="admin__form_inp admin__form_label">Click here to select image</label>
                    <input class="admin__form_file" id="img" type="file" name="img">
                </div>

                <input class="admin__form_inp" type="text" name="link" value="{{ old('link') }}" placeholder="Link">

                <button class="item__btn">Add</button>
            </form>

            @if ($errors->any())
                @foreach ($errors->all() as $e)
                    <p class="error">{{ $e }}</p>
                @endforeach
            @endif
        </div>
    </div>
@endsection
