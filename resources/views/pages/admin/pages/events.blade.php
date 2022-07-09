@extends('pages.admin.layouts.app')

@section('title', 'EVENEMENTS')

@section('content')

    @include('pages.admin.includes.nav-bar')

    @livewire('admin.events')

@endsection