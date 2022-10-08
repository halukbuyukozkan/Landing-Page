<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client') }}
            <a href="{{ route('admin.client.create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i>
                {{ __('Create Client') }}
            </a>
        </h2>
    </x-slot>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('İmage') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Description') }}</th>
                        <th class="text-right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clients as $client)
                        <tr>
                            <td><image src="{{ asset('client/' .$client->image) }}" style="width: 100px"></td>
                            <td>
                                <label>
                                    {{ $client->name }}
                                </label>
                            </td>
                            <td>
                                <label>
                                    {{ $client->description }}
                                </label>
                            </td>
                            <td class="text-right col-3">
                                <a href="{{ route('admin.client.edit', $client) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                    {{ __('Edit') }}
                                </a>
                                <form action="{{ route('admin.client.destroy', $client) }}" method="POST"
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
                                {{ __('No Products') }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $clients->links() }}
        </div>
    </div>
</x-app-layout>
