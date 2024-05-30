@extends('user.layouts.user_master')

@section('title')
Service BD
@endsection

@section('nav')
@include('user.home.top_bar')
@endsection

@section('carousel')
@include('user.home.navbar')
@endsection

@section('who_we_are')
@include('user.home.search')
@endsection

@section('counter')
@include('user.home.facts')
@endsection

@section('feature')
@include('user.home.about')
@endsection

@section('social')
@include('user.home.features')
@endsection

@section('latest_news')
@include('user.home.services')
@endsection

