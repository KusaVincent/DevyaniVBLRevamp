<x-filament-panels::page class="!m-0 !p-0">
    <div class="flex min-h-[calc(100vh-4rem)] w-full items-center justify-center px-4 py-8 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">
            <div
                class="relative overflow-hidden rounded-2xl bg-white/80 p-8 shadow-2xl shadow-gray-950/5 ring-1 ring-gray-950/5 backdrop-blur-xl dark:bg-gray-900/80 dark:ring-white/10 dark:shadow-none sm:p-10"
            >
                <div class="flex flex-col items-center text-center">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white">
                        Change Your Password
                    </h2>

                    <p class="mt-2 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                        For security reasons, you must set a new password before continuing to your account.
                    </p>
                </div>

                <form wire:submit="submit" class="mt-8 space-y-6 p-10">
                    {{ $this->form }}

                    <div>
                        <x-filament::button
                            type="submit"
                            size="lg"
                            class="w-full shadow-md transition-transform active:scale-[0.99] m-3"
                        >
                            Update Password
                        </x-filament::button>
                    </div>
                </form>

                <div class="mt-6 border-t border-gray-100 pt-6 dark:border-gray-800">
                    <p class="text-center text-xs leading-5 text-gray-400 dark:text-gray-500">
                        Ensure your new password complies with the complexity guidelines listed above.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>
