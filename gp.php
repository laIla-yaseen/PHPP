<!-- task1 -->

<?php
// تحديد ما إذا كان النموذج قد تم تقديمه أم لا
$method = $_SERVER['REQUEST_METHOD'];

// المتغيرات لتخزين القيم المدخلة
$email = "";
$password = "";

// معالجة البيانات إذا تم تقديم النموذج
if ($method === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
} elseif ($method === 'GET') {
    $email = htmlspecialchars($_GET['email']);
    $password = htmlspecialchars($_GET['password']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Login Form</h1>
    <!-- نموذج HTML -->
    <form action="" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // عرض النتائج
    if ($method === 'POST' || $method === 'GET') {
        echo "<h2>Data Submitted via $method</h2>";
        echo "<p>Email: $email</p>";
        echo "<p>Password: $password</p>";
    }
    ?>
</body>
</html>


<!-- task 2 -->

<?php
// تحقق من ما إذا كان النموذج قد تم تقديمه
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // الحصول على عنوان URL المدخل
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

    // تحقق من صحة عنوان URL
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // إعادة التوجيه إلى عنوان URL المدخل
        header("Location: $url");
        exit();
    } else {
        $error = "The URL you entered is not valid.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Redirection</title>
</head>
<body>
    <h1>Simple URL Redirection</h1>
    <!-- نموذج HTML لإدخال URL -->
    <form action="" method="post">
        <label for="url">Enter URL:</label>
        <input type="text" id="url" name="url" placeholder="http://example.com" required>
        <input type="submit" value="GO">
    </form>

    <?php
    // عرض رسالة الخطأ إذا كان عنوان URL غير صحيح
    if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    ?>
</body>
</html>
