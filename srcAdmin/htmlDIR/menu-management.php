<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Management - Savory Spot Tavern</title>
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
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .menu-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .menu-card h3 {
            margin-bottom: 10px;
            color: #333;
        }
        .menu-card p {
            margin: 5px 0;
            color: #666;
        }
        .price {
            font-weight: bold;
            color: #2e7d32;
            font-size: 1.2em;
            margin-top: 10px;
        }
        .description {
            font-style: italic;
            margin-top: 10px;
            color: #666;
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
        .menu-actions {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .edit-btn, .delete-btn {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .edit-btn {
            background: #2196F3;
            color: white;
        }

        .delete-btn {
            background: #f44336;
            color: white;
        }

        .edit-btn:hover {
            background: #1976D2;
        }

        .delete-btn:hover {
            background: #D32F2F;
        }

        .category-filter {
            margin-bottom: 20px;
        }

        .category-filter select {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .menu-card .status {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.9em;
            margin-top: 10px;
        }

        .status.available {
            background: #E8F5E9;
            color: #2E7D32;
        }

        .status.unavailable {
            background: #FFEBEE;
            color: #C62828;
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
            <a href="./admin-dashboard.php" class="back-btn">← Back to Dashboard</a>
            <h1>Menu Management</h1>
            <p>Manage menu items and their details</p>
            <div class="category-filter">
                <select id="categoryFilter">
                    <option value="all">All Categories</option>
                    <option value="main">Main Course</option>
                    <option value="appetizer">Appetizers</option>
                    <option value="dessert">Desserts</option>
                    <option value="beverage">Beverages</option>
                </select>
            </div>
            <button class="add-button">Add New Menu Item</button>
        </div>

        <div class="menu-grid">
            <div class="menu-card">
                <h3>Grilled Tilapia</h3>
                <p class="price">₱180.00</p>
                <p class="description">Grilled tilapia is a healthy and flavorful dish, typically cooked on a grill, oven, or indoor grill, often seasoned with spices and served with a side like plantains or vegetables.</p>
                <span class="status available">Available</span>
                <div class="menu-actions">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </div>
            </div>
            <div class="menu-card">
                <h3>Bistek</h3>
                <p class="price">₱280.00</p>
                <p class="description">Bistek, also known as bistek tagalog or karne frita, is a Filipino dish consisting of thinly-sliced beefsteak braised in soy sauce, calamansi juice, garlic, and onions.</p>
                <span class="status available">Available</span>
                <div class="menu-actions">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>