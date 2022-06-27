@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('educations.index') }}">Educations</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Add Education</div>
        <div class="card-body">
            <form action="{{ route('educations.store') }}" method="POST">
                @csrf
                <input class="admin__form_inp" type="text" name="name" value="{{ old('name') }}" placeholder="Name">
                <input class="admin__form_inp" type="text" name="profession" value="{{ old('profession') }}" placeholder="Profession">
                <input class="admin__form_inp" type="text" name="date" value="{{ old('date') }}" placeholder="Date">

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
