function orderview(id, status, price, location, city, type, category, customerId, date) {
    const container = document.getElementById("orders");

    const card = document.createElement("div");
    card.className = "order-card";

    card.innerHTML = `
        <h3>Order #${id}</h3>
        <p><strong>Status:</strong> ${status}</p>
        <p><strong>Price:</strong> ${price}</p>
        <p><strong>Location:</strong> ${location}, ${city}</p>
        <p><strong>Type:</strong> ${type}</p>
        <p><strong>Category:</strong> ${category}</p>
        <p><strong>Customer ID:</strong> ${customerId}</p>
        <p><strong>Date:</strong> ${date}</p>
        <button class="picked" onclick="updateStatus(${id}, 'Picked')">Picked</button>
        <button class="delivered" onclick="updateStatus(${id}, 'Delivered')">Delivered</button>
    `;

    container.appendChild(card);
}

function updateStatus(orderId, newStatus) {
    fetch('../db/updateStatus.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ orderId: orderId, status: newStatus })
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        location.reload();
    })
    .catch(error => console.error('Error:', error));
}
