<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Property') }}
            <a href="{{ route('admin.property.create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i>
                {{ __('Create Property') }}
            </a>
        </h2>
    </x-slot>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Type') }}</th>
                        <th class="text-right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($properties as $property)
                        <tr>
                            <td>
                                <label>
                                    {{ $property->name }}
                                </label>
                            </td>
                            <td>
                                <label>
                                    {{ $property->type->name }}
                                </label>
                            </td>
                            <td class="text-right col-3">
                                <a href="{{ route('admin.property.edit', $property) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                    {{ __('Edit') }}
                                </a>
                                <form action="{{ route('admin.property.destroy', $property) }}" method="POST"
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
                                {{ __('No Properties') }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $properties->links() }}
        </div>
    </div>
</x-app-layout>
