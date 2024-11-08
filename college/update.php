<!DOCTYPE html>
<html>
<head>
    <title>Update School Information</title>
</head>
<body>
    <h1>Update Timetable</h1>
    <form action="update_timetable.php" method="post">
        Class: <input type="text" name="class"><br>
        Subject: <input type="text" name="subject"><br>
        Teacher: <input type="text" name="teacher"><br>
        Time: <input type="text" name="time"><br>
        <input type="submit">
    </form>

    <h1>Update Notices</h1>
    <form action="update_notice.php" method="post">
        Title: <input type="text" name="title"><br>
        Content: <textarea name="content"></textarea><br>
        <input type="submit">
    </form>
</body>
</html>
