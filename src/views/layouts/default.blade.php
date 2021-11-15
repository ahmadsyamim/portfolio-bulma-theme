@include('PortfolioBulma.partials.meta')
@include('PortfolioBulma.partials.header')

<!-- About -->
  <section class="section" id="about">
    <!-- Title -->
    <div class="section-heading">
      <h3 class="title is-2">About Me</h3>
      {{-- <h4 class="subtitle is-5">Jack of all trades, master of "some"</h4> --}}
      <div class="container">
        {!! Theme::getSetting('about-me') !!}
      </div>
    </div>

    <div class="columns has-same-height is-gapless">
      <div class="column">
        <!-- Profile -->
        <div class="card">
          <div class="card-content">
            <h3 class="title is-4">Profile</h3>

            <div class="content">
              <table class="table-profile">
                <tr>
                  <th colspan="1"></th>
                  <th colspan="2"></th>
                </tr>
                <tr>
                  <td>Address:</td>
                  <td>{{ Theme::getSetting('profile.address') }}</td>
                </tr>
                <tr>
                  <td>Phone:</td>
                  <td>{{ Theme::getSetting('profile.phone') }}</td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td>{{ Theme::getSetting('profile.email') }}</td>
                </tr>
              </table>
            </div>
            <br>
            <div class="buttons has-addons is-centered">
              <a href="#" class="button is-link">Github</a>
              <a href="#" class="button is-link">LinkedIn</a>
              <a href="#" class="button is-link">Twitter</a>
              <a href="#" class="button is-link">CodeTrace</a>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <!-- Profile picture -->
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://source.unsplash.com/random/1280x960" alt="Placeholder image">
            </figure>
          </div>
        </div>
      </div>
      <div class="column">
        <!-- Skills -->
        <div class="card">
          <div class="card-content skills-content">
            <h3 class="title is-4">Skills</h3>
            <div class="content">

              @foreach (Theme::getSetting('skills') as $title => $value)
              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>{{$title}}:</strong>
                      <br>
                      <progress class="progress is-primary" value="{{$value}}" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<div class="container">
  <div class="block">
    @yield('content')
  </div>
</div>


{{-- <main class="main-content">
    @yield('content')
</main> --}}

@include('PortfolioBulma.partials.footer')
