<link rel="stylesheet" href="public/css/admin_edit_customer.css">
<body>
  
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="sidebar-inner">
        <div>
          
          </div>

          

       
      </div>
    </aside>

    <!-- MAIN -->
    <div class="main">
      <!-- TOPBAR -->
      <header class="topbar">
        <div class="topbar-left">
          <a href="index.php?act=admin-customer-list" class="icon-btn-outline" title="Quay lại danh sách người dùng">
            <span class="material-symbols-outlined">arrow_back</span>
          </a>
          <h1 class="topbar-title">Edit User</h1>
        </div>
        
      </header>

      <!-- CONTENT -->
      <main class="content">
        <div class="card">
          <!-- Tiêu đề card -->
          <div class="card-header">
            <h2>Chỉnh sửa người dùng</h2>
            <p>Cập nhật thông tin chi tiết và quyền của người dùng.</p>
          </div>

          <!-- Nội dung form -->
          <div class="card-body">
            <!-- Fieldset: Thông tin người dùng -->
            <fieldset class="fieldset">
              <legend>Thông tin người dùng</legend>

              <div class="form-row">
                <div class="form-group">
                  <label for="username">Tên người dùng</label>
                  <input
                    id="username"
                    type="text"
                    class="input"
                    value="Nguyễn Văn A" />
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                    id="email"
                    type="email"
                    class="input"
                    value="nguyenvana@email.com" />
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="phone">Số điện thoại</label>
                  <input
                    id="phone"
                    type="tel"
                    class="input"
                    value="0987654321" />
                </div>
                <div class="form-group form-group--full">
                  <label for="address">Địa chỉ</label>
                  <input
                    id="address"
                    type="text"
                    class="input"
                    value="123 Đường ABC, Phường X, Quận Y, TP. Z" />
                </div>
              </div>
            </fieldset>

            <!-- Fieldset: Quyền & Trạng thái -->
            <fieldset class="fieldset">
              <legend>Quyền &amp; Trạng thái</legend>

              <div class="form-row">
                <div class="form-group">
                  <label for="role">Vai trò</label>
                  <div class="select-wrapper">
                    <select id="role" class="select">
                      <option>User</option>
                      <option selected>Admin</option>
                    </select>
                    <span class="material-symbols-outlined select-icon">
                      expand_more
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Trạng thái</label>
                  <div class="radio-group">
                    <label class="radio-option">
                      <input type="radio" name="status" value="active" checked />
                      <span>Hoạt động</span>
                    </label>
                    <label class="radio-option">
                      <input type="radio" name="status" value="inactive" />
                      <span>Vô hiệu hoá</span>
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>

            <!-- Đổi mật khẩu 
            <div class="extra-actions">
              <button type="button" class="link-button">
                Đổi mật khẩu
              </button>
            </div>
          </div>-->

          <!-- Footer nút -->
          <div class="card-footer">
            <button class="btn btn-secondary" type="button">
              Huỷ
            </button>
            <button class="btn btn-primary" type="submit">
              Lưu thay đổi
            </button>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>