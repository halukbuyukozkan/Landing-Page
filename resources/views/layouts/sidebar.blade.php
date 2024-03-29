<x-side-link href="{{ route('dashboard') }}" icon="fas fa-home" :active="request()->routeIs('dashboard')">
    {{ __('Dashboard') }}
</x-side-link>

@if (auth()->user()->hasAnyPermission(['management.user', 'management.role']))
    <x-side-accordion :title="__('System')" icon="fas fa-cogs" :active="request()->routeIs(['admin.user.*','admin.role.*','admin.permission.*'])">
        @if (auth()->user()->hasPermissionTo('management.user'))
            <x-side-link href="{{ route('admin.user.index') }}" icon="fas fa-users" :active="request()->routeIs('admin.user.*')">
                {{ __('Users') }}
            </x-side-link>
        @endif
        @if (auth()->user()->hasPermissionTo('management.role'))
            <x-side-link href="{{ route('admin.role.index') }}" icon="fas fa-users-cog" :active="request()->routeIs('admin.role.*')">
                {{ __('Roles') }}
            </x-side-link>
            <x-side-link href="{{ route('admin.permission.index') }}" icon="fas fa-list" :active="request()->routeIs('admin.permission.*')">
                {{ __('Permissions') }}
            </x-side-link>
        @endif
    </x-side-accordion>
        <x-side-link href="{{ route('admin.slider.index') }}" icon="fas fa-list" :active="request()->routeIs('admin.slider.*')">
            {{ __('Sliders') }}
        </x-side-link>
        <x-side-link href="{{ route('admin.about.index') }}" icon="fas fa-list" :active="request()->routeIs('admin.about.*')">
            {{ __('About') }}
        </x-side-link>
        <x-side-link href="{{ route('admin.contact.index') }}" icon="fas fa-list" :active="request()->routeIs('admin.contact.*')">
            {{ __('Contact') }}
        </x-side-link>
        <x-side-link href="{{ route('admin.example.index') }}" icon="fas fa-list" :active="request()->routeIs('admin.example.*')">
            {{ __('Examples') }}
        </x-side-link>
        <x-side-link href="{{ route('admin.category.index') }}" icon="fas fa-list" :active="request()->routeIs('admin.category.*')">
            {{ __('Categories') }}
        </x-side-link>
        <x-side-link href="{{ route('admin.product.index') }}" icon="fas fa-list" :active="request()->routeIs('admin.product.*')">
            {{ __('Products') }}
        </x-side-link>
        <x-side-link href="{{ route('admin.property.index') }}" icon="fas fa-list" :active="request()->routeIs('admin.property.*')">
            {{ __('Properties') }}
        </x-side-link>
        <x-side-link href="{{ route('admin.client.index') }}" icon="fas fa-list" :active="request()->routeIs('admin.client.*')">
            {{ __('Clients') }}
        </x-side-link>
@endif
