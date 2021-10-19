@extends('layouts.template')
@push('css')
  <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Forum Ulasan</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-12 col-lg-11">
        <div class="card shadow mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">List ulasan</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center text-nowrap">Id User</th>
                          <th class="text-center">Nama</th>
                          <th class="text-center">Ulasan</th>
                          <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center text-nowrap">24-09-2021</td>
                            <td class="text-center">3</td>
                            <td class="text-center text-nowrap">Aria Desta</td>
                            <td class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas animi omnis adipisci, hic sapiente distinctio quasi quisquam quod inventore totam!</td>
                            <td class="text-center">
                              <form action="" method="POST" class="d-inline">
                                <button type="submit" class="btn btn-sm btn-danger btn-circle" onclick="return confirm('Hapus Data ?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>                              
                            </td>
                        </tr>
                        {{-- @foreach ($ulasan as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-right">{{ date_format($item->created_at, 'Y-m-d') }}</td>
                            <td class="text-center">{{ $item->id_user }}</td>
                            <td class="text-center">{{ $item->nama }}</td>
                            <td class="text-right">{{ $item->ulasan }}</td>
                            <td class="align-middle">
                              <form action="{{route('forum.destroy', $item->id)}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger btn-circle" onclick="return confirm('Hapus Data ?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>                              
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>

</div>
@endsection

@push('js')
<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
  
</script>
@endpush