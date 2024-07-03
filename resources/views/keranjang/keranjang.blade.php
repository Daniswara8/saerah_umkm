@extends('layout.layoutKeranjang')

@section('content')
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="col-3">
                <img src="assets/imgwlc/logosr.png" alt="" width="150px"
                    style="filter: drop-shadow(5px 3px 5px black);">
            </div>
            <div class="navbar">
                <a class="navbar-brand" href="{{route('home.index')}}">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/user') }}">Product</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link me-3" href="#tentang">About Us</a>
                        </li> -->
                    </ul>
                    @guest
                        <a href="{{ url('/login') }}" class="custom-link"><i class="bi bi-person-circle me-3"
                                style="margin-left:10px">Masuk</i></a>
                    @endguest

                    @auth
                        <a href="{{ url('/dashboard') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="custom-link" style="color: black; text-decoration: none;">
                            <i class="bi bi-person-circle me-3" style="margin-left:10px"></i>
                        </a>
                        <form id="logout-form" action="/dashboard" method="GET" style="display: none;">
                            @csrf
                        </form>
                    @endauth

                    <a href="#" class="custom-link"><i class="bi bi-cart3 me-3"></i></a>
                </div>
            </div>
        </div>
    </nav>
    {{-- end --}}

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
            <div class="row d-flex justify-content-center">
                @foreach ($cartItems as $item)
                    <div class="col-md-4 mb-4 d-flex">
                        <div class="card h-100 w-100">
                            <img src="{{ asset('assets/cache/' . $item->product->foto_produk) }}"
                                class="card-img-top product-image" alt="{{ $item->product->nama_produk }}">
                            <div class="card-body d-flex flex-column">
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
                                <form action="{{ route('keranjang.remove', $item->id) }}" method="POST" class="mt-auto">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Total Harga -->
            <div class="card mt-4">
                <div class="card-body">
                    <h4 class="card-title text-center">Total Harga</h4>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Total:</th>
                                <td>Rp. {{ number_format($totalPrice, 0, ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('pembayaran.create') }}" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <style>
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: contain;
            /* Change to contain */
        }
    </style>

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
                } else {
                    alert('Failed to update quantity.');
                }
            }).catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
@endsection
