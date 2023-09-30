<div class="col-lg-3 position-static d-none d-lg-block">
    <div class="aiz-category-menu bg-white rounded  shadow-sm">
        <div
            class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
            <span class="fw-600 fs-16 mr-3">Thể loại</span>
            <a href="/categories" class="text-reset">
                <span class="d-none d-lg-inline-block">Nhìn thấy tất cả &gt;</span>
            </a>
        </div>
        <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
            @foreach ($categories as $category)
            <li class="category-nav-element" data-id="15">
                <a href="/category/{{ $category->id }}"
                    class="text-truncate text-reset py-2 px-3 d-block">
                    <img class="cat-image mr-2 opacity-60 ls-is-cached lazyloaded"
                        src="{{ URL::to('/') . '/uploads' . $category->image }}" data-src=""
                        width="16" alt="Thời trang nữ và phụ kiện"
                        onerror="this.onerror=null;this.src='{{ URL::to('/') . '/uploads/all/'}}placeholder.jpg';">
                    <span class="cat-name">{{ $category->name }}</span>
                </a>
                <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4 loaded">
                    <div class="card-columns">
                        @foreach ($category->children as $child)
                        <div class="card shadow-none border-0">
                            <ul class="list-unstyled mb-3">
                                <li class="fw-600 border-bottom pb-2 mb-3">
                                    <a class="text-reset"
                                        href="/category/{{ $child->id }}">{{ $child->name }}</a>
                                </li>
                            </ul>
                        </div>
                        @endforeach

                    </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>
</div>
