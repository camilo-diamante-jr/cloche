let cart = [];

$(document).ready(function () {
  function updateCartTable() {
    const tbody = $("#cartTable tbody");
    tbody.empty();
    let total = 0;

    cart.forEach((item) => {
      let subtotal = item.price * item.quantity;
      total += subtotal;
      tbody.append(`
        <tr>
          <td>${item.name}</td>
          <td>₱${item.price.toLocaleString()}</td>
          <td>${item.quantity}</td>
          <td>₱${subtotal.toLocaleString()}</td>
        </tr>
      `);
    });

    $("#grandTotal").text("₱" + total.toLocaleString());
  }

  function removeItem(index) {
    cart.splice(index, 1);
    updateCartTable();
  }

  $("#addToCartBtn").click(function () {
    const selected = $("#productSelect option:selected");
    const name = selected.data("name");
    const price = parseFloat(selected.val());
    const quantity = parseInt($("#quantity").val());

    if (!name || isNaN(price) || quantity <= 0) {
      alert("Please select a valid product and quantity.");
      return;
    }

    const existingProduct = cart.find((item) => item.name === name);

    if (existingProduct) {
      existingProduct.quantity += quantity;
    } else {
      cart.push({ name, price, quantity });
    }

    updateCartTable();
  });

  $("#confirmBtn").click(function () {
    if (!$("#clientName").val()) {
      alert("Please enter client name.");
      return;
    }
    if (cart.length === 0) {
      alert("Cart is empty.");
      return;
    }

    $("#paymentModal").addClass("is-active");
  });

  $("#paymentAmount").on("input", function () {
    const totalAmount = parseFloat(
      $("#grandTotal").text().replace("₱", "").replace(/,/g, "")
    );
    const paymentAmount = parseFloat($(this).val()) || 0;
    const change = paymentAmount - totalAmount;

    $("#changeAmount").val(
      change >= 0 ? "₱" + change.toLocaleString() : "₱0.00"
    );
  });

  $("#processPaymentBtn").click(function () {
    const paymentAmount = parseFloat($("#paymentAmount").val());
    const totalAmount = parseFloat(
      $("#grandTotal").text().replace("₱", "").replace(/,/g, "")
    );

    if (paymentAmount < totalAmount) {
      alert("Payment amount is not enough.");
      return;
    }

    const receiptContent = `
      <div style="font-family: Arial, sans-serif; width: 4.25in; text-align: center; margin-bottom: 20px; padding: 5px;">
        <h2 style="font-size: 16px; margin-bottom: 5px;">Purchase Receipt</h2>
        <p style="font-size: 14px; margin: 0;"><strong>Client:</strong> ${$(
          "#clientName"
        ).val()}</p>
        <p style="font-size: 12px; margin: 0;"><strong>Date:</strong> ${new Date().toLocaleString()}</p>
        <p style="font-size: 12px; margin: 0;"><strong>Paid:</strong> ₱${paymentAmount.toLocaleString()}</p>
        <p style="font-size: 12px; margin: 0;"><strong>Change:</strong> ₱${(
          paymentAmount - totalAmount
        ).toLocaleString()}</p>
      </div>
      <table style="width: 100%; border-collapse: collapse; font-size: 12px;">
        <thead>
          <tr>
            <th style="border: 1px solid #ddd; padding: 5px;">Product</th>
            <th style="border: 1px solid #ddd; padding: 5px;">Price</th>
            <th style="border: 1px solid #ddd; padding: 5px;">Qty</th>
            <th style="border: 1px solid #ddd; padding: 5px;">Subtotal</th>
          </tr>
        </thead>
        <tbody>
          ${cart
            .map(
              (item) => `
            <tr>
              <td style="border: 1px solid #ddd; padding: 5px;">${
                item.name
              }</td>
              <td style="border: 1px solid #ddd; padding: 5px;">₱${item.price.toLocaleString()}</td>
              <td style="border: 1px solid #ddd; padding: 5px;">${
                item.quantity
              }</td>
              <td style="border: 1px solid #ddd; padding: 5px;">₱${(
                item.price * item.quantity
              ).toLocaleString()}</td>
            </tr>`
            )
            .join("")}
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" style="text-align: left; padding: 5px; font-weight: bold;">Total:</td>
            <td style="border: 1px solid #ddd; padding: 5px; font-weight: bold;">₱${$(
              "#grandTotal"
            ).text()}</td>
          </tr>
        </tfoot>
      </table>
    `;

    printJS({
      printable: receiptContent,
      type: "raw-html",
      header: "Client Purchase Receipt",
      style: `
        @page { size: 4.25in 6in; margin: 0; }
        body { margin: 0; padding: 10px; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 5px; border: 1px solid #ddd; text-align: left; }
        h2 { font-size: 16px; }
      `,
    });

    $("#paymentModal").removeClass("is-active");
  });

  $("#cancelPaymentBtn").click(function () {
    $("#paymentModal").removeClass("is-active");
  });
});
