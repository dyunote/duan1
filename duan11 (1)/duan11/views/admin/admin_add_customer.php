<body>
  
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="sidebar-inner">
        <div class="sidebar-top">
          <div class="sidebar-header">
          
    </aside>

    <!-- MAIN -->
    <div class="main">
      <!-- TOP BAR -->
      <header class="topbar">
        <div class="topbar-left">
          <a href="index.php?act=admin-customer-list" class="back-link">
            <span class="material-symbols-outlined">arrow_back</span>
          </a>
          <h1 class="topbar-title">Add New User</h1>
        </div>
        <div class="topbar-right">
         
      </header>

      <!-- MAIN CONTENT -->
      <main class="content">
        <div class="card">
          <div class="card-header">
            <h2>User Information</h2>
            <p>Fill in the details below to add a new user to the system.</p>
          </div>

          <form class="form">
            <div class="form-row">
              <div class="form-group">
                <label for="username">Tên người dùng</label>
                <input
                  id="username"
                  type="text"
                  class="input"
                  placeholder="Enter username" />
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input
                  id="email"
                  type="email"
                  class="input"
                  placeholder="Enter email address" />
              </div>
            </div>

            <!-- Mật khẩu -->
            <div class="form-group">
              <label for="password">Mật khẩu</label>
              <div class="input-with-icon">
                <input
                  id="password"
                  type="password"
                  class="input input-no-radius-right"
                  placeholder="Enter password" />
                <button
                  type="button"
                  class="icon-btn icon-btn-inline"
                  aria-label="Toggle password visibility">
                  <span class="material-symbols-outlined">visibility</span>
                </button>
              </div>
            </div>

            <!-- Hàng 2: SĐT + Địa chỉ -->
            <div class="form-row">
              <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input
                  id="phone"
                  type="tel"
                  class="input"
                  placeholder="Enter phone number" />
              </div>

              <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input
                  id="address"
                  type="text"
                  class="input"
                  placeholder="Enter address" />
              </div>
            </div>

            <!-- Hàng 3: Vai trò + Trạng thái -->
            <div class="form-row">
              <div class="form-group">
                <label for="role">Vai trò</label>
                <div class="select-wrapper">
                  <select id="role" class="select">
                    <option>Select a role</option>
                    <option>Admin</option>
                    <option>Sales Staff</option>
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
                    <span>Active</span>
                  </label>
                  <label class="radio-option">
                    <input type="radio" name="status" value="inactive" />
                    <span>Inactive</span>
                  </label>
                </div>
              </div>
            </div>

            <!-- Nút -->
            <div class="form-actions">
              
              <button type="submit" class="btn btn-primary">
                Add User
              </button>
            </div>
          </form>
        </div>
      </main>
    </div>
  </div>
</body>