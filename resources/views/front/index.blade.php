@extends('front.layout')

@section('main')

    <!-- masonry
    ================================================== -->
    <section id="home">

        <div class="row masonry">
            @isset($info)
                @component('front.components.alert')
                    @slot('type')
                        info
                    @endslot
                    {!! $info !!}
                @endcomponent
            @endisset
            @if ($errors->has('search'))
                @component('front.components.alert')
                    @slot('type')
                        error
                    @endslot
                    {{ $errors->first('search') }}
                @endcomponent
            @endif  
            <!-- brick-wrapper -->

        </div> <!-- end row -->


        @include('front.home.first-stop')
        @include('front.home.second-stop')
        @include('front.home.third-stop')
        @include('front.home.fourth-stop')
        @include('front.home.fifth-stop')

    </section> <!-- end bricks -->

@endsection
