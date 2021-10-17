@extends('layouts.template')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Edit Link</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-12 col-lg-11">
        <div class="card shadow mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Link</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <form action="{{ route('web-profile.update') }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="link_wa">Link Whatsapp</label>
                    <input type="number" name="link_wa" id="link_wa" class="form-control @error('link_wa') is-invalid @enderror" placeholder="ex :6285118275xxx" value="{{ old('link_wa', $profile->link_wa) }}">
                    @error('link_wa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <br>
                    <label for="no_hp">No. Handphone</label>
                    <input type="number" name="no_hp" id="no_hp" class="form-control mt-2 @error('no_hp') is-invalid @enderror" placeholder="ex : 62xxxxxxxxxxx" value="{{ old('no_hp', $profile->no_hp) }}">
                    @error('no_hp')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                    <br>
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control mt-2 @error('alamat') is-invalid @enderror" placeholder="ex : Jalan Gatxxx" value="{{ old('alamat', $profile->alamat) }}">
                    @error('alamat')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                    <br>
                    <label for="ig">Instagram</label>
                    <input type="text" name="ig" id="ig" class="form-control mt-2 @error('ig') is-invalid @enderror" placeholder="ex : befarm" value="{{ old('ig', $profile->ig) }}">
                    @error('ig')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
                <input type="submit" value="Submit" class="btn btn-success">
                <input type="reset" value="Reset" class="btn btn-danger">
            </form>
          </div>
        </div>
      </div>

</div>
@endsection