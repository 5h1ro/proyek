@if (auth()->user()->role == 0)
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Administrator
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href=" {{ route('admin') }} " class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Barang</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                        Tambah Barang
                    </p>
                </a>
            </li>
        </ul>
    </li>
@endif

@if (auth()->user()->role == 1 || auth()->user()->role == 0)
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                User
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('checkout') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Checkout</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('pembayaran') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pembayaran</p>
                </a>
            </li>
        </ul>
    </li>
@endif
