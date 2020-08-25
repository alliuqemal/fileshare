@extends('layouts.application')
@section('title', 'All Members')

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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th style="float:right">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
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
                                @if ($user->isUser())
                                    <form class="d-inline"
                                          action="{{ route('admin.users.promote', ['user' => $user->id]) }}"
                                          method="POST"
                                          onsubmit="return confirm('Do you want to make this user an administrator');">
                                        @csrf
                                        <button type="submit" class="btn btn-xs btn-success"><i
                                                class="fas fa-user-check"></i></button>
                                    </form>

                                @endif

                                @if(auth()->user()->id != $user -> id)
                                        @if($user->isAdmin())
                                            <form class="d-inline"
                                                  action="{{ route('admin.users.demote', ['user' => $user->id]) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Do you want to make this user a normal user?');">
                                                @csrf
                                                <button type="submit" class="btn btn-xs btn-info"><i
                                                        class="fas fa-user-slash"></i></button>
                                            </form>
                                        @endif
                                        <form class="d-inline"
                                        action="{{ route('admin.users.delete', ['user' => $user->id]) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger"><i
                                            class="fas fa-user-times"></i></button>
                                    </form>

                                @endif


                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
