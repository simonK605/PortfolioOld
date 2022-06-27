@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('certificates.index') }}">Certificate</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Update Certificate</div>
        <div class="card-body">
            <form action="{{ route('certificates.update', ['certificate' => $certificate]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input class="admin__form_inp" type="text" name="name" value="{{ $certificate->name }}" placeholder="Name">

                <div>
                    <label for="img" class="admin__form_inp admin__form_label">Click here to select image</label>
                    <input class="admin__form_file" id="img" type="file" name="img">
                </div>
                <div>
                    <label for="link" class="admin__form_inp admin__form_label">Click here to select certificate</label>
                    <input class="admin__form_file" id="link" type="file" name="link">
                </div>

                <input type="hidden" name="imgHid" value="{{ $certificate->img }}">
                <input type="hidden" name="linkHid" value="{{ $certificate->link }}">
                <button class="item__btn">Update</button>
            </form>
            
            @if ($errors->any())
                @foreach ($errors->all() as $e)
                    <p class="error">{{ $e }}</p>
                @endforeach
            @endif
        </div>
    </div>
@endsection
