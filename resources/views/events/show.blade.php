@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <img src="{{ asset('storage/'.$event->image) }}" class="card-img-top" alt="{{ $event->title }}">
    <div class="card-body">
        <h2 class="card-title mb-3">{{ $event->title }}</h2>
        <p class="text-muted mb-2"><strong>Адрес:</strong> {{ $event->address }}</p>
        <p>{{ $event->description }}</p>
        <hr>
        <h5>Контакты:</h5>
        <p>{{ $event->contacts }}</p>
        @if($event->original_link)
            <a href="{{ $event->original_link }}" target="_blank" class="btn btn-outline-primary mt-3">Оригинальная ссылка</a>
        @endif
        <div class="mt-4">
            <a href="{{ route('events.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
</div>
@endsection
