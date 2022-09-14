@extends('layouts.defaults')

@section('title', 'User Title')
@section('content')
<h1> User </h1>

@push('styles')
<link rel="stylesheet" href= {{ asset('/css/user.css') }} >
@endpush

Name: {{$user->name}} <br>
Email: {{$user->email}} <br>

<br>
@if (1==1)
    Verdadeiro
@endif
<br>

@php
    $total = 0;
@endphp

@empty($total)
    Sem compras efetuadas
@endempty

@endsection

@push('scripts')
    <script>var user = "Alexandro"</script> 
@endpush

@prepend('scripts')
<script src={{ asset('/js/user.js') }}></script>   
@endprepend()


