<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ayarlar') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-6">

                <form action="{{route('settings.update',$settings->id)}}" method="post">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
                        <div>
                            <x-jet-label for="telefon" value="Telefon" />
                            @if(!empty(old('telefon')))
                                <x-jet-input value="{{old('telefon')}}" id="telefon" name="telefon" type="text"  class="mt-1 block" wire:model.defer="settings.telefon" autocomplete="telefon" placeholder="Telefon" />
                            @else
                                <x-jet-input value="{{$settings->telefon}}" id="telefon" name="telefon" type="text"  class="mt-1 block" wire:model.defer="settings.telefon" autocomplete="telefon" placeholder="Telefon" />
                            @endif
                            <x-jet-input-error for="telefon" class="mt-2" />
                        </div>

                        <div>
                            <x-jet-label for="fax" value="Faks" />
                            @if(!empty(old('fax')))
                                <x-jet-input value="{{old('fax')}}" id="fax" name="fax" type="text"  class="mt-1 block" wire:model.defer="settings.fax" autocomplete="fax" placeholder="Faks" />
                            @else
                                <x-jet-input value="{{$settings->fax}}" id="fax" name="fax" type="text"  class="mt-1 block" wire:model.defer="settings.fax" autocomplete="fax" placeholder="Faks" />
                            @endif
                            <x-jet-input-error for="fax" class="mt-2" />
                        </div>

                        <div>
                            <x-jet-label for="email" value="E-Mail" />
                            @if(!empty(old('email')))
                                <x-jet-input id="email" type="email" name="email" value="{{old('email')}}" class="mt-1 block" wire:model.defer="settings.email" autocomplete="email" placeholder="E-Mail" />
                            @else
                                <x-jet-input id="email" type="email" name="email" value="{{$settings->email}}" class="mt-1 block" wire:model.defer="settings.email" autocomplete="email" placeholder="E-Mail" />
                            @endif
                            <x-jet-input-error for="email" class="mt-2" />
                        </div>

                        <div>
                            <x-jet-label for="facebook" value="Facebook" />
                            @if(!empty(old('facebook')))
                                <x-jet-input value="{{old('facebook')}}" id="facebook" name="facebook" type="url"  class="mt-1 block" wire:model.defer="settings.facebook" autocomplete="facebook" placeholder="Facebook" />
                            @else
                                <x-jet-input value="{{$settings->facebook}}" id="facebook" name="facebook" type="url"  class="mt-1 block" wire:model.defer="settings.facebook" autocomplete="facebook" placeholder="Facebook" />
                            @endif
                            <x-jet-input-error for="facebook" class="mt-2" />
                        </div>

                        <div>
                            <x-jet-label for="instagram" value="Instagram" />
                            @if(!empty(old('facebook')))
                                <x-jet-input value="{{old('instagram')}}" id="instagram" name="instagram" type="url"  class="mt-1 block" wire:model.defer="settings.instagram" autocomplete="instagram" placeholder="Instagram" />
                            @else
                                <x-jet-input value="{{$settings->instagram}}" id="instagram" name="instagram" type="url"  class="mt-1 block" wire:model.defer="settings.instagram" autocomplete="instagram" placeholder="Instagram" />
                            @endif
                            <x-jet-input-error for="instagram" class="mt-2" />
                        </div>

                        <div>
                            <x-jet-label for="adres" value="Adres" />
                            <textarea id="adres" name="adres" class="mt-1 mb-1 block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" wire:model.defer="settings.adres" autocomplete="adres" placeholder="Adres" rows="2">@if(!empty(old('adres'))){{old('adres')}} @else{{$settings->adres}}@endif</textarea>
                            <x-jet-input-error for="adres" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-jet-label for="hakkimizda" value="Hakkımızda" />
                        <textarea id="hakkimizda" name="hakkimizda" class="mt-1 mb-1 block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" wire:model.defer="settings.hakkimizda" autocomplete="hakkimizda" placeholder="Hakkımızda" rows="2">@if(!empty(old('hakkimizda'))){{old('hakkimizda')}} @else{{$settings->hakkimizda}}@endif</textarea>
                        <x-jet-input-error for="hakkimizda" class="mt-2" />
                    </div>

                    <x-jet-button class="float-right">
                        {{ __('Kaydet') }}
                    </x-jet-button>
                </form>
            </div>
        </div>
    </div>
    @section('script')
        <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('hakkimizda', {
                height: 200,
                // By default, some basic text styles buttons are removed in the Standard preset.
                // The code below resets the default config.removeButtons setting.
                removeButtons: '',
                // Custom style definition for the Bold feature.
                coreStyles_bold: {
                    element: 'b',
                    overrides: 'strong'
                },
                // Custom style definition for the Italic feature.
                coreStyles_italic: {
                    element: 'i',
                    overrides: 'em'
                }
            });
        </script>
    @endsection
</x-app-layout>

