<div class="col-lg-3 position-static d-none d-lg-block">
    <div class="aiz-category-menu bg-white rounded  shadow-sm">
        <div
            class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
            <span class="fw-600 fs-16 mr-3">
                {{ __t('Thể loại', 'Category')  }}
            </span>
            <a href="/categories" class="text-reset">
                <span class="d-none d-lg-inline-block">
                    {{ __t('Nhìn thấy tất cả', 'See all') }}
                </span>
            </a>
        </div>
        <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
            @foreach ($categories as $category)
            <li class="category-nav-element" data-id="15">
                <a href="/category/{{ $category->id }}"
                    class="text-truncate text-reset py-2 px-3 d-block">
                    <span class="cat-name">{{ __t($category->name, $category->name) }}</span>
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
