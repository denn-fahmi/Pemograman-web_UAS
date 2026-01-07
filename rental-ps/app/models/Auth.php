<?php
class Auth extends Database {
    public function login($username, $password) {
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Catatan: Gunakan password_verify jika password di database di-hash
        if ($user && $password == $user['password']) {
            $_SESSION['user_id'] = $user['id_user'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['username'];
            return $user['role'];
        }
        return false;
    }
}