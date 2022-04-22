@extends('pages.admin.layouts.base')


@section('content')

    <div class="yoo-height-b60 yoo-height-lg-b60"></div>

    @include('pages.admin.includes.nav-bar')

    <!-- .yoo-header -->

    <div class="yoo-sidebarheader-toggle">
        <div class="yoo-button-bar1"></div>
        <div class="yoo-button-bar2"></div>
        <div class="yoo-button-bar3"></div>
    </div>
    <!-- .yoo-sidebarheader-toggle -->

    @include('pages.admin.includes.side-bar')

    <!-- .yoo-sidebarheader -->

    @include('pages.admin.includes.content')

@endsection
