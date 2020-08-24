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
                    <th>Upload Date</th>
                    <th>More</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\File\File::all() as $file)
                <tr>
                    <td>
                        <i class="fa {{$file->fileIcon($file->type)}}"></i>
                        {{$file->name}}
                    </td>
                    <td>
                        {{$file->size}}
                    </td>
                    <td>
                        {{$file->created_at}}
                    </td>
                    <td>
{{--                        <a href="{{Storage::get($file)}}"></a>--}}
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
