@include('layouts.header')

<h2>Редактировать пост {{ $post->title }}</h2>

<form action="{{ route('$posts.update' [$post]) }}" method="post">
    @csrf
    <label for="title">
        <input type="text" name="title" id="title" value="{{ $post->title }}">
    </label>

    <label for="content">
        <textarea name="content" id="content" cols="30" rows="10">
            {{ $post->content }}
        </textarea>
    </label>

    <label for="description">
        <textarea name="description" id="description" cols="30" rows="3">
            {{ $post->description }}
        </textarea>
    </label>

    <label for="is_published">
        <input
            type="checkbox"
            name="is_published"
            id="is_published">
            {{ $post->is_published ? 'checked' : '' }}
    </label>

    <button type="submit">Сохранить</button>
</form>

@include('layouts.footer')
