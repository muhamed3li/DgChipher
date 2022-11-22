@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('sidebar')
            <div class="col-md-8">
                <div class="card p-5">
                    <form action="{{ !empty($article) ? route('articles.update', $article->id) : route('articles.store') }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @if (!empty($article))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input type="text" name="title" id="title" value="{{ !empty($article) ? $article->title : '' }}" class="form-control"
                                placeholder="{{ __('Enter Title') }}" aria-describedby="helpId">
                            @error('title')
                                <small id="helpId" class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group pt-3">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea class="form-control" name="description" id="description"  rows="3">{{ !empty($article) ? $article->description : '' }}</textarea>
                            @error('description')
                                <small id="helpId" class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group pt-3">
                            <label for="image">{{ __('image') }}</label>
                            <input type="file" value="{{ !empty($article) ? $article->image : '' }}" name="image" id="image" class="form-control"
                                aria-describedby="helpId">
                                @if (!empty($article))
                                    <img width="200" src="{{ url('images/'.$article->image) }}" alt="" srcset="">
                                @endif
                            @error('image')
                                <small id="helpId" class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
