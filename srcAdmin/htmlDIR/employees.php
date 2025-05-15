<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management - Savory Spot Tavern</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }
        body {
            background: #f5f5f5;
        }
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .header {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .employee-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .employee-list {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .back-btn {
            background: #2196F3;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="./admin-dashboard.php" class="back-btn">← Back to Dashboard</a>
            <h1>Employee Management</h1>
            <p>Manage staff and track performance</p>
        </div>

        <div class="employee-stats">
            <div class="stat-card">
                <h3>Total Employees</h3>
                <p>24</p>
            </div>
            <div class="stat-card">
                <h3>Active Today</h3>
                <p>18</p>
            </div>
            <div class="stat-card">
                <h3>On Leave</h3>
                <p>2</p>
            </div>
            <div class="stat-card">
                <h3>New Hires</h3>
                <p>3</p>
            </div>
        </div>

        <div class="employee-list">
            <h2>Employee Directory</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Start Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>EMP001</td>
                        <td>John Smith</td>
                        <td>Chef</td>
                        <td>Active</td>
                        <td>2023-01-15</td>
                    </tr>
                    <tr>
                        <td>EMP002</td>
                        <td>Maria Garcia</td>
                        <td>Server</td>
                        <td>Active</td>
                        <td>2023-03-20</td>
                    </tr>
                    <tr>
                        <td>EMP003</td>
                        <td>David Lee</td>
                        <td>Kitchen Staff</td>
                        <td>On Leave</td>
                        <td>2023-06-10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>