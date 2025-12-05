
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="sidebar-inner">
        <div class="sidebar-top">
          <div class="sidebar-brand">
          </div>
        </div>
        <div class="sidebar-bottom">
        </div>
      </div>
    </aside>
    <main class="main">
      <header class="topbar">
            <div class="topbar-left">
        <div class="topbar-right">
      </header>
      <section class="content">
        <!-- Nút quay lại -->
        <div class="page-toolbar">
          <a href="index.php?act=admin-product-list" class="btn btn-secondary btn-back">
            <span class="material-symbols-outlined">arrow_back</span>
            <span>Quay lại danh sách sản phẩm</span>
          </a>
        </div>
        <div class="page-heading">
          <h1>Edit Product</h1>
        </div>
        <div class="card">
          <div class="form-layout">
            <div class="form-left">
              <div class="form-group">
                <label class="field-label" for="product-name">Tên (Name)</label>
                <input
                  id="product-name"
                  type="text"
                  class="input"
                  value="Smart Refrigerator" />
              </div>

              <!-- Description -->
              <div class="form-group">
                <label class="field-label" for="product-desc">Mô tả (Description)</label>
                <textarea
                  id="product-desc"
                  class="textarea"
                  rows="5">The Smart Refrigerator with advanced cooling technology, spacious interior, and a sleek modern design. Connects to your WiFi for smart features.</textarea>
              </div>

              <!-- Price + SKU -->
              <div class="form-row">
                <div class="form-group">
                  <label class="field-label" for="price">Giá (Price)</label>
                  <input
                    id="price"
                    type="text"
                    class="input"
                    value="25,000,000" />
                </div>
                <div class="form-group">
                  <label class="field-label" for="sku">SKU</label>
                  <input
                    id="sku"
                    type="text"
                    class="input"
                    value="CASA-REF-001" />
                </div>
              </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="form-right">
              <!-- Image -->
              <div class="form-group">
                <p class="field-label">Ảnh (Image)</p>
                <div class="image-upload">
                  <div class="image-preview">
                    <img
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDKfCINx0ZyPq4DZIjetqCEo6wSTjekIuBbAjh4ZwCuAyFBITd6fD-2V609UBrzU-O5_CoDGsZhnTSKbqJL06MDtBbL-KcEzNTqgGeSjLLixpGBuLr5sdxFuM-hmxBcs4cN1k3jRaVbFaL4Z0omnVWrAZZbsBAOm2ymqkDifLeLnugl3QAmSEqLDRewYzwA69SqH6517D0aGXvKA6RZfhJDp_h-fSdBiRTOvS40aujZ3_Am_q7llcipy4e2girv9B5n7x2-Mm9DwSL"
                      alt="A modern smart refrigerator" />
                    <div class="image-overlay">
                      <button type="button" class="btn-image-replace">Replace</button>
                    </div>
                  </div>
                  <p class="image-help">Click image to replace. JPG, PNG, GIF up to 5MB.</p>
                </div>
              </div>

              <!-- Category -->
              <div class="form-group">
                <label class="field-label" for="category">Danh mục (Category)</label>
                <select id="category" class="select">
                  <option>Kitchen Appliances</option>
                  <option selected>Household Appliances</option>
                  <option>Smart Home</option>
                </select>
              </div>

              <!-- Status -->
              <div class="form-group">
                <p class="field-label">Trạng thái (Status)</p>
                <div class="radio-group">
                  <label class="radio-option">
                    <input type="radio" name="status" checked />
                    <span>Published</span>
                  </label>
                  <label class="radio-option">
                    <input type="radio" name="status" />
                    <span>Draft</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Actions -->
          <div class="form-actions">
            <button type="button" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>