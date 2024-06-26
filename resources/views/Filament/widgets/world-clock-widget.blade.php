<x-filament-widgets::widget class="fi-filament-info-widget">
    <x-filament::section>
        <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
            @if($shouldShowTitle)
                <div class="mb-4">
                    <h2 class="flex items-center text-lg font-semibold text-gray-900 dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" style="margin-right: 8px;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                        </svg>

                        {{ is_null($title) ? __('filament-world-clock::default.title') : $title }}
                    </h2>
                    <p class="mt-1 text-xs text-gray-600 dark:text-gray-400">
                        {{ is_null($description) ? __('filament-world-clock::default.description') : $description }}
                    </p>
                </div>
            @endif

            <div class="grid grid-cols-1 gap-2 md:grid-cols-{{$quantityPerRow}}"> <!-- md:grid-cols-2 -->
                @foreach ($cities as $city)
                    <div class="flex items-center justify-between bg-gray-100 dark:bg-gray-700 p-2 rounded-md shadow-sm">
                        <span class="text-sm font-medium text-gray-800 dark:text-white">{{ $city['flag'] }} {{ $city['name'] }}</span>
                        <span class="flex items-center text-xs text-gray-500 dark:text-gray-300">
                            {{ $city['time'] }}
                            @if($city['night'])
                                <svg style="margin-left: 8px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="ml-1" width="16" height="16" fill="#BEBEBE">
                                    <path d="M223.5 32C100 32 0 132.3 0 256s100 224 223.5 224c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"/>
                                </svg>
                            @else
                                <svg style="margin-left: 8px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="ml-1" width="16" height="16" fill="#FFD700">
                                    <path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/>
                                </svg>
                            @endif
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
