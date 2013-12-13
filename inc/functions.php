<?php
//JAvascriptPANel system designed and coded by Harrison Scott 2013/2014. Designed for the production of Merit System OS, Fruit OS and future projects.
//Bitcoin:  1NSKEpEmtvmKxaTWwEWG8dhic6czffGJYe
//Litecoin: Lhbhdo4wpYCT5iUbTE6g8KFJ3txqETpHXz
//Credit to JQuery and Glyphicons
function swindow($a) {
	foreach ($a as &$b) {
		echo "
		<div id=\"minbar\">
		<div id=\"" . $b . "-mindraggable\">
		<input type=\"image\" id=\"" . $b . "-min\" src=\"img/window_min/" . $b . ".png\" alt=\"Restore\" class=\"glass-button restore\" /><img class=\"sidebar glass-button\" alt=\"\">
		</div>
		</div>
		<div class=\"main glass ui-widget-content draggable\" id=\"" . $b . "-draggable\">
		<!--[if lt IE 9]>
		<div class=\"legacy-ie-fix\"></div>
		<![endif]-->
		<div class=\"bar glass\" style=\"\">
		<a id=\"logo\">
			&nbsp;
		<img src=\"img/window_min/" . $b . ".png\" alt=\"\"></a>
		<a id=\"title\">" . $b . ".osm</a>
		<a id=\"buttons\">
		<img src=\"img/hide.png\" alt=\"\" id=\"" . $b . "-hide\">
			&nbsp;
		<img src=\"img/exit.png\" alt=\"\">&nbsp;</a>
		</div>
		";
		include("inc/content/" . $b . ".inc.php");
		echo "</div>";
		echo '
		<script>
		$("#' . $b . '-min").hide();
		$( "#' . $b . '-mindraggable" ).hide();
		var displayed = true;
		$("#' . $b . '-min").click(function(){
		  displayed = true;
		  $("#' . $b . '-min").hide("medium");
		  $( "#' . $b . '-mindraggable" ).hide("fast");
		  $("#' . $b . '-draggable").toggle("medium",(function(){
		  }));
		});
		$("#' . $b . '-hide").click(function(){
		  displayed = false;
		  $("#' . $b . '-min").show("medium");
		  $( "#' . $b . '-mindraggable" ).show("fast");
		  $("#' . $b . '-draggable").toggle("medium",(function(){
		  }));
		});
		</script>
		<script>
		  $(function() {
		    $("#' . $b . '-draggable").draggable({ containment: "html", scroll: false, opacity: 0.5, handle: ".bar" });
		    $( "#' . $b . '-mindraggable" ).draggable({ containment: "html", scroll: false, opacity: 0.5, axis: "y", cursor: "s-resize"});
		  });
		</script>

		';
	}
	unset($b);
}
?>