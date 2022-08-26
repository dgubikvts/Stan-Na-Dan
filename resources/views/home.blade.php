@extends('layouts.app')
@section('content')
    @if(session()->has('message'))
        <span class="text-green-500 text-xs">{{session('message')}}</span>
    @endif
    <livewire:apartments />
    
@endsection