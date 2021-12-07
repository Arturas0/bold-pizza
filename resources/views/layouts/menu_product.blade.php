<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        Products
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{
    route('product_index') }}">
            Products List
        </a>
        <a class="dropdown-item" href="{{
    route('product_create') }}">
            New product
        </a>
        <a class="dropdown-item" href="{{
            route('layoutProduct_index') }}">
            Show Layout
        </a>
        <a class="dropdown-item" href="{{
                route('layoutProduct_create') }}">
            Add to Layout
        </a>
    </div>
</li>
