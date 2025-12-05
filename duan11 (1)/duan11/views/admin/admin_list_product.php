<?php // views/admin/list_product.php ?>
  <link rel="stylesheet" href="public/css/admin_list_product.css">
  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-top">
      <div class="sidebar-header">
        <div
          class="avatar avatar-logo"
          data-alt="CasaGo company logo"
          style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDDdeIttfpge29kiOCKGUUtHNLz5RWfpw2sRRfra-f5ttMfc3aKZDFV_Dha0W4cBFRCkm6sUyejSwxYRpe5ZjTsfYrx18vs85OYAwcoSwn50HXR3pXLymB87OMGOSwbY5xZvyijzSHY6rSBMYwhAxiOZ9A7r6DUvqce42IbUCwyA1yDjFKmlvRSj5IC5gckdLJntL3_q-8H4EV1JZjgtbf7OA_W0IXLh-yy_MgdcaT83jw61qtgR73rtAgG3c2qTXgocb-RLnrYVRwZ");'>
        </div>
        <div class="sidebar-title">
          <h1>CasaGo</h1>
          <p>Admin</p>
        </div>
      </div>

      <nav class="sidebar-nav">
        <!-- Đổi href sang route MVC -->
        <a href="index.php?act=admin-dashboard" class="nav-link">
          <span class="material-symbols-outlined">dashboard</span>
          <span>Dashboard</span>
        </a>
        <a href="index.php?act=admin-product-list" class="nav-link nav-link-active">
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
    </div>
  </aside>

  <!-- MAIN -->
  <main class="main">
    <!-- TOPBAR -->
    <header class="topbar">
      <div class="topbar-left">
        <!-- có thể thêm search trên header sau -->
      </div>
      <div class="topbar-right">
        <!-- dùng thẻ <a> làm nút bấm, không bọc trong <button> -->
        <a href="index.php?act=admin-product-add" class="btn btn-primary" type="button">
          <span class="material-symbols-outlined btn-icon">add</span>
          <span>Thêm sản phẩm</span>
        </a>
      </div>
    </header>

    <!-- NỘI DUNG CHÍNH -->
    <div class="main-content">
      <!-- Tiêu đề trang -->
      <div class="page-header">
        <h2>Danh sách sản phẩm</h2>
      </div>

      <!-- Thanh tìm kiếm + bộ lọc -->
      <div class="product-toolbar">
        <div class="search-box">
          <span class="material-symbols-outlined search-icon">search</span>
          <input
            type="text"
            class="search-input"
            placeholder="Tìm kiếm sản phẩm theo tên, SKU..." />
        </div>

        <div class="filter-group">
          <button class="filter-btn filter-btn--with-icon active" type="button">
            <span>Tất cả</span>
            <span class="material-symbols-outlined filter-icon">expand_more</span>
          </button>
          <button class="filter-btn" type="button">Tủ lạnh</button>
          <button class="filter-btn" type="button">Máy giặt</button>
          <button class="filter-btn" type="button">Điều hoà</button>
        </div>
      </div>

      <!-- Bảng sản phẩm -->
      <section class="card">
        <div class="table-wrapper">
          <table class="product-table">
            <thead>
              <tr>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>SKU</th>
                <th>Giá</th>
                <th>Tồn kho</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div
                    class="thumb"
                    data-alt="Image of a refrigerator"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9IIX5zj_EAaC8eJpRoJbm4qiAGi_dvz323LJauaCG1MgTJUSXs5iI-oW63Bd4kDTMgNr68FYFi9vHvpzLyNURpS2qvCgR7MQbsIGE4l5cFsAAe1hwF8dq9zAWhN8qfioGFKfmdVor8ezZc8Wqk5lnqC0oV6jVP1kJGhd8T-aqau2WOFB3ZGWIKYbijFqf982tGRrPemZG3M5-1pm20t_TLrWsoGD69flilJQhGwp30piPKFXr33RLIzsFf8o1qelpF_tUb7dVe8id");'>
                  </div>
                </td>
                <td class="cell-bold">Tủ lạnh Inverter 256L</td>
                <td>TL-INV-256</td>
                <td>8.490.000đ</td>
                <td>150</td>
                <td>
                  <span class="badge badge-success">Còn hàng</span>
                </td>
                <td>
                  <div class="action-group">
                    <a href="index.php?act=admin-product-edit&id=1" class="action-btn action-edit">
                      <span class="material-symbols-outlined">edit</span>
                    </a>
                    <button class="action-btn action-delete" type="button">
                      <span class="material-symbols-outlined">delete</span>
                    </button>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div
                    class="thumb"
                    data-alt="Image of an air conditioner"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuANWSSjs2j5to_hBVBS_9lODY-yTFg7_tlPYOfM9egClK4FmwiKX0wcXbGTUkF03YQ097Zc91uFKkG_9TH7iwPp3LVETAH5QJFjXARy71wedFi8wCRQIQGywHOFS6-wLVoN5-BhF_O8_LV0a8ITUfc2aH_DBDqcE7HibBMmQG140w_BVbCyL3a1VeMuZFWmA3ukr5UJfUUiwJPkjekFPcgFEtsqGD-iLHf6Nd-JtklXoSjavazGP4RDGBR228He0PIXKZYD-JDkCPux");'>
                  </div>
                </td>
                <td class="cell-bold">Điều hoà 1.5HP</td>
                <td>DH-1.5HP</td>
                <td>9.200.000đ</td>
                <td>0</td>
                <td>
                  <span class="badge badge-danger">Hết hàng</span>
                </td>
                <td>
                  <div class="action-group">
                    <a href="index.php?act=admin-product-edit&id=2" class="action-btn action-edit">
                      <span class="material-symbols-outlined">edit</span>
                    </a>
                    <button class="action-btn action-delete" type="button">
                      <span class="material-symbols-outlined">delete</span>
                    </button>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

        <!-- PHÂN TRANG -->
        <div class="pagination-bar">
          <ul class="pagination-list">
            <li><a href="#" class="page-link">Previous</a></li>
            <li><a href="#" class="page-link">1</a></li>
            <li><a href="#" class="page-link page-link--active">2</a></li>
            <li><a href="#" class="page-link">...</a></li>
            <li><a href="#" class="page-link">100</a></li>
            <li><a href="#" class="page-link">Next</a></li>
          </ul>
        </div>
      </section>
    </div>
  </main>

