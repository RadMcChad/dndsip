<html>
	<head>
		<title>DNDSIP: DM TOOLS</title>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="dm_tools.css">

		<!-- JQUERY & JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="dm_tools.js"></script>
		<script>
	  	$(document).ready(function(){
		    $('#diceroller').load("diceroller.html");
		});
  </script>

	</head>
	<body>
		<!-- placeholder to load dice roller -->
		<div id="diceroller"></div>
		<div id="pagetitle">DM TOOLS</div>

		<!-- INIT TRACKER -->
		<div id="initTrackerWrapper" class="column">
			<div id="initHeader">
				<span id="initTrackerName">INIT TRACKER</span>
				<input type="button" id="initNextTurn" value="Next Turn >" onClick="nextTurn()">
			</div>

			<div id="initTurnOrder">
				<div id="initCurrentTurnText" class="turnlabel">CURRENT TURN:</div>
				<div class="turn" ally="true">
					<div class="turnChName">Character Name</div>
					<div class="turnRoll">Roll</div>
					<div class="deleteTurnButton">-</div>
				</div>
				<div id="initNextTurnText" class="turnlabel">NEXT TURNS:</div>

			</div>

			<div id="initNewTurn">
				<input type="text" id="initNewTurnName" placeholder="Character Name">
				<input type="number" id="initNewTurnRoll" placeholder="Roll">
				<div id="initNewTurnEnemyBox">
					<label id="initEnemyText" for="initNewTurnEnemy">Enemy?</label>
					<input type="checkbox" id="initNewTurnEnemy">
				</div>
				<input type="button" id="initNewTurnAdd" value="Add" onclick="addTurn()"></input>

			</div>
		</div>

		<!-- DM NOTES -->
		<div id="notesWrapper" class="column">
			This space is reserved for the notes section.
			<textarea id="dmNotes">This is for notes.</textarea>

		</div>

	</body>
</html>