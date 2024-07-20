<?php
class TaskManager {
    private $conn;

    // إنشاء اتصال بقاعدة البيانات
    public function __construct($host, $user, $password, $dbname) {
        $this->conn = new mysqli($host, $user, $password, $dbname);

        if ($this->conn->connect_error) {
            die("فشل الاتصال: " . $this->conn->connect_error);
        }
    }

    // إنشاء مهمة جديدة
    public function createTask($title, $description) {
        $stmt = $this->conn->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $description);
        return $stmt->execute();
    }

    // قراءة جميع المهام
    public function readTasks() {
        $result = $this->conn->query("SELECT * FROM tasks");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // تحديث مهمة
    public function updateTask($id, $title, $description) {
        $stmt = $this->conn->prepare("UPDATE tasks SET title = ?, description = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title, $description, $id);
        return $stmt->execute();
    }

    // حذف مهمة
    public function deleteTask($id) {
        $stmt = $this->conn->prepare("DELETE FROM tasks WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    // إغلاق الاتصال بقاعدة البيانات
    public function __destruct() {
        $this->conn->close();
    }
}
?>
