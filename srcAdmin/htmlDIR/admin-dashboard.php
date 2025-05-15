<?php

require_once('../../dbConnection.php');
session_start();

$conn = dbConnection();

// Redirect if not logged in
if (!isset($_SESSION['employee_id'])) {
    header('Location: ../index.php');
    exit();
}

// Fetch staff details
$stmt = $conn->prepare("SELECT fname, lname, position FROM employees WHERE employee_id = ?");
$stmt->bind_param("i", $_SESSION['employee_id']);
$stmt->execute();
$result = $stmt->get_result();
$employee = $result->fetch_assoc();
$stmt->close();

// Check position and redirect if needed
if ($employee['position'] === 'staff') {
    header('Location: order-processing.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Spot Tavern</title>
    <link rel="stylesheet" href="../css/admin-dashboard.css">
</head>

<body>
    <div class="wrapper">
    <?php if ($employee['position'] === 'manager'): ?>
        <script>alert('Welcome <?php echo $employee['fname']," ", $employee['lname'] ?>!');</script>
    <?php endif;?>
        <div class="admin-profile">
            <img src="admin.jpg" alt="Admin Profile">
            <div class="desc">
                <h2><?php echo isset($employee['fname']) ? $employee['fname'] . ' ' . $employee['lname'] : 'FName LName'; ?></h2>
                <p><?php echo isset($employee['position']) ? ucfirst($employee['position']) : 'Position'; ?></p>
                <p>ID: <?php echo isset($_SESSION['employee_id']) ? $_SESSION['employee_id'] : 'ID Number'; ?></p>
            </div>
        </div>

        <div class="cards">
            <div class="crm">
                <h1>Track what the customer want</h1>
                <a href="./CRM.php">Track now</a>
            </div>
            <div class="finance">
                <h1>Analyze the company's finances</h1>
                <a href="./financial-management.php">Analyze now</a>
            </div>
            <div class="supply">
                <h1>Manage the inventory of the company</h1>
                <div class="raw">
                    <p>Track raw materials</p>
                    <a href="./supply-management.php">Track now</a>
                </div>
                <div class="menu">
                    <p>Track menu items</p>
                    <a href="./menu-management.php">Track now</a>
                </div>
                <div class="inventory">
                    <p>Track inventory</p>
                    <a href="./inventory.php">Track now</a>
                </div>
            </div>
            <div class="employees">
                <p>Employees management</p>
                <a href="./employees.php">Manage</a>
            </div>
        </div>
    </div>
</body>

</html>