

function ApproveValid(){
    
    var pname = document.getElementById("productname").value;
    var price = parseFloat(document.getElementById("productprice").value);
    var dept = document.getElementById("Depertment").value;
    var reason = document.getElementById("productreason").value;
    var adate = document.getElementById("ApDate").value;
    var apname = document.getElementById("Approvedby").value;
    //var pdate = "Later";

    if(pname == "" || isNaN(price) || dept == "" || reason == "" || adate == "" || apname == ""){
        alert("Fil the form first" );
    }else{
        alert("Dom");

        var tbl = document.getElementById("expenseTable");

        var row = document.createElement("tr");
        row.innerHTML=`
            <td>2222</td>
            <td>${pname}</td>
            <td>${price}</td>
            <td>${dept}</td>
            <td>${reason}</td>
            <td>${adate}</td>
            <td>${apname}</td>
        `;

        tbl.appendChild(row);

        row.addEventListener("click", () => {
            alert("Adding to alert");

        });

        alert("Dom 3");

    }
}


