function salarytableview(eID, ename, edept, baseSalary, incPercent, ammount, date){
        var tbl = document.getElementById("SalaryTable");

        var row = document.createElement("tr");
        row.innerHTML=`
                <td>${eID}</td>
                <td>${ename}</td>
                <td>${edept}</td>
                <td>${baseSalary}</td>
                <td>${incPercent}</td>
                <td>${ammount}</td>
                <td>${date}</td>
        `;

        tbl.appendChild(row);

        row.addEventListener("click", () => {
        alert("Adding to alert");

        });

}

