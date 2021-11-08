@extends('layouts/app')

@section('title', '為你自己學Laravel')
@section('main')
<h1>Hello, about me!<br></h1>

<!-- 自class WelcomeController 的方法 about -->
{{ $name }}<br>

{{ $js }}<br>

@if(true)
123<br>
@endif

@unless(false)
456<br>
@endif

@if(count($fruits) > 0)
@foreach($fruits as $fruit)
@if($loop->first || $loop->last)
<li>
    <strong>{{ $fruit }}</strong>
</li>
@else
<li>
    {{ $fruit }}
</li>
@endif
@endforeach
@endif
@endsection

@section('footer')
@endsection