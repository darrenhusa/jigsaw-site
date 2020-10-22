@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container max-w-8xl mx-auto px-6 md:px-8 py-4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <!-- <div class="DocSearch-content w-full lg:w-3/5 break-words pb-16 lg:pl-4" v-pre>
            @yield('content')
        </div> -->

        <div class="markdown bg-white w-full lg:max-w-md xl:max-w-lg md:mb-6 lg:mb-10 px-6 xl:px-10 pt-4 pb-8 font-normal sm:shadow md:rounded-lg">

          @yield('content')

                <div class="flex-1 hidden lg:flex pl-6">
                  <nav role="aside" class="flex flex-col pl-2">
                    @yield('right-sidebar-links')
                </nav>
              </div>

            </div>



    </div>
</section>
@endsection
