{{--
  Template Name: Events
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
<section class="interior-main">
  @include('partials.page-header')
  @include('partials.events-page')
  @include('partials.events-weekly')
</section>
@endwhile
@endsection

