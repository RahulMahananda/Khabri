<!DOCTYPE html>
<html>
<head>
    <title>School Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the School Management System</h1>

        <h2>Timetable</h2>
        <table>
            <tr>
                <th>Class</th>
                <th>Subject</th>
                <th>Teacher</th>
                <th>Time</th>
            </tr>
            <?php
            $conn = new mysqli("localhost", "root", "", "school_db");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $result = $conn->query("SELECT * FROM timetable");
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["class"]. "</td>
                            <td>" . $row["subject"]. "</td>
                            <td>" . $row["teacher"]. "</td>
                            <td>" . $row["time"]. "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }
            $conn->close();
            ?>
        </table>

        <h2>Notices</h2>
        <table>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Date</th>
            </tr>
            <?php
            $conn = new mysqli("localhost", "root", "", "school_db");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $result = $conn->query("SELECT * FROM notices");
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["title"]. "</td>
                            <td>" . $row["content"]. "</td>
                            <td>" . $row["date"]. "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>0 notices</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
