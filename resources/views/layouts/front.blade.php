<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('components.admin.links')
</head>

<body class="font-sans antialiased">
  <div id="layout-wrapper">

    {{-- Main Content Beginning --}}
    {{ isset($slot) ? $slot : '' }}
    @yield('content')
    {{-- Main Content End --}}

  </div>
  @include('components.admin.scripts')
  @stack('scripts')
</body>

</html>
