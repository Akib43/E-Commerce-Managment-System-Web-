<!DOCTYPE html>
<html>
    <head>
        <title>Accountant Dashboard</title>
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <script src="../JS/AccountantDashBoard.js" defer></script>
        <link rel="stylesheet" href="../CSS/AccountantDashBoard.css">

    </head>

    <body>
        <div class= "Sidebar">
            <h2>Accountant</h2>
            <a href="AccountantDashBoard.php" class="active">Dashboard</a>
            <a href="AccountantProfile.php">Product Sales</a>
            <a href="AccountantViewOrders.php">Orders</a>
            <a href="AccountantViewPayments.php">Payments & Invoice</a>
            <a href="AccountantManageExpenses.php">Expenses</a>
            <a href="AccountantManageInvoices.php">Company Salary</a>
            <a href="../LoginPage.php">Logout</a>

        </div>
        
        <div class="pagecontainer">
            
                <div class="totalammount">
                    <h4>Total Revenue</h4>
                    <div class="Line"></div>
                    <h1 id="revenueAmount">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Expenses</h4>
                    <div class="Line"></div>
                    <h1 id="expenseAmount">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Total Orders</h4>
                    <div class="Line"></div>
                    <h1 id="grossprofit">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Net Profit</h4>
                    <div class="Line"></div>
                    <h1 id="netprofitAmount">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Invoices Due</h4>
                    <div class="Line"></div>
                    <h1 id="invicedueAmount">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Payments Due</h4>
                    <div class="Line"></div>
                    <h1 id="paymentdueAmount">N/A</h1>
                </div>

                <div class="chartcontainer">
                    <h4>Chat Room</h4>
                    <div class="Line"></div>
                    <h1 id="chatroom">N/A</h1>
                </div>
            
                <div class="totalammount">
                    <h4>Cash Conversion Cycle</h4>
                    <div class="Line"></div>
                    <meter id="Cashconversion" value="3" min="0" max="10">3 out of 10</meter>
                </div>

                <div class="totalammount">
                    <h4>Budget Execution</h4>
                    <div class="Line"></div>
                    <meter id="budgetexecution" value="3" min="0" max="10">3 out of 10</meter>
                </div>

                <div class="totalammount">
                    <h4>Debt to equaty ratio</h4>
                    <div class="Line"></div>
                    <meter id="debttequity" value="3" min="0" max="10">3 out of 10</meter>
                </div>

                <div class="totalammount">
                    <h4>Invice to payment ratio</h4>
                    <div class="Line"></div>
                    <meter id="Invoicetopayment" value="3" min="0" max="10">3 out of 10</meter>
                </div>
                
                <div id="productprofit"></div>
                <div id="Countryprofit"></div>
                
        </div>
    </body>

</html>