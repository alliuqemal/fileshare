@extends('layouts.application')
@section('title', 'All Members')

@auth
@section('content')

    @if(auth()->user()->role == 'Administrator')

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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th style="float:right">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(App\Models\User\User::all() as $user)
                        <tr>
                            <td>
                                {{$user->id}}
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                {{$user->role}}
                            </td>
                            <td style="float:right">
                                <div>
                                    @if ($user->role == "User")
                                        <a href="#" class="btn btn-tool btn-sm">
                                            <i class="success"
                                               alt="Promote"> Promote </i>

                                        </a>
                                    @endif
                                    <form action="#" class="btn btn-tool btn-sm">
                                        <i type="submit" class="fas fa-user-times"></i>
                                    </form>

                                    </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <h1> No Access </h1>
    @endif
@endsection


@endauth

@section('styles')


@endsection

@section('scripts')

@endsection
