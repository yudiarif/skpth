@extends('layouts.main')
@section('judul')
<i class="fas fa-fw fa-users-cog"></i> Data User
@endsection
@section('isi')

        <!-- Page Heading -->
        <p class="mb-4"></p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-end">
                <a href="#" data-toggle="modal" data-target="#ModalCreate" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa fa-user-plus"></i>
                    </span>
                    <span class="text">Tambah User</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead >
                            <tr class="bg-info text-gray-100">
                                <th width="15%" class="text-center">No.</th>
                                <th class="text-center">Nama User</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Role</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                           {{-- TFOOT --}}
                        </tfoot>
                        <tbody>
                            <?php $no=1?>
                            @foreach ($datauser as $user)
                            <tr>
                            <td class="text-center">{{ $no }}</td>
                            <td class="text-center">{{ $user->nama }}</td>
                            <td class="text-center">{{ $user->username }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center"> 
                                @if ($user->role_id==1)
                                Admin
                            @endif
                                @if ($user->role_id==2)
                                    Decision Maker
                            @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a data-toggle="modal" data-placement="bottom" title="Edit Data" href="#" class="btn btn-warning btn-sm" data-target="#ModalEdit{{ $user->id }}"><i class="fa fa-edit"></i></a>
                                    <a data-toggle="modal" data-placement="bottom" title="Hapus Data" href="#"  class="btn btn-danger btn-sm" data-target="#ModalDelete{{ $user->id }}"><i class="fa fa-trash"></i></a>
                                    @include('user.modal.edit')
                                    @include('user.modal.delete')
                                </div>
                            </td>
                            </tr>
                        <?php $no++ ?>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
@include('user.modal.create')
@endsection