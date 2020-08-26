@extends('layouts.application')

@section('title', 'All Files')

@section('content')
    <div class="card">
        <div class="card-header border-0">
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
                    <th>Uploaded</th>
                    <th>More</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $file)
                <tr>
                    <td>
                        <i class="fa {{ getFileIcon($file->type) }}"></i>
                        {{$file->name}}
                    </td>
                    <td>
                        {{$file->size_in_mb}}
                    </td>
                    <td>
                        {{optional($file->created_at)->diffForHumans()}}
                    </td>
                    <td>
                        <a href="{{ route('files.download', ['id' => $file-> id]) }}" class="btn btn-xs btn-info">
                            <i class="fas fa-download"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('styles')


@endsection

@section('scripts')

@endsection
