@extends('pages.admin.layouts.app')

@section('title', 'FORMATIONS')

@section('content')

    @include('pages.admin.includes.nav-bar')

    @livewire('admin.formations')

@endsection
