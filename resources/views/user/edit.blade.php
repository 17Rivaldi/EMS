@extends('layouts.master')

@section('breadcrumb-item')
    <li class="breadcrumb-item text-white" aria-current="page">
        <a href="{{ route('user.index') }}" class="text-white">User</a>
    </li>
    <li class="breadcrumb-item text-white active opacity-8" aria-current="page">Edit</li>
@endsection

@section('content')
    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h6>Edit User</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $user->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password (Biarkan kosong jika tidak diubah)</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password">
                                <span class="input-group-text" id="toggle-password">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Pemilihan peran (roles) menggunakan form select -->
                        <div class="mb-3">
                            <label for="roles" class="form-label">Roles</label>
                            <select class="form-select" id="roles" name="roles[]" aria-label="Default select example"
                                required>
                                @foreach ($roles as $roleName => $roleLabel)
                                    <option value="{{ $roleName }}" {{ $user->hasRole($roleName) ? 'selected' : '' }}>
                                        {{ $roleLabel }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif


                        <button type="submit" class="btn btn-primary">Update User</button>
                        <a href="{{ route('user.index') }}" class="btn btn-danger" role="button">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addCss')
    <style>
        .breadcrumb-item a:hover {
            color: #e3e3e3 !important
        }
    </style>
@endsection

@section('addJs')
    <script>
        $(document).ready(function() {
            $('#toggle-password').on('click', function() {
                var passwordInput = $('#password');
                var toggleIcon = $(this).find('i');

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    toggleIcon.removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    passwordInput.attr('type', 'password');
                    toggleIcon.removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
        });
    </script>
@endsection
