<?php
require_once('../../dbConnection.php');
session_start();

$conn = dbConnection();

if (!isset($_SESSION['employee_id'])) {
    header("Location: ../index.php");
    exit();
}

$employee_id = $_SESSION['employee_id'];
$stmt = $conn->prepare("SELECT position, fname, lname FROM employees WHERE employee_id = ?");
$stmt->bind_param("s", $employee_id);
$stmt->execute();
$stmt->bind_result($role, $staff_fname, $staff_lname);
$stmt->fetch();
$stmt->close();

if ($role === 'manager'){
    header("Location: ../admin-dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Spot Tavern</title>
</head>
<body>
    <?php if ($role === 'staff'): ?>
        <script>alert('Welcome <?php echo $staff_fname," ", $staff_lname ?>!');</script>
        
        <!-- Add this logout button -->
        <div style="position: absolute; top: 10px; right: 10px;">
            <form action="logout.php" method="post">
                <button type="submit" style="padding: 8px 15px; background: #f44336; color: white; border: none; border-radius: 4px; cursor: pointer;">
                    Logout
                </button>
            </form>
        </div>
        
    <?php endif; ?>
</body>
</html>