<!DOCTYPE html>
<html>
    <head>
        <title>Product Sales</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="../JS/CompanySalary.js " defer></script>
        <link rel="stylesheet" href="../CSS/CompanySalary.css">

    </head>
    <body>
        <div class= "Sidebar">

            <img src="../Assets/Image/AccountantDashBoardLogo.png" alt="Accountant" style="width:50%; height:auto;">

            <h2>Accountant</h2>
            <a href="AccountantDashBoard.php" class="active">Dashboard</a>
            <a href="ProductSales.php">Product Sales</a>
            <a href="OrdersReport.php">Orders</a>
            <a href="Invoice.php">Invoice</a>
            <a href="CompanyExpense.php">Expenses</a>
            <a href="CompanySalary.php">Company Salary</a>
            <a href="../../LoginPage.php">Logout</a>

        </div>

        <div class = "pagecontainer">
            
            <div class="tablebox">
                <table>
                    <tr >
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Increment</th>
                        <th>Update Date</th></th>
                    </tr>

                    <tr>
                        <td>001</td>
                        <td>John Doe</td>
                        <td>Manager</td>
                        <td>$5000</td>
                        <td>5%</td>
                        <td>2024-01-31</td>
                    </tr>
                    
                </table>
            </div>

            <div class="Inputbox">
                
                <div class="frm">
                    <h2>Update Salary</h2>
                    <input type="text" id="empId" name="empId" placeholder="Employee ID"><br><br>
                    <input type="number" id="increment" name="increment" placeholder="Increment"><br><br>
                    <button onclick="">Update</button>
                </div>

                <div class="frm">
                    <h2>Salary Pay</h2>
                    <input type="text" id="empId" name="empId" placeholder="Employee ID"><br><br>
                    <label>Pay Date</label></br>
                    <input type="date" id="increment" name="increment"><br><br>
                    <button onclick="">Update</button>
                </div>
                
            </div>

        </div>

    </body>
</html>