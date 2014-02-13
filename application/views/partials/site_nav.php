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
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php if ($mode == "kiosk") { echo base_url('/'); } else { echo "#"; } ?>">
        Thomas G. Carpenter Library
      </a>
    </div>
    <?php if ($mode == "kiosk") { ?>
    <div class="collapse navbar-collapse pull-right">
      <ul class="nav navbar-nav">
        <li><a id="OneSearchNavButton" href="#">OneSearch! The Library</a></li>
        <li><a id="CatalogNavButton" href="#">Physical Materials</a></li>
      </ul>
    </div>
		<?php } else { ?>
    <div class="collapse navbar-collapse pull-right">
      <ul class="nav navbar-nav">
        <li><a href="/opac?mode=instruction">Library Instruction</a></li>
      </ul>
    </div>
		<?php } ?>
  </div>
</div>
