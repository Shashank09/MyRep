<!DOCTYPE HTML> 

	<html lang="en"> 

		<head> 

			<link rel="stylesheet" type="text/css" href="css/calculator.css">

			<script src="javascript/calculator.js" type="text/javascript"> </script>

			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

			<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
			
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

			<script src="javascript/checkLeft.js" type="text/javscript"> </script>

			<script> 

				$(document).ready(function() {	

					$('.calculator').draggable();

				}) ; 

			</script>

		</head> 

		<body> 

			<div class="calculator" id="calculator" onload="checkLeft()" onmouseover="changeClass()"> 

				<div class="aligner clearfix"> 

					<div class="clearfix"> <!-- Dummy Element -->

						<div class="calcHeader"> Calculator </div>

						<div class="close" onclick="closeCalc()"> X </div> 

					</div>

					<div class="inputArea" id="inputArea"> 

					</div> 

					<div class="queryBox" id="queryBox"></div>

					<div class="left">

						<div class="clearButtons gs">

							<li class="backspace clearButton" id="c" data-value="c" onclick="calculations(this)"> C </li> 

							<li class="fullClear clearButton" id="fc" data-value="fc" onclick="calculations(this)"> CA </li>

							<li class="fullClear clearButton" id="fc" data-value="=" onclick="total()"> = </li>

						</div>

						<div class="buttons gs">  

							<li class="1 Pressbutton" id="1Button" data-value="1" onclick="calculations(this)"> 1 </li> 

							<li class="2 Pressbutton" id="2Button" data-value="2" onclick="calculations(this)"> 2 </li> 

							<li class="3 Pressbutton" id="3Button" data-value="3" onclick="calculations(this)"> 3 </li> 

							<li class="4 Pressbutton" id="4Button" data-value="4" onclick="calculations(this)"> 4 </li> 

							<li class="5 Pressbutton" id="5Button" data-value="5" onclick="calculations(this)"> 5 </li> 

							<li class="6 Pressbutton" id="6Button" data-value="6" onclick="calculations(this)"> 6 </li>

							<li class="7 Pressbutton" id="7Button" data-value="7" onclick="calculations(this)"> 7 </li>

							<li class="8 Pressbutton" id="8Button" data-value="8" onclick="calculations(this)"> 8 </li>

							<li class="9 Pressbutton" id="9Button" data-value="9" onclick="calculations(this)"> 9 </li> 

							<li class="9 Pressbutton" id="9Button" data-value="9" style="opacity:0"></li> 

							<li class="0 Pressbutton" id="0Button" data-value="0" onclick="calculations(this)"> 0 </li>

							<li class="9 Pressbutton" id="9Button" data-value="9" style="opacity:0"></li> 

						</div> 

					</div>

					<div class="right">

						<div class="operators gs">

							<li class="multiplication operatorButton" id="into" data-value="*" onclick="calculations(this)"> * </li>

							<li class="divide operatorButton" id="divide" data-value="/" onclick="calculations(this)"> / </li>

							<li class="add operatorButton" id="add" data-value="+" onclick="calculations(this)"> + </li>

							<li class="subract operatorButton" id="minus" data-value="-" onclick="calculations(this)"> - </li> 

						</div>

					</div>

					<div class="doneWith gs" id="doneWith"> 

						Made in Shashank 

					</div> 

				</div> 

			</div>

		</body>

	</html> 