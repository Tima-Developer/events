<div class="mb-3">
    <label class="form-label">Название</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $event->title ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Описание</label>
    <textarea name="description" rows="5" class="form-control" required>{{ old('description', $event->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Адрес</label>
    <input type="text" name="address" class="form-control" value="{{ old('address', $event->address ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Фото</label>
    <input type="file" name="image" class="form-control" {{ empty($event) ? 'required' : '' }}>
    @if(!empty($event->image))
        <img src="{{ asset('storage/'.$event->image) }}" width="120" class="mt-2 rounded">
    @endif
</div>

<div class="mb-3">
    <label class="form-label">Контакты</label>
    <textarea name="contacts" rows="3" class="form-control" required>{{ old('contacts', $event->contacts ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Оригинальная ссылка</label>
    <input type="url" name="original_link" class="form-control" value="{{ old('original_link', $event->original_link ?? '') }}">
</div>
