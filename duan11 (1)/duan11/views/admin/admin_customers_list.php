<body>

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-top">
      <div class="sidebar-header">
        <div
          class="avatar avatar-logo"
          data-alt="Admin avatar"
          style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA9Zxp30Rr4fDX4JemxCcoUgCuYp4nHkZYwgVHULFZxzHPrzsd58Th1nYuXRc-GeemWpb0QVEkOgXF9ye9E5pi-qViEEbDkH_6KRmGEkHPO6xuKr-F3IOULUN4ZSOQ4y72ZrtnhVFaBcCd4kj2IeNBwEQ_OETUpxh5qrBnaldtOkSKZODDRy7LV5lSR6LzLjC_qgpD1oT5f5xCh9fOiA2iMyEURz2pGwBofHpdFyDMbX9kXEVaChHmr9TFhF-KukOEsT5a-bAx3aul2");'>
        </div>
        <div class="sidebar-title">
          <h1>CasaGo</h1>
          <p>Admin</p>
        </div>
      </div>

      <nav class="sidebar-nav">
       
        <a href="index.php?act=admin-dashboard" class="nav-link ">
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
        <a href="index.php?act=admin-customer-list" class="nav-link nav-link-active">
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
  </aside>

  <!-- MAIN -->
  <main class="main">
    <!-- TOP BAR -->
    <header class="topbar">
      <div class="topbar-left">
        <div class="topbar-logo-icon">
          <svg fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 4H17.3334V17.3334H30.6666V30.6666H44V44H4V4Z"></path>
          </svg>
        </div>
        <h2>CasaGo Admin</h2>
      </div>
     
    </header>

    <!-- MAIN CONTENT -->
    <div class="main-content">
      <!-- PAGE HEADING -->
      <div class="page-header">
        <h1>Danh sách Người dùng</h1>
          <a href="index.php?act=admin-customer-add" class="btn btn-secondary">
            + Thêm người dùng
          </a>

      </div>

      <!-- SEARCH + FILTER -->
      <div class="toolbar">
        <div class="search-box">
          <span class="material-symbols-outlined search-icon">search</span>
          <input
            type="text"
            class="search-input"
            placeholder="Tìm kiếm người dùng..." />
        </div>

        <div class="filter-group">
          <button class="filter-btn filter-btn--with-icon" type="button">
            <span>Lọc theo Vai trò</span>
            <span class="material-symbols-outlined filter-icon">expand_more</span>
          </button>
          <button class="filter-btn filter-btn--with-icon" type="button">
            <span>Lọc theo Trạng thái</span>
            <span class="material-symbols-outlined filter-icon">expand_more</span>
          </button>
        </div>
      </div>

      <!-- TABLE -->
      <section class="table-card">
        <table class="user-table">
          <thead>
            <tr>
              <th>Tên người dùng</th>
              <th>Email</th>
              <th>Số điện thoại</th>
              <th>Vai trò</th>
              <th>Trạng thái</th>
              <th class="th-actions">Hành động</th>
            </tr>
          </thead>
          <tbody>
          <!-- Row 1 -->
          <tr>
            <td>
              <div class="user-cell">
                <img
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnQzA_-aih95ieh_TRGwJS8-Jn9ioUuv7ds8TwJwEQtsV8WrBYPG-lZXNIQHUgB0kBGhS-1eMj20_B986N6cr03YBiMid6hd3zj9nCf7VZEWx0hEO1RrW6lS97PoPKFJVAGAxJWLSYiqFkhXcxBbgpf56TJSCwSMXllJJ-nnd_LlJE1-rFP738LpEYsHoS5rz2TQoh20vYwq1SSQJsYWEWbP_ZOdILx7RrRHT2F2xuGC55XDHyzwUBQp2plr9zo0_B-W5bwm1bqvBp"
                  alt="Avatar of An Nguyen"
                  class="user-avatar" />
                <span class="user-name">An Nguyen</span>
              </div>
            </td>
            <td class="text-muted">an.nguyen@example.com</td>
            <td class="text-muted">090 123 4567</td>
            <td class="text-muted">Admin</td>
            <td>
              <span class="badge badge--active">Hoạt động</span>
            </td>
            <td class="cell-actions">
              <div class="action-buttons">
                <a href="index.php?act=admin-customer-edit" class="action-btn">
                  <span class="material-symbols-outlined">edit</span>
                </a>


                <button class="action-btn" type="button">
                  <span class="material-symbols-outlined">delete</span>
                </button>
              </div>
            </td>
          </tr>

          

          </tbody>
        </table>
      </section>
    </div>
  </main>
</div>
</body>