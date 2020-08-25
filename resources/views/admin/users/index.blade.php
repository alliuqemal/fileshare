@extends('layouts.application')
@section('title', 'All Members')

@section('content')
    {{$dataTable->table()}}

@endsection

@section('scripts')

    {{$dataTable->scripts()}}

@endsection
