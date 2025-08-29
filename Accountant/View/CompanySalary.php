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
            <a href="Payment_Invoice.php">Payments & Invoice</a>
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
                        <th>Payment Date</th>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>John Doe</td>
                        <td>Manager</td>
                        <td>$5000</td>
                        <td>5%</td>
                        <td>2024-01-31</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Jane Smith</td>
                        <td>Accountant</td>
                        <td>$4000</td>
                        <td>3%</td>
                        <td>2024-01-31</td>
                    </tr>
                </table>

            </div>

            <div class="Inputbox">
                <h2>Update Salary</h2>
                <form>
                    <label for="empId">Employee ID:</label>
                    <input type="text" id="empId" name="empId" required><br><br>
                    <label for="increment">Increment (%):</label>
                    <input type="number" id="increment" name="increment" required><br><br>
                    <label for="paymentDate">Payment Date:</label>
                    <input type="date" id="paymentDate" name="paymentDate" required><br><br>
                    <input type="submit" value="Update Salary">
                </form>
            </div>
            
        </div>
        

    </body>
</html>