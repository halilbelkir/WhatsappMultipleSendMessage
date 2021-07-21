<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.foundation.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script>
        $(function() {
            $('#data-tables').DataTable({
                processing: true,
                serverSide: true,
                ajax : '@yield('datatables.ajax.url')',
                columns : @yield('datatables.columns'),
                language:{"url":"//cdn.datatables.net/plug-ins/1.10.12/i18n/Turkish.json"}
            });
        });
    </script>
    @yield('script')
    @if (session('message'))
        @if(session('message')[2] == 'info')
            <script>
                toastr.info('{{ session('message')[1] }}','{{ session('message')[0] }}');
            </script>
        @endif
        @if(session('message')[2] == 'success')
            <script>
                toastr.success('{{ session('message')[1] }}','{{ session('message')[0] }}');
            </script>
        @endif
        @if(session('message')[2] == 'warning')
            <script>
                toastr.warning('{{ session('message')[1] }}','{{ session('message')[0] }}');
            </script>
        @endif
        @if(session('message')[2] == 'error')
            <script>
                toastr.error('{{ session('message')[1] }}','{{ session('message')[0] }}');
            </script>
        @endif
    @endif
</html>
