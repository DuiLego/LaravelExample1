@extends('dashboard.master')

@section('content')
    <form action="{{ route('post.store') }}" method="post">

        @csrf

        <label for="">Titulo</label>
        <input type="text" name="title" id="" />

        <label for="">Slug</label>
        <input type="text" name="slug" id="" />
        
        <label for="">Contenido</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>

        <label for="">Categoria</label>
        <select name="category_id" id="">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>

        <label for="">Descripción</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>

        <label for="">Publicado</label>
        <select name="posted" id="">
            <option value="yes">Si</option>
            <option value="yes">No</option>
        </select>

        <button type="submit">Guardar</button>
    </form>
@endsection