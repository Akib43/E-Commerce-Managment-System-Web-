function salarytableview(eid, ename, edept, basesalary, employeeinc, employeeslary,  paydate) {

    var tbl = document.getElementById("expenseTable");

    var row = document.createElement("tr");
    row.innerHTML=`
            <td>${eID}</td>
            <td>${ename}</td>
            <td>${ammount}</td>
            <td>${edept}</td>
            <td>${ereason}</td>
            <td>${apdate}</td>
            <td>${apname}</td>
            <td>${rcdate}</td>
            <td>${rcname}</td>
    `;

    tbl.appendChild(row);

    row.addEventListener("click", () => {
    alert("Adding to alert");

    });

    }