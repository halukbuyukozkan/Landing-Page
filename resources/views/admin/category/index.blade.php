<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i>
                {{ __('Create Category') }}
            </a>
        </h2>
    </x-slot>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('Image') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Sub Categories') }}</th>
                        <th class="text-right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td><img src="{{ asset('images/categories/' .$category->image) }}" style="width: 100px"></td>
                            <td>
                                <label>
                                    {{ $category->name }}
                                </label>
                            </td>
                            <td>
                                <div class="col-8">
                                    @if($category->categories)
                                    @foreach ($category->categories as $category)
                                        {{ $category->name }}
                                    @endforeach
                                    @endif
                                </div>
                            </td>
                            <td class="text-right col-3">
                                <a href="{{ route('admin.category.edit', $category) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                    {{ __('Edit') }}
                                </a>
                                <form action="{{ route('admin.category.destroy', $category) }}" method="POST"
                                    class="d-inline-block" onsubmit="return confirm('{{ __('Are you sure?') }}')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                {{ __('No categories') }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $categories->links() }}
        </div>
    </div>
</x-app-layout>
