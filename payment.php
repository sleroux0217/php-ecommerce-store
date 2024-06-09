<?php
session_start();
if (isset($_POST['order_pay_btn'])) {
  $order_status = $_POST['order_status'];
  $order_total_price = $_POST['order_total_price'];
}
?>

<?php include('layouts/header.php'); ?>

<!-- Payment -->
<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="form-weight-bold">Payment</h2>
    <hr class="mx-auto">
  </div>
  <div class="mx-auto container text-center">
    <?php if (isset($_POST['order_status']) && $_POST['order_status'] == "not paid") { ?>
      <?php $amount = strval($_POST['order_total_price']); ?>
      <?php $order_id = $_POST['order_id']; ?>
      <p>Total payment: R<?php echo $_POST['order_total_price']; ?></p>
      <button class="btn btn-primary" id="pay-now-btn">Pay Now</button>
    <?php } else if (isset($_SESSION['total']) && $_SESSION['total'] != 0) { ?>
      <?php $amount = strval($_SESSION['total']); ?>
      <?php $order_id = $_SESSION['order_id']; ?>
      <p>Total payment: <?php echo $_SESSION['total']; ?></p>
      <button class="btn btn-primary" id="pay-now-btn">Pay Now</button>
    <?php } else { ?>
      <p>You don't have an order</p>
    <?php } ?>
  </div>
</section>

<script>
  document.getElementById('pay-now-btn').addEventListener('click', function() {
    // Simulate a transaction ID
    var transactionId = 'MOCK123456';
    var orderId = <?php echo $order_id; ?>;
    // Redirect to complete_payment.php with mock transaction details
    window.location.href = "server/complete_payment.php?transaction_id=" + transactionId + "&order_id=" + orderId;
  });
</script>

<?php include('layouts/footer.php'); ?>