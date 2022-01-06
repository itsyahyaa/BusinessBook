<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                class="fas fa-user-secret me-2"></i>Laundry</div>
        <div class="list-group list-group-flush my-3">
            <a href="/" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                    class="fas fa-home me-2"></i>Home</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-truck me-2"></i>Sections</a>

            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-box me-2"></i>Orders</a>

            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-money-bill me-2"></i>Transactions</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-paperclip me-2"></i>Barcode</a>

            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-truck me-2"></i>Products</a>

            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-chart-area me-2"></i>Suppliers</a>

            <a href="/inventory" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-laptop me-2"></i>Cashier</a>
            <a href="{{ route('logout.index') }}"
                class="list-group-item list-group-item-action bg-transparent fw-bold" style="color: red"><i
                    class="fas fa-laptop me-2"></i>Logout</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="d-flex align-items-center py-4 px-4">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <main class="container">
            @yield('content')

        </main>



    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
@livewireScripts
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>
