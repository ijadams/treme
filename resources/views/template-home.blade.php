{{--
Template Name: Home
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
@include('partials.home-slider')
@include('partials.home-details')
@endwhile
@endsection
