@extends('templet/admin')
@section('content')
<form action="{{ route('cus.storee')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Alamat:</label>
        <input type="text" name="address" id="address" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">No Hp:</label>
        <input type="text" name="no_hp" id="no_hp" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>
@endsection