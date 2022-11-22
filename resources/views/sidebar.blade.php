<div class="col-md-4">
    <div class="card">
        <div class="card-header">{{ __('Articals') }}</div>
        <ul class="nav d-block nav-tabs nav-stacked">
            <li class="nav-item">
                <a href="{{ route('articles.index') }}" class="nav-link {{ (request()->is('articles')) ? 'active border-primary' : '' }}">List</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('articles.create') }}" class="nav-link {{ (request()->is('articles/create')) ? 'active border-primary' : '' }}">Create</a>
            </li>

        </ul>
    </div>
</div>
