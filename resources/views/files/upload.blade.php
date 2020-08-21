@extends('layouts.application')
@section('title', 'Dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Upload File</h3>
        </div>
        <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">

            <div class="dz-message needsclick">
                <button type="button" class="dz-button">Drop files here or click to upload.</button><br>

            </div>

        </form>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/dropzonejs/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/dropzonejs/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/dropzonejs/min/basic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/dropzonejs/min/dropzone.min.css') }}">
@endsection
@section('scripts')
    <script src="{{ asset('plugins/dropzonejs/dropzone.js') }}"></script>
    <script src="{{ asset('plugins/dropzonejs/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('plugins/dropzonejs/min/dropzone-amd-module.min.js') }}"></script>
    <script src="{{ asset('plugins/dropzonejs/dropzone-amd-module.js') }}"></script>
@endsection
