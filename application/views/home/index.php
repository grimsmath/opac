<?php
	$mode = "kiosk";
	 
	if (isset($_GET["mode"]))
	{
		if ($_GET["mode"] == "instruction")
		{
			$mode = "instruction";
		}
		else
		{
			$mode = "kiosk";
		}
	}
?>
<style>
	.onesearch {
		background: #EAEEEF;
		color: #003886; 
		padding-top: 50px; 
		padding-bottom: 50px;
		font: bold 2.5em Verdana;
		box-shadow: 0 0 15px #333;
		border: solid 1px #cdcdcd;
		background-color: #ffffff;
		background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#999999));
		background-image: -webkit-linear-gradient(top, #ffffff, #999999);
		background-image:    -moz-linear-gradient(top, #ffffff, #999999);
		background-image:      -o-linear-gradient(top, #ffffff, #999999);
		background-image:         linear-gradient(to bottom, #ffffff, #999999);
	}
	
	.catalog {
		background: #5587ba;
		color: #CCD7E7; 
		padding-top: 50px; 
		padding-bottom: 50px;
		font: bold 2.5em Verdana;
		box-shadow: 0 0 15px #333;
		border: solid 1px #cdcdcd;
		background-image: -webkit-gradient(linear, left top, left bottom, from(#5587ba), to(#153e70));
		background-image: -webkit-linear-gradient(top, #5587ba, #153e70);
		background-image:    -moz-linear-gradient(top, #5587ba, #153e70);
		background-image:      -o-linear-gradient(top, #5587ba, #153e70);
		background-image:         linear-gradient(to bottom, #5587ba, #153e70);
	}
	
	#my_container {	
	    position: absolute;
	    left: 0px;
	    top: 0px;	
	}	

	#libcal_web {
		display: none;
	}

	#libcal_kiosk {
		display: inline;
	}
</style>

<div id="container" class="col-lg-12" style="margin-top: 150px">
	<?php if ($mode == "kiosk") { ?>
	<div class="row">
		<div class="col-md-3">&nbsp;</div>
		<div class="col-md-6">
			<a id="OneSearchButton" href="#" class="btn btn-info btn-lg btn-block onesearch">OneSearch! The Library</a>
		</div>
		<div class="col-md-3">&nbsp;</div>
	</div>
	<div class="row" style="margin-top: 50px">
		<div class="col-md-3">&nbsp;</div>
		<div class="col-md-6">
			<a id="CatalogButton" href="#" class="btn btn-info btn-lg btn-block catalog">Physical Materials</a>
		</div>
		<div class="col-md-3">&nbsp;</div>
	</div>
	<?php } else { ?>
	<div class="col-lg-12" style="margin-top: -120px">
		<div class="col-md-12 jumbotron" style="text-align: center; font-stretch: -10px; padding: 10px">
			<h1 class="message tlt" style="font-size: 7.0em">
				Want to meet one-on-one with a librarian?
			</h1>			
			<h3>
				Use this computer to schedule an appointment!
			</h3>
			<h5>Click the "Schedule an Appointment" button below to begin</h5><span class="glyphicon glyphicon-arrow-down"></span>
		</div>
		
		<script>
			$(function() {
				$('.tlt').textillate({
					// enable looping
					loop: true,
					out: {
						effect: 'rotateOutUpRight',
					},
				});
			})
		</script>
	</div>
	<?php } ?>
	<div class="row" style="margin-top: 50px">
		<div id="aptbutton" style="text-align: center">		
			<script type="text/javascript"><!--
				var lc_opt8506 = {};
				lc_opt8506.title = "Make an appointment!";
				lc_opt8506.button_placement = "none";
				lc_opt8506.popup_color = "#0065b0";
				lc_opt8506.css = "http://orwell.unfcsd.unf.edu/opac/assets/css/scheduler.css";
				lc_opt8506.user = "8506";
				//--></script>
			<script src="http://unf.libcal.com/schedulerjs.php?u=8506" type="text/javascript"></script>
			<a href="#" onclick="lc_show_widget8506();">
				<img alt="" src="http://orwell.unfcsd.unf.edu/libtv/cms/images/appointmentbutton.png" title="Schedule an Appointment with me!" align="center" border="0" />
			</a>
		</div>	
	</div>
</div>
