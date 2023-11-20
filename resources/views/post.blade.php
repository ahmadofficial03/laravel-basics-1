@extends('layouts.master')


<!-- adding style file -->
@section('styles')
<!-- Additional styles specific to this view -->
<link rel="stylesheet" href="path/to/your/additional/styles.css">
@endsection


<!-- Main content section -->
@section('content')

<!-- IF ESLE IF DIRECTIVE -->
@if(1=='2')
not sure
@elseif(1==1)
correct
@else
not correct
@endif


Hello, I'm Content from Post.blade.php
@endsection

<!-- Adding JS files -->
@section('scripts')
<script></script>
@endsection