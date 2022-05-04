@extends('pages.admin.layouts.app')

@section('title', "AJOUTER")

@section('content')

    @include('pages.admin.includes.nav-bar')

    @livewire('admin.add-formations')

@endsection
