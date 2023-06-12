@extends('templet/admin')

@section('content')
<h1>Customer</h1>
<a href=" {{ route('cus.create_cus') }} " class="btn btn-primary mb-3">Add Customer</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Customer</th>
        <th scope="col">Alamat</th>
        <th scope="col">No_hp</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
        @php $number = 1;  @endphp
        @foreach($customer as $customers)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $customers->name }}</td>
            <td>{{ $customers->address }}</td>
            <td>{{ $customers->no_hp }}</td>
            <td>
              <a href="" class="btn btn-primary">Edit</a>
              <form action="" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
              </form>
          </td>
        </tr>
        @php  $number++ @endphp
        @endforeach
        
    </tbody>
  </table>
@endsection