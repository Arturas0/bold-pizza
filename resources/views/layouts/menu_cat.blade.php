<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        Categories
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{
    route('cat_index') }}">
            Categories List
        </a>
        <a class="dropdown-item" href="{{
    route('cat_create') }}">
            New Category
        </a>
        <a class="dropdown-item" href="{{
            route('layoutCat_index') }}">
                    Show Layout
                </a>
        <a class="dropdown-item" href="{{
            route('layoutCat_create') }}">
                    Add to Layout
                </a>
    </div>
</li>