
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="sidebar-top">
        <div class="sidebar-header">
          
        </div>
      </div>
    </aside>

    <!-- Main area -->
    <div class="main">
      <!-- Topbar -->
      <header class="topbar">
        <div class="topbar-left">
          <h2>Categories</h2>
        </div>

        
      </header>

      <!-- Content -->
      <main class="content">
        <div class="content-inner">
          <!-- Breadcrumbs -->
          <div class="breadcrumbs">
           
            <span></span>
            
          </div>
          <div class="page-toolbar">
          <a href="index.php?act=admin-category-list" class="btn btn-secondary btn-back">
            <span class="material-symbols-outlined">arrow_back</span>
            <span>Quay lại danh sách danh mục</span>
          </a>
        </div>
          <!-- Page Heading -->
          <div class="page-heading">
            <p>Add Product Category</p>
          </div>

          <!-- Card / Form -->
          <div class="card">
            <form class="category-form">
              <!-- Category Name -->
              <div class="form-group">
                <label for="category-name">Category Name</label>
                <input type="text" id="category-name" placeholder="Enter category name">
              </div>

              <!-- Description -->
              <div class="form-group">
                <label for="category-description">Description</label>
                <textarea id="category-description" placeholder="Enter a short description for the category"></textarea>
              </div>

              <!-- Image Uploader -->
              <div class="form-group">
                <label>Category Image/Icon</label>
                <div class="upload-box">
                  <div class="upload-inner">
                    <span class="material-symbols-outlined upload-icon">image</span>
                    <div class="upload-text-row">
                      <label for="file-upload" class="upload-button">
                        <span>Upload a file</span>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                      </label>
                      <p class="upload-or">or drag and drop</p>
                    </div>
                    <p class="upload-hint">PNG, JPG, GIF up to 10MB</p>
                  </div>
                </div>
              </div>

              <!-- Actions -->
              <div class="form-actions">
              <button
                type="button"
                class="btn btn-secondary"
                onclick="window.location.href='admin-category.html'">
                Back
              </button>
              <button type="submit" class="btn btn-primary">Add Category</button>
            </div>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>