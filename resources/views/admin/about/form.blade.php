@php($title = $about->exists ? __('Edit About') : __('New About'))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <form method="post" encType="multipart/form-data"
        action="{{ $about->exists ? route('admin.about.update', $about) : route('admin.about.store') }}">
        @if ($about->exists)
            @method('PUT')
        @endif

        @csrf

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">{{ __('English Description') }}</label>
                            <textarea type="text" value="{{ $about->description }}" class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">{{ __('Turkhis Description') }}</label>
                            <textarea type="text" value="{{ $about->descriptiontr }}" class="form-control" name="descriptiontr" id="description" rows="3"></textarea>
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
