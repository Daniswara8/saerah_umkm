@extends('layout.layoutKeranjang')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Keranjang Belanja</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($cartItems->isEmpty())
            <div class="alert alert-info text-center">
                Keranjang Anda kosong
            </div>
        @else
            <div class="row">
                @foreach ($cartItems as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->product->nama_produk }}</h5>
                                <p class="card-text">Harga: Rp.
                                    {{ number_format($item->product->harga_produk, 0, ',', '.') }}</p>
                                <div class="d-flex align-items-center mb-2">
                                    <button class="btn btn-outline-secondary btn-sm mr-2"
                                        onclick="updateQuantity({{ $item->id }}, -1)">-</button>
                                    <input type="text" class="form-control text-center" value="{{ $item->quantity }}"
                                        readonly style="width: 50px;">
                                    <button class="btn btn-outline-secondary btn-sm ml-2"
                                        onclick="updateQuantity({{ $item->id }}, 1)">+</button>
                                </div>
                                <p class="card-text">Total: Rp.
                                    {{ number_format($item->quantity * $item->product->harga_produk, 0, ',', '.') }}</p>
                                <form action="{{ route('keranjang.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-right">
                <a href="#" class="btn btn-primary">Checkout</a>
            </div>
        @endif
    </div>

    <script>
        function updateQuantity(cartId, change) {
            fetch(`/keranjang/update/${cartId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    change: change
                })
            }).then(response => {
                if (response.ok) {
                    location.reload();
                }
            });
        }
    </script>
@endsection
