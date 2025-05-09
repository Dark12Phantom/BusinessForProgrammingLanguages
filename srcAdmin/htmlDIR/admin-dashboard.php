<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin-dashboard.css">
</head>

<body>
    <div class="wrapper">
        <div class="admin-profile">
            <img src="admin.jpg" alt="Admin Profile">
            <div class="desc">
                <h2>FName Lname </h2>
                <p>Manager</p>
                <p>ID Number</p>
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
            </div>
            <div class="employees">
                <p>Employees management</p>
                <a href="./employees.php">Manage</a>
            </div>
        </div>
    </div>
</body>

</html>