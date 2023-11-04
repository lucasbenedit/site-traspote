document.addEventListener('DOMContentLoaded', function() {
  const products = document.querySelectorAll('.product');
  const cartTotal = document.getElementById('cart-total');
  let total = 0;

  products.forEach(product => {
      const addToCartButton = product.querySelector('.add-to-cart');
      const price = parseFloat(product.getAttribute('data-price'));

      addToCartButton.addEventListener('click', function() {
          total += price;
          cartTotal.textContent = total.toFixed(2);
      });
  });
});
