@extends('layouts.template')
@push('css')
<link href="{{ asset('assets/vendor/datatables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
@endpush
@section('content')
            <div class="row">
                <div class="col-xl-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area mr-1"></i>
                            List Daftar Rekomendasi
                            <a href="{{ route('rekomendasi.create') }}" class="ml-4 d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row border border-success rounded bg-success">
                    <div class="col-6 bg-success align-self-center text-center">
                        <h4 class="text-light"> Oseng Selada Dengan Saus Ebi</h4>
                    </div>
                    <div class="col-4  align-self-center">
                        <img src="" alt="" class="rounded img-fluid" width="200px" height="200px">
                    </div>
                    <div class="col-2 bg-success align-self-center">
                        <div class="form-group align-self-center text-center text-light">
                            <label>Aksi</label><br>
                            <a href="{{route('rekomendasi.edit', 1)}}">
                                <button type="submit" class="btn btn-sm btn-info btn-circle">
                                    <i class="fas fa-pen"></i>
                                </button>
                            </a>|
                            <form action="{{route('rekomendasi.destroy',2)}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger btn-circle" onclick="return confirm('Hapus Data ?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@push('js')
<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
  
</script>
@endpush
