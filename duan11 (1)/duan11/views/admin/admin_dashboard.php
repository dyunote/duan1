    
    <title>CasaGo Admin Dashboard</title>

    <!-- Font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
    <!-- Icon Material -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <!-- CSS riêng -->
    
</head>

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuApA9tjQWk6b45tx2OSOBdO8WfYMCJJfrp13z1sD7kf_lgVpx3BfOSE2B0RdHWAzh0f3-3e5c64LDeywsjUIxoGWg9uRpJDNlZArX5h3JdbsO8pWj8r-ynw_jK7lqx-wV4HWTlrnU1gsEhHr67h-uHC0asx6-D1oG1ql7KgB1TkAXlqY-0QdP0HBy4w82UU1vfgjmmmcU0By0WGmar0i-9kHThZOcvVuiE8rJpMwihDEVATfT_F5H44GS1O7_GKzUeEiVBwuXs-oFB4"
                     alt="CasaGo company logo">
            </div>
            <div class="sidebar-brand">
                <h1>CasaGo</h1>
                <p>Admin</p>
            </div>
        </div>

        <nav class="sidebar-nav">
        <a href="index.php?act=admin-dashboard" class="nav-link nav-link-active">
          <span class="material-symbols-outlined">dashboard</span>
          <span>Dashboard</span>
        </a>
        <a href="index.php?act=admin-product-list" class="nav-link ">
          <span class="material-symbols-outlined">inventory_2</span>
          <span>Products</span>
        </a>
        <a href="index.php?act=admin-category-list" class="nav-link">
          <span class="material-symbols-outlined">folder_special</span>
          <span>Categories</span>
        </a>
        <a href="index.php?act=admin-orders-list" class="nav-link">
          <span class="material-symbols-outlined">receipt_long</span>
          <span>Orders</span>
        </a>
        <a href="index.php?act=admin-customer-list" class="nav-link">
          <span class="material-symbols-outlined">group</span>
          <span>Customers</span>
        </a>
            
        </nav>
        
    </aside>
    
    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <header class="topbar">
            <div class="topbar-left"></div>
            <div class="topbar-right">
            </div>
        </header>

        <!-- CONTENT -->
        <section class="content">
            <div class="content-header">
                <h1 class="page-title">Dashboard</h1>
            </div>

            <div class="stats-grid">
                <!-- CARD 1 -->
                <article class="stats-card">
                    <div class="stats-main">
                        <h3>Products</h3>
                        <p class="stats-desc">Manage all products</p>
                        <p class="stats-number">1,250</p>
                    </div>
                    <a href="index.php?act=admin-product-list" class="stats-link">
                        <span>Go to Products</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </article>

                <!-- CARD 2 -->
                <article class="stats-card">
                    <div class="stats-main">
                        <h3>Categories</h3>
                        <p class="stats-desc">Organize your products</p>
                        <p class="stats-number">24</p>
                    </div>
                    <a href="index.php?act=admin-category-list" class="stats-link">
                        <span>Go to Categories</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </article>

                <!-- CARD 3 -->
                <article class="stats-card">
                    <div class="stats-main">
                        <h3>Orders</h3>
                        <p class="stats-desc">View and process orders</p>
                        <p class="stats-number">320</p>
                        <p class="stats-extra">15 new orders</p>
                    </div>
                    <a href="index.php?act=admin-order-list" class="stats-link">
                        <span>Go to Orders</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </article>

                <!-- CARD 4 -->
                <article class="stats-card">
                    <div class="stats-main">
                        <h3>Customers</h3>
                        <p class="stats-desc">Manage your customers</p>
                        <p class="stats-number">890</p>
                    </div>
                    <a href="index.php?act=admin-customer-list" class="stats-link">
                        <span>Go to Customers</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </article>
            </div>
        </section>

    </main>
</div>
</body>