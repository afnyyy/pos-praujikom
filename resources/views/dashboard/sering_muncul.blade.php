@extends('layouts.admin-layout')

@section('page-title', 'Dashboard')
@section('content')
<section class="py-4" >
  <div class="container">
    @anyrole(['Pimpinan','Administrator'])
    <h1 class="display-4 fw-bold">Welcome, Admin!</h1>
  @endanyrole
  @role('Kasir')
    <h1 class="display-4 fw-bold">Welcome, Salesperson!</h1>
  @endrole
    <h3 class="mb-4">Top 10 Most Frequently Purchased Products</h3>
    <table class="table table-bordered bg-white">
      <thead class="table-primary" style="background-color: #ADD8E6;">
        <tr>
          <th>No</th>
          <th>Nama Product</th>
          <th>Foto</th>
          <th>Total Order</th>
          <th>Total Qty</th>
          <th>Total Penjualan</th>
        </tr>
      </thead>
      <tbody>
        @forelse($popularProducts as $index => $product)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $product->product_name }}</td>
            <td>
              @if($product->product_photo)
                    @if(Str::startsWith($product->product_photo, ['http://', 'https://']))
                        <img src="{{ $product->product_photo }}" alt="{{ $product->product_name }}" width="50">
                    @else
                        <img src="{{ asset('storage/' . $product->product_photo) }}" alt="{{ $product->product_name }}" width="50">
                    @endif
                @else
                    <span>No Image</span>
                @endif
            </td>
            <td>{{ $product->total_order ?? 0 }}</td>
            <td>{{ $product->total_qty ?? 0 }}</td>
            <td>Rp {{ number_format($product->subtotal ?? 0, 2) }}</td>
          </tr>
        @empty
          <tr>
            <td colspan="6" class="text-center">Belum ada data penjualan.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</section>
@endsection
