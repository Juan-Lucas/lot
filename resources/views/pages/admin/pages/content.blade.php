
@extends('pages.admin.layouts.app')


@section('title', 'DASHBOARD')

@section('content')

    @include('pages.admin.includes.nav-bar')

    @livewire('admin.dashboard')


@endsection
