@include('PortfolioBulma.partials.meta')
@include('PortfolioBulma.partials.header')

<div class="container">
  <div class="block">
    @yield('content')
  </div>
</div>


{{-- <main class="main-content">
    @yield('content')
</main> --}}

@include('PortfolioBulma.partials.footer')
