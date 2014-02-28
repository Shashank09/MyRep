function calculations(elem) {

	value = elem.getAttribute('data-value') ; 

	calcBox = document.getElementById("inputArea")  ; 

	if(isNaN(value)) { 

		if(value == '*' || value == '/' || value == '-' || value == '+') {

			calcBox.innerHTML += value ; 

		}

		else if(value == 'c') {

			inputText = calcBox.innerHTML ; 

			lengthMinusOne = inputText.length - 1 ; 

			modified = inputText.substr(0,lengthMinusOne) ; 

			calcBox.innerHTML = modified ; 

		}

		else if(value == 'fc') {

			calcBox.innerHTML = '' ; 

			document.getElementById("queryBox").innerHTML = '' ;

			document.getElementById("queryBox").style.height = '0px' ;
			
			document.getElementById("doneWith").style.top = "345px" ; 

		}

	}

	else {

		calcBox.innerHTML += value ;

	}

}

function total() {

	document.getElementById("queryBox").style.height = '19px' ; 

	calcBox = document.getElementById("inputArea") ; 

	document.getElementById("queryBox").innerHTML = calcBox.innerHTML + '<span style="font-family:helvetica ; font-size:10px ; color:white; ">=</span>';

	document.getElementById("doneWith").style.top = '369px' ;  

	calcBox.innerHTML = eval(calcBox.innerHTML) ; 

}

function toggleCalc() {

	calc = document.getElementById("calculator").style ; 

	calc.msTransform = 'scale(1)' ;

	calc.MozTransform = 'scale(1)' ;

	calc.WebkitTransform = 'scale(1)' ;

	calc.OTransform = 'scale(1)' ; 

	calc.transform = 'scale(1)' ;

	calc.opacity = '1' ; 

	calc.zIndex = '1000000' ; 

}

function closeCalc() {

	calc = document.getElementById("calculator").style ; 

	calc.msTransform = 'scale(0.2)' ;

	calc.MozTransform = 'scale(0.2)' ;

	calc.WebkitTransform = 'scale(0.2)' ;

	calc.OTransform = 'scale(0.2)' ; 

	calc.transform = 'scale(0.2)' ;

	calc.opacity = '0' ; 

	calc.zIndex = '-1' ; 	

	done = false ;

	calcClass = document.getElementById("calculator") ;

	calcClass.className = 'calculator' ;   

}

done = false ; 

function changeClass() {

	if(done == true) {



	} 

	else {

		done = true ; 

		calcClass = document.getElementById("calculator") ; 

		calcClass.className = calcClass.className + ' noTransition' ; 

	}

}  
