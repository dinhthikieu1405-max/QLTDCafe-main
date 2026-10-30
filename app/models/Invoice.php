
<?php
class Invoice {
    private $id;
    private $staff_name;
    private $drink_name;
    private $quantity;
    private $total_price;
    private $created_at;

    public function __construct($id, $staff_name, $drink_name, $quantity, $total_price, $created_at) {
        $this->id = $id;
        $this->staff_name = $staff_name;
        $this->drink_name = $drink_name;
        $this->quantity = $quantity;
        $this->total_price = $total_price;
        $this->created_at = $created_at;
    }

    public function getId() {
        return $this->id;
    }

    public function getStaffName() {
        return $this->staff_name;
    }

    public function getDrinkName() {
        return $this->drink_name;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getTotalPrice() {
        return $this->total_price;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }
}
?>
