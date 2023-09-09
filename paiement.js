let selectedProducts = [];
let total = 0;

function updateTotal() {
  const totalAmount = document.getElementById("totalAmount");
  totalAmount.textContent = `Total : {total}FCFA`;
}

function toggleProduct(element, productName, price) {
  if (selectedProducts.includes(productName)) {
    selectedProducts = selectedProducts.filter(item => item !== productName);
    total -= price;
  } else {
    selectedProducts.push(productName);
    total += price;
  }

  updateTotal();
  element.classList.toggle("selected");
}

function pay() {
  if (selectedProducts.length > 0) {
    alert(`Paiement effectué pour les produits : ${selectedProducts.join(", ")}`);
  } else {
    alert("Aucun produit sélectionné.");
  }
}

// Vous pouvez ajouter plus de produits en suivant le modèle ci-dessus
