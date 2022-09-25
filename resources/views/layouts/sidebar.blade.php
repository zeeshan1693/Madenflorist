<ul class="navbar-nav sidebar accordion" id="accordionSidebar">
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?page=home&amp;req=index&amp;">
        <div class="sidebar-brand-icon ">
            <img src="{{ asset('assets/img/LogoX.png') }}" width="100">
        </div>
        <div class="sidebar-brand-text mx-3"> Maden Florist</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Interface</div>
    
    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'home' ? 'active' : null }}" href="{{ route('home') }}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item ">
        <a class="nav-link {{ Request::segment(1) =='payment-method' ? 'active' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span>
        </a>
        <div id="collapse1" class="collapse {{ Request::segment(1) =='payment-method' ? 'show' : '' }}" aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Settings:</h6> --}}
                <a class="collapse-item {{ Request::segment(1) =='payment-method' ? 'active': '' }}" style="" href="{{ route('payment-method') }}">PaymentMethod</a>
                <a class="collapse-item" style="" href="index.php?page=country&amp;req=index&amp;">Country</a>
                <a class="collapse-item" style="" href="index.php?page=deliveryCost&amp;req=index&amp;">Delivery Cost</a>
                <a class="collapse-item" style="" href="index.php?page=currency&amp;req=index&amp;">Currency</a>
                <a class="collapse-item" style="" href="index.php?page=langList&amp;req=index&amp;">Language</a>
                <a class="collapse-item" style="" href="index.php?page=api_errors&amp;req=index&amp;">Api Errors</a>
                <a class="collapse-item" style="" href="index.php?page=templateEmail&amp;req=index&amp;">Template Email</a>
                <a class="collapse-item" style="" href="index.php?page=templateSms&amp;req=index&amp;">Template SMS</a>
                <a class="collapse-item" style="" href="index.php?page=notificationStatus&amp;req=index&amp;">Notification Center</a>
                <a class="collapse-item" style="" href="index.php?page=walletAmounts&amp;req=index&amp;">Wallet Amount</a>
                <a class="collapse-item" style="" href="index.php?page=redeemAmounts&amp;req=index&amp;">Redeem Amounts</a>
                <a class="collapse-item" style="" href="index.php?page=accountDeletion&amp;req=index&amp;">Account Deletion</a>
            </div>
        </div>
    </li>
                    
                
    <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
            <i class="fas fa-fw fa-th"></i>
            <span>Product Setup</span>
        </a>
        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Product Setup:</h6>
                <a class="collapse-item" style="background-color: #224442; color: white;" href="index.php?page=batalatInfo&amp;req=index&amp;">Batalat Info</a>
                <a class="collapse-item" style="" href="index.php?page=systemPages&amp;req=index&amp;">System Pages</a>
                <a class="collapse-item" style="" href="index.php?page=tFaqs&amp;req=index&amp;">Faqs</a>
                <a class="collapse-item" style="" href="index.php?page=termsConditions&amp;req=index&amp;">Terms Conditions</a>
                <a class="collapse-item" style="" href="index.php?page=category&amp;req=index&amp;">Categories</a>
                <a class="collapse-item" style="" href="index.php?page=categorySub&amp;req=index&amp;">Subcategories</a>
                <a class="collapse-item" style="" href="index.php?page=occasionTab&amp;req=index&amp;">Occasion Tab</a>
                <a class="collapse-item" style="" href="index.php?page=colors&amp;req=index&amp;">Colors</a>
                <a class="collapse-item" style="" href="index.php?page=types&amp;req=index&amp;">Flowers Filter</a>
                <a class="collapse-item" style="" href="index.php?page=secondTypes&amp;req=index&amp;">Products Filter</a>
                <a class="collapse-item" style="" href="index.php?page=subTypeLabels&amp;req=index&amp;">Addon Categories</a>
                <a class="collapse-item" style="" href="index.php?page=timeSlotsGap&amp;req=index&amp;">TimeSlots Gap</a>
                <a class="collapse-item" style="" href="index.php?page=templateSlots&amp;req=index&amp;">Template Slots</a>
                <a class="collapse-item" style="" href="index.php?page=timeslots&amp;req=index&amp;">TimeSlots</a>
                <a class="collapse-item" style="" href="index.php?page=dateslots&amp;req=index&amp;">DateSlots</a>
            </div>
        </div>
    </li>
                    
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=discountCodes&amp;req=index&amp;" style="">
        <i class="fas fa-money-bill"></i>
        <span>Voucher Codes</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.php?page=loyalPoints&amp;req=index&amp;" style="">
        <i class="fas fa-credit-card"></i>
        <span>Batlaat Program</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.php?page=banners&amp;req=index&amp;" style="">
        <i class="fas fa-address-card"></i>
        <span>Banners</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.php?page=brands&amp;req=index&amp;" style="">
        <i class="fas fa-suitcase"></i>
        <span>Brands</span></a>
    </li>
            
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=products&amp;req=index&amp;" style="">
        <i class="fas fa-shopping-bag"></i>
        <span>Products</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.php?page=productsAddOn&amp;req=index&amp;" style="">
        <i class="fas fa-plus-square"></i>
        <span>Products AddOn</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.php?page=warehouse&amp;req=index&amp;" style="">
        <i class="fas fa-building"></i>
        <span>Warehouse</span></a>
    </li>
            
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=orders&amp;req=index&amp;" style="">
        <i class="fas fa-truck"></i>
        <span>Orders</span></a>
    </li>
            
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=users&amp;req=index&amp;" style="">
        <i class="fas fa-users"></i>
        <span>Users</span></a>
    </li>
                
    <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
            <i class="fas fa-fw fa-key"></i>
            <span>Admin</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Admin:</h6>
                <a class="collapse-item" style="" href="index.php?page=adminUsers&amp;req=index&amp;">Admin Users</a>
                <a class="collapse-item" style="" href="index.php?page=adminPerms&amp;req=index&amp;">Admin Roles</a>
            </div>
        </div>
    </li>
                    
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=logout&amp;req=index&amp;" style="">
        <i class="fas fa-power-off"></i>
        <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>