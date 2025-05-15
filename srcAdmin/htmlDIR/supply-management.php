<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supply Management - Savory Spot Tavern</title>
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
        .inventory-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .inventory-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: relative;
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
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background: #1976D2;
        }
        
        .reorder-btn {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }
        
        .reorder-btn:hover {
            background: #45a049;
        }
        
        .reorder-btn.urgent {
            background: #f44336;
        }
        
        .reorder-btn.urgent:hover {
            background: #d32f2f;
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 1000;
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
            position: relative;
        }

        .close {
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 28px;
            cursor: pointer;
        }

        .supplier-info {
            margin: 20px 0;
        }

        .order-form {
            margin-top: 20px;
        }

        .order-form input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .confirm-order {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        .confirm-order:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="./admin-dashboard.php" class="back-btn">← Back to Dashboard</a>
            <h1>Supply Management</h1>
            <p>Track inventory levels and manage supplies</p>
        </div>

        <div class="inventory-grid">
            <div class="inventory-card">
                <h3>Rice</h3>
                <p>Current Stock: 50kg</p>
                <p>Minimum Required: 20kg</p>
                <span class="status good">Stock Good</span>
                <button class="reorder-btn">Reorder Stock</button>
            </div>
            <div class="inventory-card">
                <h3>Chicken</h3>
                <p>Current Stock: 15kg</p>
                <p>Minimum Required: 25kg</p>
                <span class="status low">Low Stock</span>
                <button class="reorder-btn urgent">Reorder Urgently</button>
            </div>
            <div class="inventory-card">
                <h3>Vegetables</h3>
                <p>Current Stock: 30kg</p>
                <p>Minimum Required: 15kg</p>
                <span class="status good">Stock Good</span>
                <button class="reorder-btn">Reorder Stock</button>
            </div>
            <div class="inventory-card">
                <h3>Cooking Oil</h3>
                <p>Current Stock: 25L</p>
                <p>Minimum Required: 10L</p>
                <span class="status good">Stock Good</span>
                <button class="reorder-btn">Reorder Stock</button>
            </div>
        </div>
        <!-- Modal -->
        <div id="orderModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Reorder Supplies</h2>
                <div class="supplier-info">
                    <h3>Supplier Information</h3>
                    <p><strong>Supplier Name:</strong> <span id="supplierName"></span></p>
                    <p><strong>Contact Person:</strong> <span id="contactPerson"></span></p>
                    <p><strong>Phone:</strong> <span id="supplierPhone"></span></p>
                    <p><strong>Email:</strong> <span id="supplierEmail"></span></p>
                </div>
                <div class="order-form">
                    <h3>Order Details</h3>
                    <p><strong>Item:</strong> <span id="itemName"></span></p>
                    <p><strong>Current Stock:</strong> <span id="currentStock"></span></p>
                    <label for="orderAmount">Order Amount:</label>
                    <input type="number" id="orderAmount" min="1" step="1">
                    <button class="confirm-order" onclick="confirmOrder()">Confirm Order</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get modal elements
        const modal = document.getElementById('orderModal');
        const closeBtn = document.getElementsByClassName('close')[0];

        // Supplier information
        const suppliers = {
            'Rice': {
                name: 'Golden Grains Supply Co.',
                contact: 'Juan Dela Cruz',
                phone: '+63 912 345 6789',
                email: 'orders@goldengrains.com'
            },
            'Chicken': {
                name: 'Fresh Poultry Supplies',
                contact: 'Maria Santos',
                phone: '+63 923 456 7890',
                email: 'orders@freshpoultry.com'
            },
            'Vegetables': {
                name: 'Green Fields Produce',
                contact: 'Pedro Reyes',
                phone: '+63 934 567 8901',
                email: 'orders@greenfields.com'
            },
            'Cooking Oil': {
                name: 'Pure Oils Distribution',
                contact: 'Ana Garcia',
                phone: '+63 945 678 9012',
                email: 'orders@pureoils.com'
            }
        };

        // Add click event to all reorder buttons
        document.querySelectorAll('.reorder-btn').forEach(button => {
            button.onclick = function() {
                const card = this.parentElement;
                const itemName = card.querySelector('h3').textContent;
                const currentStock = card.querySelector('p').textContent.split(': ')[1];
                
                // Update modal with item and supplier information
                document.getElementById('itemName').textContent = itemName;
                document.getElementById('currentStock').textContent = currentStock;
                document.getElementById('supplierName').textContent = suppliers[itemName].name;
                document.getElementById('contactPerson').textContent = suppliers[itemName].contact;
                document.getElementById('supplierPhone').textContent = suppliers[itemName].phone;
                document.getElementById('supplierEmail').textContent = suppliers[itemName].email;
                
                // Show modal
                modal.style.display = 'block';
            };
        });

        // Close modal when clicking (x)
        closeBtn.onclick = function() {
            modal.style.display = 'none';
        };

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        };

        // Confirm order function
        function confirmOrder() {
            const amount = document.getElementById('orderAmount').value;
            const item = document.getElementById('itemName').textContent;
            
            if (amount > 0) {
                alert(`Order placed successfully!\n\nItem: ${item}\nAmount: ${amount}\n\nThe supplier will be notified of your order.`);
                modal.style.display = 'none';
                document.getElementById('orderAmount').value = '';
            } else {
                alert('Please enter a valid order amount.');
            }
        }
    </script>
</body>
</html>