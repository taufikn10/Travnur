@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel <span>{{ $item->title }}</span></h1>
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

  <div class="card-body shadow p-3 mb-5 bg-white rounded">
    <form method="POST" action="{{ route('transaction.update', $item->id) }}" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="transaction-status">Status</label>
        <select name="transaction_status" required class="form-control">
          <option value="{{ $item->transaction_status }}">Jangan Ubah ({{ $item->transaction_status }})</option>
          <option value="IN_CART">In Cart</option>
          <option value="PENDING">Pending</option>
          <option value="SUCCESS">Success</option>
          <option value="CANCEL">Cancel</option>
          <option value="FAILED">Failed</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Ubah</button>
    </form>
  </div>
</div>
<!-- /.container-fluid -->
@endsection