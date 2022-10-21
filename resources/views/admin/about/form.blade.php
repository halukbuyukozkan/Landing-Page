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
                            <label for="description">{{ __('Home Page English Description') }}</label>
                            <textarea type="text" value="{{ $about->description2 }}" class="form-control" name="description2" id="description" rows="3"></textarea>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">{{ __('Home Page Turkhis Description') }}</label>
                            <textarea type="text" value="{{ $about->descriptiontr2 }}" class="form-control" name="descriptiontr2" id="description" rows="3"></textarea>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">{{ __('English Description') }}</label>
                            <textarea type="text" class="form-control" name="description[]" id="description" rows="3"></textarea>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">{{ __('Turkhis Description') }}</label>
                            <textarea type="text" class="form-control" name="descriptiontr[]" id="description" rows="3"></textarea>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="text-center my-2" id="test">
                    <button type="button" class="btn btn-primary" id="add_btn">Paragraf Ekle<i class="fas fa-plus ml-2"></i></i></button>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#add_btn').on('click',function(){
                var html='';
                html +='<div class="row">'
                html +='<div class="col-md-6">';
                html +='<div class="form-group">';
                html +='<label for="description">{{ __('English Description') }}</label>';
                html +='<textarea type="text" class="form-control" name="description[]" id="description" rows="3"></textarea>';
                html +='</div>';
                html +='</div>';
                
                
                html +='<div class="col-md-6">';
                html +='<div class="form-group">';
                html +='<label for="description">{{ __('Turkhis Description') }}</label>';
                html +='<textarea type="text" class="form-control" name="descriptiontr[]" id="description" rows="3"></textarea>';
                html +='</div>';
                html +='</div>';
                html +='</div>';
    
                $('#test').append(html);
            })
        })
    </script>

</x-app-layout>
