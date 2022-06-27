@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('educations.index') }}">Educations</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Update Education</div>
        <div class="card-body">
            <form action="{{ route('educations.update', ['education' => $education]) }}" method="POST">
                @csrf
                @method('PUT')
                <input class="admin__form_inp" type="text" name="name" value="{{ $education->name }}" placeholder="Name">
                <input class="admin__form_inp" type="text" name="profession" value="{{ $education->profession }}" placeholder="Profession">
                <input class="admin__form_inp" type="text" name="date" value="{{ $education->date }}" placeholder="Date">

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
