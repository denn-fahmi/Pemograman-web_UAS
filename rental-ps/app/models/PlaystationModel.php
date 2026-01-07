<?php
class PlaystationModel extends Database {
    public function getAllData($search = '', $filter = '', $limit = 5, $offset = 0) {
        $sql = "SELECT * FROM playstation WHERE nama_unit LIKE :search";
        if($filter) $sql .= " AND jenis = :filter";
        $sql .= " LIMIT :limit OFFSET :offset";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':search', "%$search%");
        if($filter) $stmt->bindValue(':filter', $filter);
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM playstation WHERE id_ps = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function countAll($search = '', $filter = '') {
        $sql = "SELECT COUNT(*) as total FROM playstation WHERE nama_unit LIKE :search";
        if($filter) $sql .= " AND jenis = :filter";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':search' => "%$search%"]);
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function create($data) {
        $sql = "INSERT INTO playstation (nama_unit, jenis, harga_per_jam, status, gambar) VALUES (?, ?, ?, ?, ?)";
        return $this->db->prepare($sql)->execute([
            $data['nama_unit'], $data['jenis'], $data['harga_per_jam'], $data['status'], $data['gambar']
        ]);
    }

    public function update($data) {
        $sql = "UPDATE playstation SET nama_unit=?, jenis=?, harga_per_jam=?, status=?, gambar=? WHERE id_ps=?";
        return $this->db->prepare($sql)->execute([
            $data['nama_unit'], $data['jenis'], $data['harga_per_jam'], $data['status'], $data['gambar'], $data['id_ps']
        ]);
    }

    public function delete($id) {
        return $this->db->prepare("DELETE FROM playstation WHERE id_ps = ?")->execute([$id]);
    }
}