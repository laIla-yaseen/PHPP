<?php
include 'TaskManager.php';

// إعدادات قاعدة البيانات
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'task_manager';

// إنشاء كائن لإدارة المهام
$taskManager = new TaskManager($host, $user, $password, $dbname);

// معالجة النموذج
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['create'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $taskManager->createTask($title, $description);
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $taskManager->updateTask($id, $title, $description);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $taskManager->deleteTask($id);
    }
}

// قراءة المهام
$tasks = $taskManager->readTasks();
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>إدارة المهام</title>
</head>
<body>
    <h1>إدارة المهام</h1>

    <h2>إضافة مهمة جديدة</h2>
    <form method="post">
        <label>العنوان:</label>
        <input type="text" name="title" required>
        <br>
        <label>الوصف:</label>
        <textarea name="description" required></textarea>
        <br>
        <button type="submit" name="create">إضافة مهمة</button>
    </form>

    <h2>تحديث أو حذف مهمة</h2>
    <form method="post">
        <label>رقم المهمة:</label>
        <input type="number" name="id" required>
        <br>
        <label>العنوان:</label>
        <input type="text" name="title">
        <br>
        <label>الوصف:</label>
        <textarea name="description"></textarea>
        <br>
        <button type="submit" name="update">تحديث مهمة</button>
        <button type="submit" name="delete">حذف مهمة</button>
    </form>

    <h2>قائمة المهام</h2>
    <table border="1">
        <tr>
            <th>رقم المهمة</th>
            <th>العنوان</th>
            <th>الوصف</th>
            <th>تاريخ الإنشاء</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?php echo htmlspecialchars($task['id']); ?></td>
            <td><?php echo htmlspecialchars($task['title']); ?></td>
            <td><?php echo htmlspecialchars($task['description']); ?></td>
            <td><?php echo htmlspecialchars($task['created_at']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
