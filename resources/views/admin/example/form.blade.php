@php($title = $example->exists ? __('Edit Example') : __('New Example'))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <form method="post" encType="multipart/form-data"
        action="{{ $example->exists ? route('admin.example.update', $example) : route('admin.example.store') }}">
        @if ($example->exists)
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
                                value="{{ $example->title }}">
                        </div>

                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="image">{{ __('İmage') }}</label>
                        <input id="image" type="file" class="form-control" name="image" value="{{ $example->image }}" autocomplete="image">

                        @if ($example->image)
                        <img src="{{ asset('storage/examples/' . $example->image) }}" alt="{{ $example->title }}"
                            class="mt-3" style="max-height: 100px">
                        @endif

                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea type="description" name="description" id="description" class="form-control"
                                >{{ $example->description }}</textarea>
                        </div>

                        @error('description')
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
