<!DOCTYPE html>
<html>

    <head>

        <title>Product Sales</title>
        <script src="../JS/Invoice.js" defer></script>
        <link rel="Stylesheet" href="../CSS/Invoice.css">

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
            
                <div class="totalammount">
                    <h4>Orders</h4>
                    <div class="Line"></div>
                    <h1 id="totalorder">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Order Pending</h4>
                    <div class="Line"></div>
                    <h1 id="totalpending">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Orders Delivered</h4>
                    <div class="Line"></div>
                    <h1 id="totaldelivered">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Total Orders</h4>
                    <div class="Line"></div>
                    <h1 id="">N\A</h1>
                </div>

                <div class="tablecss">
                    <table id ="ordertable">
                        <tr>
                            <th>Order ID</th>
                        </tr>
                        <tr>
                            <td>32476</td>
                        </tr>
                    </table>
                </div>

        </div>
        
    </body>
</html>