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
                        <th>Employee Department</th>
                        <th>Employee Salary</th>
                        <th>Employee Increment Percentage</th>
                        <th>Employee Incremented Salary</th>
                        <th>Employee PayDate</th></th>
                    </tr>

                </table>
            </div>

            <div class="Inputbox">
                
                <div class="frm">
                    <form onsubmit="updateincrement()" action="../PHP/SalaryUpdate.php" method="POST">
                        <h2>Update Salary</h2>
                        <input type="text" id="empId" name="empId" placeholder="Employee ID"><br><br>
                        <input type="number" id="increment" name="increment" placeholder="Increment"><br><br>
                        <label>Pay Date</label></br>
                        <input type="date" name="payday" id="increment" ><br><br>
                        <input type="submit" value="Update">
                    </form>
                </div>
                <div class="frm">

                </div>
                
            </div>

        </div>

    </body>
</html>