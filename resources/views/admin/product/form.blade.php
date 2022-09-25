@php($title = $product->exists ? __('Edit Product') : __('New Product'))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <form method="post" encType="multipart/form-data"
        action="{{ $product->exists ? route('admin.product.update', $product) : route('admin.product.store') }}">
        @if ($product->exists)
            @method('PUT')
        @endif

        @csrf

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ $product->title }}">
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <input type="text" name="description" id="description" class="form-control"
                                value="{{ $product->description }}">
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="order">{{ __('Order') }}</label>
                            <input type="number" name="order" id="order" class="form-control"
                                value="{{ $product->order }}">
                        </div>
                        @error('order')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category_id">{{ __('Categories') }}</label>
                            <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id"> 
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="properties">{{ __('Properties') }}</label>
                            <select class="form-control @error('properties') is-invalid @enderror" id="properties"
                                name="properties[]" multiple>
                                @foreach ($properties as $property)
                                    <option value="{{ $property->id }}">
                                        {{ $property->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('properties')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="image">{{ __('İmage') }}</label>
                        <input id="image" type="file" class="form-control" name="image" value="{{ $product->image }}" autocomplete="image">

                        @if ($product->image)
                        <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->title }}"
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
