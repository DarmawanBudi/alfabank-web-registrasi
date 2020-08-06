@extends('layouts.master')
@section('konten')

@include('components/header')
@include('components/hero')
  <main id="main">
  @include('components/about')
  @include('components/services')
  @include('components/features')
  @include('components/register')
  @include('components/portfolio')
  @include('components/pricing')
  @include('components/faq')
  @include('components/team')
  @include('components/contact')
  @include('components/footer')
  </main><!-- End #main -->
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
@endsection