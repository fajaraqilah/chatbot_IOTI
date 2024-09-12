<?php
require_once('../config.php');
require_once('../classes/master.php');

$Master = new Master();

// Mendapatkan jumlah total respons
$totalResponses = $Master->getTotalResponses();
$totalFetched = $Master->getTotalFetched();
?>

<h1>Welcome, <?php echo $_settings->userdata('firstname')." ".$_settings->userdata('lastname') ?>!</h1>
<hr>
<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <span class="info-box-icon bg-gradient-navy elevation-1"><i class="fas fa-comment-dots"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Responses</span>
                <span class="info-box-number total-responses">
                    <?php echo $totalResponses; ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <span class="info-box-icon bg-gradient-light border elevation-1"><i class="fas fa-comments"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Fetched</span>
                <span class="info-box-number total-fetched">
                    <?php echo $totalFetched; ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>
<div class="container">
</div>
</div>
</section>
