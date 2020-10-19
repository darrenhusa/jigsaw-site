<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        @stack('meta')

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    </head>

    <body class="flex flex-col justify-between min-h-screen bg-white text-gray-800 leading-normal font-sans">
      <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4" role="banner">
          <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
              <div class="flex items-center">
                  <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                      <img class="h-8 md:h-10 mr-3" src="/assets/images/Seal-Crimson-2.svg" alt="{{ $page->siteName }} logo" />

                      <h1 class="text-lg md:text-2xl text-blue-900 font-semibold hover:text-blue-600 my-0 pr-4">{{ $page->siteName }}</h1>
                  </a>
              </div>

              <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                  @if ($page->docsearchApiKey && $page->docsearchIndexName)
                      @include('_nav.search-input')
                  @endif
              </div>
          </div>
          
            @yield('nav-toggle')
        </header>

        <main role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center">
                <li class="md:mr-2">
                    &copy; <a href="http://ir.ccsj.edu" title="CCSJ IR website">CCSJ IR</a> {{ date('Y') }}.
                </li>

                <li>
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>
            </ul>
        </footer>
    </body>
</html>
