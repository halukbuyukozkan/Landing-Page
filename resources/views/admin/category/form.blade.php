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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="categories">{{ __('Categories') }}</label>
                            <select class="form-control @error('categories') is-invalid @enderror" id="categories"
                                name="categories[]" multiple>
                                @foreach ($categories as $category)
                                    @if($category->categories)
                                    <option value="{{ $category->id }}" {{ $category->categories->contains($category) ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @else
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('categories')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
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