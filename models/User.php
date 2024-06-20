<?php
require_once '../core/Model.php';

class User extends Model {
    public function getAllBarbers() {
        $result = $this->query("SELECT * FROM users WHERE rol = 'barber'");
        $barbers = [];
        while ($row = $result->fetch_assoc()) {
            $barbers[] = $row;
        }
        return $barbers;
    }

    public function getUserById($id) {
        $id = $this->escape($id);
        $result = $this->query("SELECT * FROM users WHERE id = $id");
        return $result->fetch_assoc();
    }

    public function createRate($id, $data) {
        $id = $this->escape($id);
        $rating = $this->escape($data['rating']);
        $comment = $this->escape($data['comment']);
        $sql = "INSERT reviews (id_user, rating, comment) VALUES ($id, $rating, '$comment')";
        return $this->query($sql);
    }

    public function getReviews($id) {
        $id = $this->escape($id);
        $result = $this->query("SELECT * FROM reviews WHERE id_user = $id");
        $reviews = [];
        while ($row = $result->fetch_assoc()) {
            $reviews[] = $row;
        }
        return $reviews;
    }
}

?>
