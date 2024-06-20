<?php
require_once '../core/Controller.php';

class ReportController extends Controller {
    public function index() {
        $reportModel = $this->loadModel('Report');
        $reports = $reportModel->getAllReports();
        $this->render('report/index', ['reports' => $reports]);
    }

    public function show($id) {
        $reportModel = $this->loadModel('Report');
        $report = $reportModel->getReportById($id);
        $this->render('report/show', ['report' => $report]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $reportModel = $this->loadModel('Report');
            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'query' => $_POST['query']
            ];
            $reportModel->createReport($data);
            header('Location: ' . BASE_URL . 'report/index');
        } else {
            $this->render('report/create');
        }
    }

    public function edit($id) {
        $reportModel = $this->loadModel('Report');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'query' => $_POST['query']
            ];
            $reportModel->updateReport($id, $data);
            header('Location: ' . BASE_URL . 'report/index');
        } else {
            $report = $reportModel->getReportById($id);
            $this->render('report/edit', ['report' => $report]);
        }
    }

    public function delete($id) {
        $reportModel = $this->loadModel('Report');
        $reportModel->deleteReport($id);
        header('Location: ' . BASE_URL . 'report/index');
    }
}
?>
