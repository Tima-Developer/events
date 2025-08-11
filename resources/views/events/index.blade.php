@extends('layouts.app')

@section('content')
<h1 class="mb-4">Список событий</h1>

@if($events->count())
<div class="row g-4">
    @foreach($events as $event)
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <img src="{{ asset('storage/'.$event->image) }}" class="card-img-top" alt="{{ $event->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-text text-muted">{{ Str::limit($event->description, 80) }}</p>
                <p class="text-secondary mb-1"><i class="bi bi-geo-alt"></i> {{ $event->address }}</p>
                <a href="{{ route('events.show', $event) }}" class="btn btn-primary btn-sm">Подробнее</a>
                <a href="{{ route('events.edit', $event) }}" class="btn btn-warning btn-sm">Редактировать</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="mt-4">
    {{ $events->links() }}
</div>
@else
<div class="alert alert-info">Пока нет событий.</div>
@endif
@endsection
