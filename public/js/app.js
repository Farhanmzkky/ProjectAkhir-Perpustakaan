// Modal Popup
function openModal(id) {
    document.getElementById(id).style.display = "flex";
}

function closeModal(id) {
    document.getElementById(id).style.display = "none";
}

// Alert sukses
function showSuccess(msg) {
    const toast = document.createElement("div");
    toast.innerText = msg;
    toast.style = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: #28a745;
        color: white;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        animation: fade 3s forwards;
    `;
    document.body.appendChild(toast);

    setTimeout(() => toast.remove(), 3000);
}
