@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('sidebar')
            <div class="col-md-8 ">
                <a href="{{ route('articles.create') }}" type="button" class="btn btn-outline-success">Create</a>
                <table class="table table table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">{{ __('Title') }}</th>
                            <th scope="col">{{ __('Desription') }}</th>
                            <th scope="col">{{ __('Image') }}</th>
                            <th scope="col">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                        @forelse ($articles as $article)
                            <tr>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->description }}</td>
                                <td><img width="75" src="{{ url('images/' . $article->image) }}" alt=""
                                        srcset=""></td>
                                <td>
                                    <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('articles.edit',$article->id) }}">{{ __('Edit') }}</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h1>{{ __('No articles yet !') }}</h1>
                        @endforelse
                    </tbody>
                </table>
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
