<?php include('includes/header.php'); ?>

<div class="page-container">
    <?php include("includes/sidebar.php"); ?>

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title">Member Encashments</h3>

            <!-- BEGIN PAGE HEADER-->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo site_url('/admin'); ?>">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Member Encashments</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-lg-12 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                        <div class="visual">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="0" id="counter-up">0</span>
                                of <?php echo $encashment_request_counts; ?>
                            </div>
                            <div class="desc"> Encashment Request </div>
                        </div>
                    </a>
                </div>
            </div>     
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>
<script>   
$(document).ready(function() {
    App.blockUI({
        message: 'PREPARING MEMBERS FOR PAYOUT',
    });
    $.ajax({
        url: base_url+"admin/encashment/ajax/create-payout",
        success: function(data) {           
            if(data.status == 'success'){
                App.blockUI({
                    message: 'PROCESSING PAYOUT',
                });

                $.ajax({
                    url: base_url+"admin/encashment/ajax/process-payout",
                    success: function(data) {           
                        if(data.status == 'success'){

                            $('#counter-up').html(data.encashment_count);

                            App.unblockUI();
                            
                            window.location.href = base_url+'admin/encashment/payouts';
                        }                
                    },
                    type: 'POST',
                });

            }else{
                window.location.href = base_url+'admin/encashments';
            }                
        },
        type: 'POST',
    });    
});

</script>