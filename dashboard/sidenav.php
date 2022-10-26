 <aside class="main-sidebar hidden-print">
    <section class="sidebar">
       <div class="user-panel">
          <div id="google_translate_element"></div>

          <script type="text/javascript">
             function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                   pageLanguage: 'en'
                }, 'google_translate_element');
             }
          </script>

          <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
       </div>

       <div class="user-panel">
          <div class="pull-left image" style='color:#fff; font-weight:bold;'><img src="../register/<?php echo $profileImage; ?>" width="20%">
          </div>
          <div class="pull-right info"> Hi, <span style="font-style: italic;"><?php echo $fname; ?></span></div>
       </div>
       <!-- Sidebar Menu-->
       <ul class="sidebar-menu">
          <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
          <li><a href="profile.php"><i class="fa fa-users"></i><span>Profile</span></a></li>
          <li><a href="invest.php"><i class="fa fa fa-download"></i><span>Deposit</span></a></li>
          <?php if ($d_p_btc > 0) { ?>
             <li><a href="btc.php"><i class="fa fa fa-upload"></i><span>Upload Payment Proof</span></a></li>
          <?php } elseif ($d_p_ether > 0) { ?>
             <li><a href="ether.php"><i class="fa fa fa-upload"></i><span>Upload Payment Proof</span></a></li>
          <?php } ?>

          <li><a href="withdraw.php"><i class="fa fa-cc-mastercard"></i><span>Withdrawal</span></a></li>
          <li><a href="history.php"><i class="fa fa-history"></i><span>Transactions</span></a></li>
          <li><a href="https://co-w.io" target="_blank"><i class="fa fa-bitcoin"></i><span>CRYPTO LIVE VALUES</span></a></li>
          <li><a href="referral.php"><i class="fa fa-link"></i><span> Referral</span></a></li>


          <!-- <li><a href="loan.php"><i class="fa fa-money"></i><span>Apply for Loan</span></a></li> -->
          <li><a href="logout.php"><i class="fa fa-lock"></i><span>Logout</span></a></li>
       </ul>
    </section>
 </aside>