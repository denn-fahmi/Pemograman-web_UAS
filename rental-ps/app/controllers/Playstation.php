<?php
class Playstation extends Controller {
    public function index() {
        $model = new PlaystationModel();
        
        // Ambil data dari URL untuk Search, Filter, & Page
        $search = $_GET['search'] ?? '';
        $filter = $_GET['filter'] ?? '';
        $page = $_GET['page'] ?? 1;
        $limit = 5;
        $offset = ($page - 1) * $limit;

        $data['ps'] = $model->getAllData($search, $filter, $limit, $offset);
        $totalData = $model->countAll($search, $filter);
        $data['totalPages'] = ceil($totalData / $limit);

        // Load View [cite: 7]
        $this->view('layout/header');
        $this->view('ps/index', $data);
        $this->view('layout/footer');
    }
}