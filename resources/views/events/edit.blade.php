@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="mb-4">Добавить событие</h2>
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('events.form')
            <button class="btn btn-success">Сохранить</button>
            <a href="{{ route('events.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
</div>
@endsection
