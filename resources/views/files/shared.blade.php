@extends('layouts.application')

@section('title', 'Shared with me')

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
                    <th style="float:right"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <i class="fa fa-file-word"
                           alt="Word"></i>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td style="float:right">
                        <div>
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-trash-alt"
                                   alt="Move to trash"></i>
                            </a>
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-share-square"
                                   alt="Share file"></i>

                            </a>
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-edit"
                                   alt="Edit File"></i>
                            </a></div>
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
