@php($title = $client->exists ? __('Edit Client') : __('New Client'))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <form method="post" encType="multipart/form-data"
        action="{{ $client->exists ? route('admin.client.update', $client) : route('admin.client.store') }}">
        @if ($client->exists)
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
                                value="{{ $client->title }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <input type="text" name="description" id="description" class="form-control"
                                value="{{ $client->description }}">
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="image">{{ __('İmage') }}</label>
                        <input id="image" type="file" class="form-control" name="image" value="{{ $client->image }}" autocomplete="image" multiple>

                        @if ($client->image)
                        <img src="{{ asset('public/client/' . $client->image) }}" alt="{{ $client->title }}"
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
