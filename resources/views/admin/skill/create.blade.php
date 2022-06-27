@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('skills.index') }}">Skills</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Add Skill</div>
        <div class="card-body">
            <form action="{{ route('skills.store') }}" method="POST">
                @csrf
                <input class="admin__form_inp" type="text" name="name" value="{{ old('name') }}" placeholder="Name">
                <input class="admin__form_inp" type="number" name="percent" value="{{ old('percent') }}"
                    placeholder="Percent">

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
