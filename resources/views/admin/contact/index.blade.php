<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
            <a href="{{ route('admin.contact.create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i>
                {{ __('Create Contact') }}
            </a>
        </h2>
    </x-slot>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('Address') }}</th>
                        <th>{{ __('Phone') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th class="text-right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                        <tr>
                            <td>
                                <label>
                                    {{ $contact->address }}
                                </label>
                            </td>
                            <td>
                                <label>
                                    {{ $contact->phone }}
                                </label>
                            </td>
                            <td>
                                <label>
                                    {{ $contact->email }}
                                </label>
                            </td>
                            <td class="text-right col-3">
                                <a href="{{ route('admin.contact.edit', $contact) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                    {{ __('Edit') }}
                                </a>
                                <form action="{{ route('admin.contact.destroy', $contact) }}" method="POST"
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
                                {{ __('No Contacts') }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $contacts->links() }}
        </div>
    </div>
</x-app-layout>
