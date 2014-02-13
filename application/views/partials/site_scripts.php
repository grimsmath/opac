<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
<script>
  $(function () {
    $('#OneSearchButton').click(function () {
    	doOneSearch();
    });

    $('#CatalogButton').click(function () {
    	doCatalog();
    });
    
    $('#OneSearchNavButton').click(function () {
	    doOneSearch();
    });
    
    $('#CatalogNavButton').click(function () {
	    doCatalog();
    });
    
    function doOneSearch() {
      $.ajax({
        type: "POST",
        url: '<?php echo base_url("index.php/home/track/onesearch"); ?>'
      }).done(function (msg) {
        // Redirect the user to the EDS OneSearch screen
        location.href = '<?php echo base_url("index.php/home/onesearch"); ?>';
      });	    
    }
    
    function doCatalog() {
      $.ajax({
        type: "POST",
        url: '<?php echo base_url("index.php/home/track/catalog"); ?>'
      }).done(function (msg) {
        // Redirect the user to the Mango Catalog
        location.href = '<?php echo base_url("index.php/home/catalog"); ?>';
      });	    
    }
  });
</script>
