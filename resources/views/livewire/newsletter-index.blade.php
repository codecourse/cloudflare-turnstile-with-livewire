
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Newsletter') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form class="p-6 text-gray-900 space-y-6" wire:submit="submit">
                <div>
                    <x-text-input placeholder="e.g. alex@codecourse.com" wire:model="email" class="w-full" />

                    @error('email')
                        <div class="text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <div wire:ignore>
                        <x-turnstile
                            wire:model="turnstileResponse"
                            data-action="newsletter"
                            data-theme="light"
                        />
                    </div>

                    @error('turnstileResponse')
                        <div class="text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <x-primary-button>
                        Subscribe
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
