function updateItemTotal(row) {
    const priceElement = row.querySelector('td:nth-child(2)');
    const qtyElement = row.querySelector('.qty span');
    const totalElement = row.querySelector('td:nth-child(4)');
    const price = parseFloat(priceElement.innerText.replace('R$', ''));
    const quantity = parseInt(qtyElement.innerText);
    const total = price * quantity;
    totalElement.innerText = `R$ ${total.toFixed(2)}`;
    updateCartTotal();
  }
  
  function updateCartTotal() {
    let total = 0;
    const rows = document.querySelectorAll('tbody tr');
    rows.forEach(row => {
      const itemTotal = parseFloat(row.querySelector('td:nth-child(4)').innerText.replace('R$', ''));
      total += itemTotal;
    });
    document.querySelector('.box .info div span:nth-child(2)').innerText = `R$ ${total.toFixed(2)}`;
    document.querySelector('.box footer span:nth-child(2)').innerText = `R$ ${total.toFixed(2)}`;
  }
  
  function incrementQuantity(button) {
    const row = button.closest('tr');
    const qtyElement = row.querySelector('.qty span');
    let quantity = parseInt(qtyElement.innerText);
    quantity++;
    qtyElement.innerText = quantity;
    updateItemTotal(row);
  }
  
  function decrementQuantity(button) {
    const row = button.closest('tr');
    const qtyElement = row.querySelector('.qty span');
    let quantity = parseInt(qtyElement.innerText);
    if (quantity > 1) {
      quantity--;
      qtyElement.innerText = quantity;
      updateItemTotal(row);
    }
  }
  
  function removeItem(button) {
    const row = button.closest('tr');
    row.remove();
    updateCartTotal();
  }
  
  function setupEventListeners() {
    const incrementButtons = document.querySelectorAll(".bx-plus");
    const decrementButtons = document.querySelectorAll(".bx-minus");
    const removeButtons = document.querySelectorAll(".remove");
    
    incrementButtons.forEach(button => button.addEventListener('click', () => incrementQuantity(button)));
    decrementButtons.forEach(button => button.addEventListener('click', () => decrementQuantity(button)));
    removeButtons.forEach(button => button.addEventListener('click', () => removeItem(button)));
  }
  
  document.addEventListener('DOMContentLoaded', () => {
    updateCartTotal();
    setupEventListeners();
  });
  