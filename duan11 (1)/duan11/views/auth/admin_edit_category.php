
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="sidebar-inner">
        <div class="sidebar-top">
          <div class="brand">
          
 
          </div>

          <nav class="sidebar-nav">
           
        </div>
      </div>
    </aside>

    <!-- Main -->
    <div class="main">
      <!-- Topbar -->
      <header class="topbar">
        <div class="topbar-spacer"></div>
        <div class="topbar-right">
          
          
        </div>
      </header>

      <!-- Content -->
      <main class="content">
        <div class="content-inner">
          <!-- Heading + Back -->
          <div class="heading-row">
            <h1>Chỉnh Sửa Danh Mục Sản Phẩm</h1>
            <a href="index.php?act=admin-category-list" class="back-link">
              <span class="material-symbols-outlined"></span>
              <span>Quay lại Danh mục</span>
            </a>
          </div>

          <!-- Card -->
          <div class="card">
            <form class="edit-category-form">
              <div class="form-grid">
                <!-- Left side -->
                <div class="form-left">
                  <!-- Tên Danh Mục -->
                  <div class="form-group">
                    <label for="ten-danh-muc">Tên Danh Mục</label>
                    <input
                      type="text"
                      id="ten-danh-muc"
                      value="Thiết Bị Nhà Bếp"
                      placeholder="Nhập tên danh mục"
                    >
                  </div>

                  <!-- Mô tả -->
                  <div class="form-group">
                    <label for="mo-ta">Mô tả</label>
                    <textarea
                      id="mo-ta"
                      placeholder="Nhập mô tả danh mục"
                    >Các sản phẩm và thiết bị hiện đại dành cho nhà bếp, giúp công việc nấu nướng trở nên dễ dàng và tiện lợi hơn.</textarea>
                  </div>
                </div>

                <!-- Right side: image -->
                <div class="form-right">
                  <div class="form-group">
                    <label>Icon/Hình ảnh</label>
                    <div class="image-uploader">
                      <div
                        class="image-preview"
                        aria-label="Category image for kitchen appliances"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9WwQ4G5ghMM9XR2boLyzb__CZomFY1046A7PI-hh9SFVtTcCClDQPZIwCE3eBfqSNOj1XvghLLCqpY-u3btTPj6BMng78FcvA3RP_XQkEFx6RAyQv3jGXhlF5W45z7LFr9zI57HhqYlJQGMfqUaiJsQMu-53tQr6j27S0DmlbgaK9GgsXeb7rRWsoRviZlf4cCpVnUIIvepiVFvnflOS_hroFBHRPhiBkyc_cPyFB4W7UZI7IB-SVQdE03qLEMtmYQPYyvxzrYVO0");'>
                      </div>
                      <button type="button" class="btn-link">Thay đổi ảnh</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Actions -->
              <div class="form-actions">
                <button type="button" class="btn btn-secondary">Hủy</button>
                <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
              </div>
            </form>
          </div>

        </div>
      </main>
    </div>
  </div>
</body>