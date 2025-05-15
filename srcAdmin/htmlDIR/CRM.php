<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM - Savory Spot Tavern</title>
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
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .customer-list {
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
            <h1>Customer Relationship Management</h1>
            <p>Track and manage customer interactions</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Customers</h3>
                <p>1,234</p>
            </div>
            <div class="stat-card">
                <h3>Active Today</h3>
                <p>156</p>
            </div>
            <div class="stat-card">
                <h3>Average Rating</h3>
                <p>4.8/5.0</p>
            </div>
            <div class="stat-card">
                <h3>Feedback Pending</h3>
                <p>23</p>
            </div>
        </div>

        <div class="customer-list">
            <h2>Recent Customer Activity</h2>
            <table>
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Last Visit</th>
                        <th>Orders</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#12345</td>
                        <td>John Doe</td>
                        <td>Today</td>
                        <td>15</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>#12346</td>
                        <td>Jane Smith</td>
                        <td>Yesterday</td>
                        <td>8</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>#12347</td>
                        <td>Bob Johnson</td>
                        <td>2 days ago</td>
                        <td>23</td>
                        <td>Regular</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>