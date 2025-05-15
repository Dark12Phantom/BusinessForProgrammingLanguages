<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Management - Savory Spot Tavern</title>
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
        .finance-summary {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .summary-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .transactions {
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
            <h1>Financial Management</h1>
            <p>Track revenue, expenses, and financial metrics</p>
        </div>

        <div class="finance-summary">
            <div class="summary-card">
                <h3>Today's Revenue</h3>
                <p>₱25,678</p>
            </div>
            <div class="summary-card">
                <h3>Monthly Revenue</h3>
                <p>₱456,789</p>
            </div>
            <div class="summary-card">
                <h3>Expenses</h3>
                <p>₱123,456</p>
            </div>
            <div class="summary-card">
                <h3>Net Profit</h3>
                <p>₱333,333</p>
            </div>
        </div>

        <div class="transactions">
            <h2>Recent Transactions</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024-02-20</td>
                        <td>Daily Sales</td>
                        <td>Revenue</td>
                        <td>₱12,345</td>
                    </tr>
                    <tr>
                        <td>2024-02-20</td>
                        <td>Inventory Restock</td>
                        <td>Expense</td>
                        <td>-₱5,678</td>
                    </tr>
                    <tr>
                        <td>2024-02-19</td>
                        <td>Daily Sales</td>
                        <td>Revenue</td>
                        <td>₱11,234</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>