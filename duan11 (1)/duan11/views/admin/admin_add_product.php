<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>CasaGo Admin - Add Product</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

  <!-- CSS ĐẶT TRỰC TIẾP TRONG FILE -->
  <style>
    :root {
      --primary: #cc193a;
      --background: #f8f6f6;
      --ui: #ffffff;
      --text-main: #111827;
      --text-subtle: #6b7280;
      --border: #e5e7eb;

      --dropzone-bg: #faf5f0;
      --dropzone-border: #e5e7eb;
    }

    /* RESET */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
      background-color: var(--background);
      color: var(--text-main);
    }

    /* MATERIAL ICON FONT */
    .material-symbols-outlined {
      font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
      vertical-align: middle;
    }

    .material-symbols-outlined.fill {
      font-variation-settings: "FILL" 1, "wght" 400, "GRAD" 0, "opsz" 24;
    }

    /* LAYOUT CHUNG */
    .layout {
      display: flex;
      min-height: 100vh;
    }

    /* SIDEBAR */
    .sidebar {
      width: 260px;
      background-color: var(--ui);
      border-right: 1px solid var(--border);
      padding: 16px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .sidebar-top {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .sidebar-header {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .avatar {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      border-radius: 999px;
    }

    .avatar-logo {
      width: 40px;
      height: 40px;
    }

    .sidebar-title h1 {
      font-size: 16px;
      font-weight: 600;
    }

    .sidebar-title p {
      font-size: 13px;
      color: var(--text-subtle);
    }

    .sidebar-nav,
    .sidebar-bottom {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .nav-link {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 8px 10px;
      border-radius: 8px;
      text-decoration: none;
      color: var(--text-main);
      font-size: 14px;
      transition: background-color 0.15s ease, color 0.15s ease;
    }

    .nav-link .material-symbols-outlined {
      font-size: 20px;
      color: #4b5563;
    }

    .nav-link:hover {
      background-color: rgba(0, 0, 0, 0.04);
    }

    .nav-link.active {
      background-color: rgba(204, 25, 58, 0.12);
      color: var(--primary);
    }

    .nav-link.active .material-symbols-outlined {
      color: var(--primary);
    }

    /* MAIN */
    .main {
      flex: 1;
    }

    .main-inner {
      max-width: 960px;
      margin: 0 auto;
      padding: 24px;
    }

    /* HEADER TRANG */
    .page-header {
      margin-bottom: 24px;
    }

    .page-header h2 {
      font-size: 28px;
      font-weight: 900;
      letter-spacing: -0.03em;
      margin-bottom: 6px;
    }

    .page-header p {
      font-size: 14px;
      color: var(--text-subtle);
    }

    /* CARD FORM */
    .card {
      background-color: var(--ui);
      border-radius: 12px;
      border: 1px solid var(--border);
      padding: 24px;
    }

    /* FORM GRID */
    .product-form {
      width: 100%;
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px 24px;
    }

    .field--full {
      grid-column: 1 / -1;
    }

    @media (min-width: 768px) {
      .form-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }

    /* FORM FIELD */
    .form-field {
      display: flex;
      flex-direction: column;
    }

    .field-label {
      font-size: 14px;
      font-weight: 500;
      color: #111827;
      margin-bottom: 6px;
    }

    /* INPUT, SELECT, TEXTAREA */
    .input,
    .select,
    .textarea {
      border-radius: 8px;
      border: 1px solid #d1d5db;
      padding: 10px 12px;
      font-size: 14px;
      color: var(--text-main);
      background-color: #ffffff;
      outline: none;
      transition: border-color 0.15s ease, box-shadow 0.15s ease;
    }

    .input:focus,
    .select:focus,
    .textarea:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 2px rgba(204, 25, 58, 0.2);
    }

    .input::placeholder,
    .textarea::placeholder {
      color: #9ca3af;
    }

    .textarea {
      resize: vertical;
      min-height: 120px;
    }

    /* UPLOAD DROPZONE */
    .upload-dropzone {
      border-radius: 12px;
      border: 2px dashed var(--dropzone-border);
      background-color: #fafaf9;
      padding: 24px;
      cursor: pointer;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background-color 0.15s ease, border-color 0.15s ease;
    }

    .upload-dropzone:hover {
      background-color: #f5f5f4;
      border-color: #d4d4d4;
    }

    .upload-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
    }

    .upload-icon {
      font-size: 32px;
      color: #6b7280;
    }

    .upload-title {
      font-size: 13px;
      color: #6b7280;
    }

    .upload-strong {
      font-weight: 600;
      color: #4b5563;
    }

    .upload-help {
      font-size: 12px;
      color: #9ca3af;
    }

    .upload-input {
      display: none;
    }

    /* RADIO GROUP */
    .radio-group {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .radio-option {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      color: #111827;
    }

    .radio-option input[type="radio"] {
      width: 16px;
      height: 16px;
    }

    /* BUTTONS */
    .form-actions {
      margin-top: 24px;
      padding-top: 16px;
      border-top: 1px solid var(--border);
      display: flex;
      justify-content: flex-end;
      gap: 10px;
    }

    .btn {
      border-radius: 8px;
      border: 1px solid transparent;
      padding: 8px 16px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      text-decoration: none;
    }

    .btn-primary {
      background-color: var(--primary);
      color: #ffffff;
    }

    .btn-primary:hover {
      filter: brightness(0.96);
    }

    .btn-secondary {
      background-color: #ffffff;
      color: #374151;
      border-color: #d1d5db;
    }

    .btn-secondary:hover {
      background-color: #f3f4f6;
    }

    .btn-back {
      margin-bottom: 16px;
      display: inline-flex;
      align-items: center;
    }
  </style>
</head>
<body>
  
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="sidebar-top">
        <div class="sidebar-header">
         
        </div>
      </div>
    </aside>

    <!-- MAIN -->
    <main class="main">
      <div class="main-inner">
        <!-- Page heading -->
        <div class="page-header">
          <h2>Add New Product</h2>
          
        </div>

        <a href="index.php?act=admin-product-list" class="btn btn-secondary btn-back">
          ← Quay lại trang sản phẩm
        </a>

        <!-- Card Form -->
        <section class="card">
          <form action="#" method="POST" class="product-form">
            <div class="form-grid">
              <!-- Tên sản phẩm -->
              <div class="form-field field--full">
                <label class="field-label" for="product-name">
                  Tên sản phẩm (Product Name)
                </label>
                <input
                  id="product-name"
                  name="product_name"
                  type="text"
                  class="input"
                  placeholder="Enter product name" />
              </div>

              <!-- Giá -->
              <div class="form-field">
                <label class="field-label" for="price">
                  Giá (Price)
                </label>
                <input
                  id="price"
                  name="price"
                  type="number"
                  class="input"
                  placeholder="e.g., 15000000" />
              </div>

              <!-- SKU -->
              <div class="form-field">
                <label class="field-label" for="sku">
                  SKU
                </label>
                <input
                  id="sku"
                  name="sku"
                  type="text"
                  class="input"
                  placeholder="e.g., CG-APL-001" />
              </div>

              <!-- Danh mục -->
              <div class="form-field field--full">
                <label class="field-label" for="category">
                  Danh mục (Category)
                </label>
                <select id="category" name="category_id" class="select">
                  <option value="">Select a category</option>
                  <option value="appliances">Household Appliances</option>
                  <option value="kitchen">Kitchenware</option>
                  <option value="electronics">Electronics</option>
                </select>
              </div>

              <!-- Ảnh sản phẩm -->
              <div class="form-field field--full">
                <p class="field-label">Ảnh sản phẩm (Product Image)</p>
                <label for="dropzone-file" class="upload-dropzone">
                  <div class="upload-content">
                    <span class="material-symbols-outlined upload-icon">cloud_upload</span>
                    <p class="upload-title">
                      <span class="upload-strong">Click to upload</span> or drag and drop
                    </p>
                    <p class="upload-help">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                  </div>
                  <input id="dropzone-file" name="image" type="file" class="upload-input" />
                </label>
              </div>

              <!-- Mô tả -->
              <div class="form-field field--full">
                <label class="field-label" for="description">
                  Mô tả (Description)
                </label>
                <textarea
                  id="description"
                  name="description"
                  rows="5"
                  class="textarea"
                  placeholder="Add a detailed description for the product..."></textarea>
              </div>

              <!-- Trạng thái -->
              <div class="form-field field--full">
                <p class="field-label">Trạng thái (Status)</p>
                <div class="radio-group">
                  <label class="radio-option">
                    <input
                      type="radio"
                      name="status"
                      value="for-sale"
                      checked />
                    <span>Đang bán (For Sale)</span>
                  </label>
                  <label class="radio-option">
                    <input
                      type="radio"
                      name="status"
                      value="discontinued" />
                    <span>Ngừng bán (Discontinued)</span>
                  </label>
                </div>
              </div>
            </div>

            <!-- Buttons -->
            <div class="form-actions">
              <button type="button" class="btn btn-secondary">
                Hủy (Cancel)
              </button>
              <button type="submit" class="btn btn-primary">
                Lưu sản phẩm (Save Product)
              </button>
            </div>
          </form>
        </section>
      </div>
    </main>
  </div>
</body>
</html>
