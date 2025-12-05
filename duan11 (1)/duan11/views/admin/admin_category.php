
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="sidebar-inner">
        <div class="sidebar-top">
          <div class="brand">
            <div
              class="avatar avatar-logo"
              data-alt="CasaGo Logo"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuACSsxNRwxPVfmIR4dyvnhAhVmvPpGIotBBtmMTJIrtPEHaZqTHFICtWAwFeTpGK9ToBu6pH2ZAwASWH1IjytYaCwbcYkKzYTNqGGDJ1d61oiI4mJio81bGtT6cUdyoOG3pMgU-BwYEwFJad4E1pmyLG9Of4ipTH6Y1eWfQdkrkzKkRIbHVKAbyzYPzJlXhwyl0Pbn6kjMgbiSjuRdg5eJ26I8NvSyn9UO7E-UJLDUY4bmINMAwJsALQ8CLDQK1UVStJghLj82ZYdKk");'>
            </div>
            <div class="brand-text">
              <h1>CasaGo Admin</h1>
              <p>Appliance Management</p>
            </div>
          </div>

          <nav class="nav">
            
            <a href="index.php?act=admin-dashboard" class="nav-link">
            <span class="material-symbols-outlined">dashboard</span>
            <span>Dashboard</span>
            </a>
            <a href="index.php?act=admin-product-list" class="nav-link ">
            <span class="material-symbols-outlined">inventory_2</span>
            <span>Products</span>
            </a>
            <a href="index.php?act=admin-category-list" class="nav-link nav-link-active">
            <span class="material-symbols-outlined">folder_special</span>
            <span>Categories</span>
            </a>
            <a href="index.php?act=admin-orders-list" class="nav-link ">
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
    <main class="main">
      <!-- TOPBAR -->
      <header class="topbar">
       
      </header>

      <!-- CONTENT -->
      <section class="content">
        <!-- Heading -->
        <div class="page-heading">
          <div>
            <h1>Danh sách Danh mục</h1>
            <p>Quản lý các danh mục sản phẩm của bạn.</p>
          </div>
        </div>

        <!-- Toolbar -->
        <div class="toolbar">
          <div class="search-wrapper">
            <span class="material-symbols-outlined search-icon">search</span>
            <input
              type="text"
              class="search-input"
              placeholder="Tìm kiếm danh mục..." />
          </div>
          <button class="btn btn-primary" type="button">
                <a href="index.php?act=admin-category-add" class="btn btn-primary">
                <span class="material-symbols-outlined">add</span>
                <span>Thêm Danh Mục</span>
                </a>

          </button>
        </div>

        <!-- Table -->
        <div class="table-card">
          <div class="table-wrapper">
            <table class="category-table">
              <thead>
                <tr>
                  <th>Tên Danh Mục</th>
                  <th>Mô tả</th>
                  <th>Số lượng sản phẩm</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="cell-name">Tủ Lạnh</td>
                  <td>Các loại tủ lạnh gia đình và công nghiệp.</td>
                  <td>120</td>
                  <td>
                    <div class="action-group">
                      <button class="icon-link" type="button">
                        <a href="index.php?act=admin-category-edit" class="material-symbols-outlined">edit</span>
                      </button>
                      <button class="icon-link" type="button">
                        <span class="material-symbols-outlined">delete</span>
                      </button>
                    </div>
                  </td>
                </tr>
              
               
                
               
              </tbody>
            </table>
          </div>
        </div>

        <!-- Pagination -->
        <div class="pagination">
          <p class="pagination-text">Showing 1 to 5 of 20 results</p>
          <div class="pagination-actions">
            <button class="pagination-btn pagination-btn-disabled" type="button" disabled>Previous</button>
            <button class="pagination-btn" type="button">Next</button>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>