@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('experiences.index') }}">Experiences</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Update Experience</div>
        <div class="card-body">
            <form action="{{ route('experiences.update', ['experience' => $experience]) }}" method="POST">
                @csrf
                @method('PUT')
                <input class="admin__form_inp" type="text" name="name" value="{{ $experience->name }}" placeholder="Name">
                <input class="admin__form_inp" type="text" name="profession" value="{{ $experience->profession }}" placeholder="Profession">
                <input class="admin__form_inp" type="text" name="date" value="{{ $experience->date }}" placeholder="Date">

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
