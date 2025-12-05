<body>

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-inner">
      <div class="sidebar-top">
        <div class="sidebar-user">
          <div
            class="avatar avatar-lg"
            data-alt="CasaGo Admin user avatar"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAjJrDV2zZ9wmHpiF59fDaRHieP0tVjx1QvoxCB3inzf_wHDuXaz9Muht-aRGlGiQ8bv5kfOsIVpelqSOesk1nJjvYbV-4wMqkkbxL72olkABi3M-s-qTyAMpQ2VWebB63u8rdDfM7GD_rAky7zrSqcWi83SLLS_-YRWNHt2rGhJGf4mtZN9XCbA7HczYL8YBMHjzc79rIIEs-U_d9nuM5JqzN6n0mwP4ZaF5Vr4YkWPk8F-DNMoEsDI-AgB68vQK4fPIG7tgQP1vhH");'>
          </div>
          <div class="sidebar-user-text">
            <h1>CasaGo Admin</h1>
            <p>admin@casago.com</p>
          </div>
        </div>

        <nav class="sidebar-nav">
          
        <a href="index.php?act=admin-dashboard" class="nav-link">
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
         <a href="index.php?act=admin-orders-list" class="nav-link  nav-link-active">
          <span class="material-symbols-outlined">receipt_long</span>
          <span>Orders</span>
        </a>
        <a href="index.php?act=admin-customer-list" class="nav-link">
          <span class="material-symbols-outlined">group</span>
          <span>Customers</span>
        </a>
          
        </nav>
      </div>

      <div class="sidebar-bottom">
        <button class="btn btn-logout" type="button">
          <span class="material-symbols-outlined">logout</span>
          <span>Đăng xuất</span>
        </button>
      </div>
    </div>
  </aside>

  <!-- MAIN -->
  <div class="main">
    <!-- TOPBAR -->
    <header class="topbar">
      <div class="topbar-left">
        <div class="topbar-logo-icon">
          <svg fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                  d="M24 4H42V17.3333V30.6667H24V44H6V30.6667V17.3333H24V4Z" />
          </svg>
        </div>
        <h2>Đơn hàng</h2>
      </div>
      
    </header>

    <!-- CONTENT -->
    <main class="content">
      <!-- Page heading -->
      <div class="page-header">
        <h1>Quản lý Đơn hàng</h1>
      </div>

      <!-- Filters -->
      <section class="filter-card">
        <div class="filter-search-wrapper">
          <div class="filter-search">
            <span class="material-symbols-outlined filter-search-icon">search</span>
            <input
              type="text"
              class="filter-search-input"
              placeholder="Tìm kiếm theo mã đơn hàng, tên khách hàng..." />
          </div>
        </div>
        <div class="filter-chips">
          <button class="chip" type="button">
            <span>Tất cả</span>
          </button>
          <button class="chip chip--with-icon" type="button">
            <span>Trạng thái</span>
            <span class="material-symbols-outlined chip-icon">expand_more</span>
          </button>
          <button class="chip chip--with-icon" type="button">
            <span>Ngày đặt</span>
            <span class="material-symbols-outlined chip-icon">expand_more</span>
          </button>
        </div>
      </section>

      <!-- Orders table -->
      <section class="card">
        <div class="table-wrapper">
          <table class="orders-table">
            <thead>
              <tr>
                <th>Mã đơn hàng</th>
                <th>Khách hàng</th>
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th class="text-right">Hành động</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="cell-strong">#CAS-84321</td>
                <td>Nguyễn Văn An</td>
                <td>15/07/2023</td>
                <td>2.500.000đ</td>
                <td>
                  <span class="badge badge--green">Đã giao</span>
                </td>
                <td class="cell-actions">
                  <button class="action-icon-btn" type="button">
                    <span class="material-symbols-outlined">visibility</span>
                  </button>
                  <button class="action-icon-btn" type="button">
                    <span class="material-symbols-outlined">more_vert</span>
                  </button>
                </td>
              </tr>

              <tr>
                <td class="cell-strong">#CAS-84320</td>
                <td>Trần Thị Bích</td>
                <td>14/07/2023</td>
                <td>1.280.000đ</td>
                <td>
                  <span class="badge badge--yellow">Đang xử lý</span>
                </td>
                <td class="cell-actions">
                  <button class="action-icon-btn" type="button">
                    <span class="material-symbols-outlined">visibility</span>
                  </button>
                  <button class="action-icon-btn" type="button">
                    <span class="material-symbols-outlined">more_vert</span>
                  </button>
                </td>
              </tr>


            </tbody>
          </table>
        </div>

      
        
      </section>
    </main>
  </div>
</div>
</body>