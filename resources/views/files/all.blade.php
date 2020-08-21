@extends('layouts.application')

@section('title', 'All Files')

@section('content')
    <div class="card">
        <div class="card-header border-0">
            <h3 class="card-title">Products</h3>
            <div class="card-tools">
                <a href="javascript:location.reload()" class="btn btn-tool btn-sm">
                    <i class="fas fa-sync"></i>
                </a>

            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                    <th>File</th>
                    <th>File Size</th>
                    <th>Upload Date</th>
                    <th>More</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <i class="fa fa-file-word"></i>

                    </td>
                    <td></td>
                    <td>


                    </td>
                    <td>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('styles')


@endsection

@section('scripts')

@endsection
