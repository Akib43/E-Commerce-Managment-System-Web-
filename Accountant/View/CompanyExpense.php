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
                        <th>Expense ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Department</th>
                        <th>Reason</th>
                        <th>Apperove</th>
                        <th>Approved by</th>
                        <th>Purchase date</th>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Ink</td>
                        <td>300BDT</td>
                        <td>Accounts</td>
                        <td>Empty</td>
                        <td>2024-01-31</td>
                        <td>Akib Ashfaq</td>
                        <td>2024-01-31</td>
                    </tr>
                </table>

            </div>

            <div class="Inputbox">
                <div class="frm">
                    <h1>Approve Expense</h1>
                    <form>
                        <input type="text" id="productname" placeholder="Product Name"/>
                        <br>
                        <input type="number" id ="productprice" placeholder="Price"/>
                        <br>
                        <select id="Depertment">
                            <option>---Select Department---</option>
                            <option>Accounts</option>
                            <option>HR</option>
                        </select>
                        <br>
                        <input type="text" id="productreason" placeholder="Reason for purchase"/>
                        <br>
                        <label>Approve Date</label><br>
                        <input type="date" id="ApDate">
                        <br>
                        <input type="text" id="Approvedby" placeholder="Approved by">

                    </form>

                </div>

               <div class="=frm">
                    <form>
                        <h1>Purchase Info</h1><br>
                        <input type="number" id="ExpenseId" placeholder="ExpenseID"><br>
                        <label>Purchase Date</label><br>
                        <input type="date" id="Purchasedate"><br>
                    </form>

               </div> 

                
            </div>
            
        </div>
        

    </body>
</html>