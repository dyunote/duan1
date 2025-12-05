<?php
class CartModel
{
    public function getCart()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        return $_SESSION['cart'];
    }


    public function addItem($id, $name, $price, $image, $color, $qty = 1)
    {
        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = [
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'image' => $image,
                'color' => $color,
                'qty' => $qty,
                'total' => $price * $qty
            ];
        } else {
            $_SESSION['cart'][$id]['qty'] += $qty;
            $_SESSION['cart'][$id]['total'] = $_SESSION['cart'][$id]['qty'] * $price;
        }
    }


    public function updateQty($id, $qty)
    {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['qty'] = $qty;
            $_SESSION['cart'][$id]['total'] = $qty * $_SESSION['cart'][$id]['price'];
        }
    }


    public function deleteItem($id)
    {
        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }
    }


    public function getTotal()
    {
        $total = 0;
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['total'];
        }
        return $total;
    }
}
