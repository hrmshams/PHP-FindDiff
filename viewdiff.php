// this must be converted to blade file!

<html>

<head>
	<style type="text/css">
		p {
			margin-top: 0
		}

		ins {
			color: green;
			background: #dfd;
			text-decoration: none
		}

		del {
			color: red;
			background: #fdd;
			text-decoration: none
		}

		.panecontainer>p {
			margin: 0;
			border: 1px solid #bcd;
			border-bottom: none;
			padding: 1px 3px;
			background: #def;
			font: 14px sans-serif
		}

		.panecontainer>p+div {
			margin: 0;
			padding: 2px 0 2px 2px;
			border: 1px solid #bcd;
			border-top: none
		}

		.pane {
			margin: 0;
			padding: 0;
			border: 0;
			width: 100%;
			min-height: 20em;
			overflow: auto;
			font: 12px monospace
		}

		#htmldiff {
			color: gray
		}

		#htmldiff.onlyDeletions ins {
			display: none
		}

		#htmldiff.onlyInsertions del {
			display: none
		}
	</style>
</head>

<body>
	<div>
		<?php


		include 'finediff.php';

		$from_text = ""; //this data must be fed in laravel blade
		$to_text = "";
		$diff_opcodes = FineDiff::getDiffOpcodes($from_text, $to_text, FineDiff::$characterGranularity); //this data must be fed in laravel blade

		$rendered_diff = FineDiff::renderDiffToHTMLFromOpcodes($from_text, $diff_opcodes);

		?>
		<div class="panecontainer" style="width:99%">
			<div>
				<div id="htmldiff" class="pane" style="white-space:pre-wrap"><?php
																				echo $rendered_diff; ?></div>
			</div>
		</div>
</body>

</html>