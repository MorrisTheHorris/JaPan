<?php
function swindow($a) {
	foreach ($a as &$b) {
		echo "
		<div id=\"minbar\">
<div id=\"" . $b . "-mindraggable\">
	<table>
		<tr>
			<td>
				<input type=\"image\" id=\"" . $b . "-min\" src=\"img/window_min/" . $b . ".png\" alt=\"Restore\" class=\"glass-button restore\"/>
			</td>
			<td>
				<div class=\"sidebar glass-button\" >&nbsp;</div>
			</td>
		</tr>
	</table>
</div>
</div>
<div class=\"main glass draggable\" id=\"" . $b . "-draggable\" style=\"\" >
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
		echo "
</div>
";
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
		    $("#' . $b . '-draggable").resizable({ animate: true, containment: "html", helper: "ui-resizable-helper"});
		    $( "#' . $b . '-mindraggable" ).draggable({ containment: "html", scroll: false, opacity: 0.5, axis: "y", cursor: "s-resize"});
		  });
		</script>
<script>
var test = document.getElementById("' . $b . '-draggable");
test.style.width = "400px";
test.style.height = "20%";
test.style.left = "' . rand(100,900) . 'px";
</script>
';
	}
	unset($b);
}
?>