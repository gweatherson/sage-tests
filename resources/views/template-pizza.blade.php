{{--
  Template Name: Pizza Template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp

	<h1>this is my pizza template</h1>

	<div class="pizzas">
	  {!! $pizzas !!}
	</div>

  @endwhile
@endsection
