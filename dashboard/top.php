<!-- //$685.71 -->
<?php require 'eng.php'; ?>
<div class="row card">
  <div class="col-md-3">
    <div class="widget-small primary"><i class="icon fa fa-money fa-3x"></i>
      <div class="info">
        <h5 class="text-center" style="color:#fff;">Account Balance</h5>
        <p class="text-center"><b><?php if (!empty($balance)) {
                                    echo '$' . $balance;
                                  } else {
                                    echo "$0.00";
                                  } ?></b></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="widget-small info">
      <i class="icon fa fa-cog <?php echo $actv; ?> fa-3x" <?php echo $style; ?>></i>
      <div class="info">
        <h5 class="text-center" style="color:#fff;">Active Investment</h5>
        <h4 class="text-center"><b><?php
                                    if ($bal != 0) {
                                      echo '$' . round($bal, 2);
                                    ?></b></h4>
        <h6><?php echo $remaining_day; ?> Remaining</h6>
      <?php } else {
                                      echo "N/A";
                                    } ?>

      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="widget-small warning"><i class="icon fa fa-download fa-3x"></i>
      <div class="info">
        <h5 class="text-center" style="color:#fff;">Total Deposit</h5>
        <p class="text-center"><b>$<?php echo $invest; ?></b></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="widget-small danger"><i class="icon fa fa-upload fa-3x"></i>
      <div class="info">
        <h5 class="text-center" style="color:#fff;">Total Withdrawn</h5>
        <p class="text-center"><b>$<?php echo $withdrawn; ?></b></p>
      </div>
    </div>
  </div>

  <div class="col-md-9">
    <div class="widget-small" style="color: #000;"><i class="icon fa fa-link fa-3x"></i>
      <div class="info">
        <h5>
          Referral Link:</h5>
        <p>
          <input class="form-control" id='copy' value="https://fundsgrowths.com/register/register.php?ref=<?php echo $session_id; ?>" readonly>
        </p>
        <button style='font-size: 15px; margin-top:4px;' class='mc  btn-default' onclick='myFunction()'>Copy Link <i class="fa fa-link"></i></button>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="widget-small" style="color: #000; padding:25px 0 25px 0;">
      <div class="info">
        <h5 class="text-center">Referral Commision</h5>
        <p class="text-center"><b>$<?php echo number_format($ref_profit,2); ?></b></p>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function myFunction() {
      /* Get the text field */
      var copyText = document.getElementById("copy");

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /*For mobile devices*/

      /* Copy the text inside the text field */
      document.execCommand("copy");

      /* Alert the copied text */
      alert("Copied the text: " + copyText.value);
    }
  </script>

</div>