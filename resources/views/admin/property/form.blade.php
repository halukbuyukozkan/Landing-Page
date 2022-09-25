@php($title = $property->exists ? __('Edit Property') : __('New Property'))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <form method="post" encType="multipart/form-data"
        action="{{ $property->exists ? route('admin.property.update', $property) : route('admin.property.store') }}">
        @if ($property->exists)
            @method('PUT')
        @endif

        @csrf

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $property->name }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="type">{{ __('Types') }}</label>
                            <select class="form-control @error('type') is-invalid @enderror" id="type" name="type"> 
                                @foreach ($types as $type)
                                    <option value="{{ $type->value }}">
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('types')
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
