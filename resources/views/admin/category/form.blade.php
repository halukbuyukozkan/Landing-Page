@php($title = $category->exists ? __('Edit Category') : __('New Category'))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <form method="post" encType="multipart/form-data"
        action="{{ $category->exists ? route('admin.category.update', $category) : route('admin.category.store') }}">
        @if ($category->exists)
            @method('PUT')
        @endif

        @csrf

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">{{ __('name') }}</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $category->name }}">
                        </div>

                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category_id">{{ __('Categories') }}</label>
                            <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id"> 
                                <option value="">-</option>
                                @if($categories)
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                @else
                                    <option value="#">no categories</option>
                                @endif
                            </select>
                            @error('categories')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="image">{{ __('İmage') }}</label>
                        <input id="image" type="file" class="form-control" name="image" value="{{ $category->image }}" autocomplete="image">

                        @if ($category->image)
                        <img src="{{ asset('storage/categories/' . $category->image) }}" alt="{{ $category->title }}"
                            class="mt-3" style="max-height: 100px">
                        @endif

                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i>
                    {{ __('Save') }}
                </button>
            </div>
        </div>
    </form>
</x-app-layout>
