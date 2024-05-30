@extends('user.layouts.user_master')

@section('title')
Service BD
@endsection

@section('topbar')
@include('user.home.topbar')
@endsection

@section('navbar')
@include('user.home.navbar')
@endsection

@section('search')
@include('user.home.search')
@endsection

@section('facts')
@include('user.home.facts')
@endsection

@section('about')
@include('user.home.about')
@endsection

@section('features')
@include('user.home.features')
@endsection

@section('services')
@include('user.home.services')
@endsection

