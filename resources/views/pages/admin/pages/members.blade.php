@extends('pages.admin.layouts.app')

@section('title', 'MEMBRES')

@section('content')

    @include('pages.admin.includes.nav-bar')

    @livewire('admin.members')

@endsection
