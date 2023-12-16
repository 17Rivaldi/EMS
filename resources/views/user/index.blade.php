@extends('layouts.master')

@section('breadcrumb-item')
    <li class="breadcrumb-item text-white active opacity-8" aria-current="page">User</li>
@endsection

@section('content')
    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Daftar User</h6>
                    <a href="{{ route('users.create') }}" class="btn btn-primary" role="button"><i
                            class="fas fa-plus me-2"></i>Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="data-table" class="table table-responsive table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @foreach ($user->roles as $role)
                                                {{ $role->name }}
                                            @endforeach
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format('H:i:s | d-m-Y') }}</td>
                                        <td><a class="btn btn-primary text-xs my-auto"
                                                href="{{ route('users.edit', $user->id) }}" role="button"><i
                                                    class="fas fa-edit me-1"></i>Edit</a>
                                            <!-- Formulir untuk DELETE -->
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger text-xs my-auto"
                                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                                    <i class="fas fa-trash me-1"></i>Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addCss')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <style>
        .pagination .page-item.active .page-link {
            color: white;
        }

        .dataTables_length select {
            background: none;
            cursor: pointer;
        }

        .dataTables_length select:hover {
            border: 1px solid blue;
        }

        .breadcrumb-item a:hover {
            color: #e3e3e3 !important
        }
    </style>
@endsection

@section('addJs')
    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Bootstrap 5 JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable({
                "language": {
                    "paginate": {
                        "previous": '<i class="fas fa-chevron-left"></i>',
                        "next": '<i class="fas fa-chevron-right"></i>'
                    }
                }
            });
        });
    </script>
@endsection
