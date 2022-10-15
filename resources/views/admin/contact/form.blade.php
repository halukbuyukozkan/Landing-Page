@php($title = $contact->exists ? __('Edit contact') : __('New contact'))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <form method="post" encType="multipart/form-data"
        action="{{ $contact->exists ? route('admin.contact.update', $contact) : route('admin.contact.store') }}">
        @if ($contact->exists)
            @method('PUT')
        @endif

        @csrf

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">{{ __('Address') }}</label>
                            <input type="text" name="address" id="address" class="form-control"
                                value="{{ $contact->address }}">
                        </div>
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ $contact->email }}">
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">{{ __('Phone') }}</label>
                            <input type="phone" name="phone" id="phone" class="form-control"
                                value="{{ $contact->phone }}">
                        </div>
                        @error('phone')
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
