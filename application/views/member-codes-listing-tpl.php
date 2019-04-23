<?php include('includes/header.php'); ?>

<?php include("includes/sidebar.php"); ?>

<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content" style="min-height: 1435px;">
	    <!-- BEGIN PAGE HEADER-->
	    <h1 class="page-title"> View Codes</h1>
	    <div class="page-bar">
	        <ul class="page-breadcrumb">
	            <li>
	                <i class="icon-home"></i>
	                <a href="<?php echo site_url('dashboard'); ?>">Home</a>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
	                <span>Codes</span>
                    <i class="fa fa-angle-right"></i>
	            </li>
                <li>
                    <span>Listings</span>
                </li>                
	        </ul>
	    </div>
	    <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <div class="portlet-body">
                    <div class="table-container">
                        <table class="table table-striped table-bordered table-hover" id="datatable_admins">
                        <thead>
                        <tr role="row" class="heading">
                            <th width="20%">Code</th>
                            <th width="8%">Code Type</th>
                            <th width="8%">Entry Package</th>
                            <th width="10%">Date Purchased</th>
                            <th width="15%">
                                 Actions
                            </th>
                        </tr>
                        <tr role="row" class="filter">
                            <td>
                                <input type="text" class="form-control form-filter input-sm" name="filter[both][code]">
                            </td>
                            <td>
                                <select name="filter[both][type_id]" class="form-control form-filter input-sm">
                                    <option value=""></option>
                                    <option value="0">CD</option>
                                    <option value="1">Paid</option>
                                </select>
                            </td>     
                            <td></td>                                                     
                            <td></td>                                                  
                            <td>
                                <div class="margin-bottom-5">
                                    <button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
                                    <button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
                                </div>
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>    
	</div>
	<!-- END CONTENT BODY -->
</div>

<?php include("includes/footer.php"); ?>
<div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id='cancel-type'>Warning!</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-left" id="cancel-msg">Are you sure you want to transfer this code?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default blue" data-dismiss="modal" id="cancel-yes">Yes</button>
        <button type="button" class="btn btn-default red" data-dismiss="modal" id="cancel-no">No</button>
        <input type="hidden" id="input-code-id" value="">
      </div>      
    </div>
  </div>
</div>
<script>
function transferCode(input_code_id){
    $('#cancel').modal('show');
    $('#input-code-id').val(input_code_id);
}

$("#cancel-yes").on('click', function (){

    var input_code_id = $('#input-code-id').val();
    var code_id = $('#transfer-button-'+input_code_id).data('code_id');

    $.ajax({
        url: base_url+"codes/ajax/set-code",
        data:{'code_id' : code_id},
        success: function(data) {           
            if(data.status == 'success'){
                window.location.href = base_url+'codes/transfer/';
            }                
        },
        type: 'POST',
    });
});

var base_url = '<?php echo site_url(); ?>';

var Codes = function () {

    var handleCodes = function () {

        var grid = new Datatable();

        grid.init({
            src: $("#datatable_admins"),
            onSuccess: function (grid) {
                // execute some code on network or other general error  
            },
            onError: function (grid) {
                // execute some code on network or other general error  
            },
            loadingMessage: 'Loading...',
            dataTable: { // here you can define a typical datatable settings from http://datatables.net/usage/options 
                // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/scripts/datatable.js). 
                // So when dropdowns used the scrollable div should be removed. 
                //"dom": "<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'<'table-group-actions pull-right'>>r>t<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'>>",

                "lengthMenu": [
                    [10, 20, 50, 100, 150],
                    [10, 20, 50, 100, 150] // change per page values here
                ],
                "pageLength": 10, // default record count per page
                "ajax": {
                    "url": base_url + 'codes/ajax/get_all_codes', // ajax source
                },
                "order": [
                    [0, "desc"]
                ] // set first column as a default sort by asc
            }
        });
    }

    return {
        //main function to initiate the module
        init: function () {
            handleCodes();
        }
    };
}();

jQuery(document).ready(function() {
    Codes.init()
});
</script>