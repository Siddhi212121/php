<!DOCTYPE html>
<html>
<head>
    <title>Student Search</title>
</head>
<body>
    <h1>Student Search</h1>
    <form method="post">
        <label for="year">Year:</label>
        <input type="text" name="year" id="year">
        <br>
        <label for="grades">Grades:</label>
        <select name="grades" id="grades">
            <option value="First Class">First Class</option>
            <option value="Second Class">Second Class</option>
            <option value="Pass">Pass</option>
        </select>
        <br>
        <input type="submit" name="search" value="Search">
    </form>

    <h2>Add New Student</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="dept">Department:</label>
        <input type="text" name="dept" id="dept">
        <br>
        <label for="passingYear">Passing Year:</label>
        <input type="text" name="passingYear" id="passingYear">
        <br>
        <label for="newGrades">Grades:</label>
        <select name="newGrades" id="newGrades">
            <option value="First Class">First Class</option>
            <option value="Second Class">Second Class</option>
            <option value="Pass">Pass</option>
        </select>
        <br>
        <input type="submit" name="insert" value="Insert Student">
    </form>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'info');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['search'])) {
        // Handle the search functionality as previously shown
        // ...
        $itemID = $_POST['itemID'];
        $itemName = $_POST['itemName'];
        $itemQuantity = $_POST['itemQuantity'];
      
    

    } elseif (isset($_POST['insert'])) {
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $passingYear = $_POST['passingYear'];
        $newGrades = $_POST['newGrades'];

        $sql = 'INSERT INTO student (stuName, stuDept, passingYear, classGrade) VALUES (?, ?, ?, ?)';
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'ssis', $name, $dept, $passingYear, $newGrades);

        if (mysqli_stmt_execute($stmt)) {
            echo 'Student record inserted successfully.';
        } else {
            echo 'Error inserting student record: ' . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
    ?>
</body>
</html>