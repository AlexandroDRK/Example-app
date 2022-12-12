@extends('layouts.defaults')
@vite('resources/js/app.js')

@section('content')
    <h5>Adicionar empresa:</h5>
    
    {{--Para exibicão de errros no topo:--}}
    @if ($errors->any())
        Erros: <br>
        @foreach ($errors->all() as $error)
        {{$error}} <br>
        @endforeach
        <br><br>
    @endif
    

    <form enctype="multipart/form-data" method="POST" action="{{route('business.store')}}">
        @csrf
        <input type="text" name="name" value="{{old('name')}}">
        {{--exibicão de erro ao lado do campo:--}}
        @error('name')
            {{$message}}
        @enderror
        <br>
        <input type="text" name="email" value="{{old('email')}}" >
        @error('email')
            {{$message}}
        @enderror
        <br>
        <input type="text" name="adress" value="{{old('adress')}}">
        <br>
        <input type="file" name="logo">
        <br>
        <button type="submit">Salvar</button>
    </form>
    <hr>
    @foreach ( $businesses as $business)
        @if ($business->logo)
            <img src="{{Storage::disk('public')->url($business->logo)}}" width="100" alt="">
        @endif
        <br>
        {{$business->name}} {{$business->email}} <br><br>
    @endforeach
    {{$businesses->onEachSide(5)->links()}}
@endsection

