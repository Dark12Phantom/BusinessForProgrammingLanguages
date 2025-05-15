<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management - Savory Spot Tavern</title>
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
        .inventory-table {
            width: 100%;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .status {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.9em;
        }
        .status.available {
            background: #e0ffe0;
            color: #388e3c;
        }
        .status.unavailable {
            background: #ffe0e0;
            color: #d32f2f;
        }
        .add-button {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
        .add-button:hover {
            background: #45a049;
        }
        .back-btn {
            background: #2196F3;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 15px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background: #1976D2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="./admin-dashboard.html" class="back-btn">← Back to Dashboard</a>
            <h1>Inventory Management</h1>
            <p>Track and manage inventory items</p>
            <button class="add-button">Add New Item</button>
        </div>

        <div class="inventory-table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>INV001</td>
                        <td>Rice</td>
                        <td>Staples</td>
                        <td>50 kg</td>
                        <td>₱45.00/kg</td>
                        <td><span class="status available">Available</span></td>
                    </tr>
                    <tr>
                        <td>INV002</td>
                        <td>Chicken</td>
                        <td>Meat</td>
                        <td>15 kg</td>
                        <td>₱180.00/kg</td>
                        <td><span class="status available">Available</span></td>
                    </tr>
                    <tr>
                        <td>INV003</td>
                        <td>Cooking Oil</td>
                        <td>Supplies</td>
                        <td>25 L</td>
                        <td>₱85.00/L</td>
                        <td><span class="status available">Available</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>