<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
</head>
<body>

<h2>Thêm sản phẩm mới</h2>

<form action="index.php?action=storeProduct" method="POST">

    <label>Tên sản phẩm:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Giá:</label><br>
    <input type="number" name="price" required><br><br>

    <label>Mô tả:</label><br>
    <textarea name="description"></textarea><br><br>

    <label>Brand ID:</label><br>
    <input type="number" name="brand_id" required><br><br>

    <label>Category ID:</label><br>
    <input type="number" name="category_id" required><br><br>

    <button type="submit">Thêm</button>

</form>

</body>
</html>
