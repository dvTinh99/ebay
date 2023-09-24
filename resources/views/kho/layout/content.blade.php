<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @if($page == 'order')
        @include('kho.page.order')
    @elseif($page == 'dashboard')
        @include('kho.page.dashboard')
    @elseif($page == 'wallet-recharge')
        @include('kho.page.wallet-recharge')
    @elseif($page == 'profile')
        @include('kho.page.profile')
    @elseif($page == 'wallet-withdraw')
        @include('kho.page.404')
    @endif

</div>
