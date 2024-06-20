<?php
require_once '../core/Model.php';

class Report extends Model {
    public function getAllReports() {
        $result = $this->query('SELECT * FROM reports');
        $reports = [];
        while ($row = $result->fetch_assoc()) {
            $reports[] = $row;
        }
        return $reports;
    }

    public function getReportById($id) {
        $id = $this->escape($id);
        $result = $this->query("SELECT * FROM reports WHERE id = '$id'");
        return $result->fetch_assoc();
    }

    public function createReport($data) {
        $title = $this->escape($data['title']);
        $description = $this->escape($data['description']);
        $query = $this->escape($data['query']);
        $sql = "INSERT INTO reports (title, description, query) VALUES ('$title', '$description', '$query')";
        return $this->query($sql);
    }

    public function updateReport($id, $data) {
        $id = $this->escape($id);
        $title = $this->escape($data['title']);
        $description = $this->escape($data['description']);
        $query = $this->escape($data['query']);
        $sql = "UPDATE reports SET title = '$title', description = '$description', query = '$query' WHERE id = '$id'";
        return $this->query($sql);
    }

    public function deleteReport($id) {
        $id = $this->escape($id);
        $sql = "DELETE FROM reports WHERE id = '$id'";
        return $this->query($sql);
    }
}
?>
