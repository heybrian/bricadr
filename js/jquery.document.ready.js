// JavaScript Document

// var nums = ['1.297B', '1.317T', '1.641B', '1.641M', '1.75B', '1.88M'];
		var M = 1000,
			B = 1000 * 1000,
			T = 1000 * 1000 * 1000;
		var mulitpliers = {
			M: M,
			B: B,
			T: T
		};
		function parseNums(num) {
			var a = num.charAt(num.length - 1);
			var b = mulitpliers[a];
			if (a == 'M' || a == 'B' || a == 'T') {
				num = new Number(num.replace(a, "")).toFixed(3) * 1000 * b;
			} else {
				num = 0;
			}
			return num;
		}
		$.tablesorter.addParser({
			// set a unique id
			id: 'marketCap',
			is: function(s) {
				// return false so this parser is not auto detected
				return false;
			},
			format: function(s) {
				// format your data for normalization
				return parseNums(s);
			},
			// set type, either numeric or text
			type: 'numeric'
		});


// Engage TableSorter		
		$("#bricAdr").tablesorter({
			sortList: [[3,1],[4,1]], // Sort by Column 3, then 4; highest first
			headers: {
				3: { sorter: 'digit' },
				4: { sorter: 'digit' },
				5: { sorter: 'digit' },
				6: { sorter: 'marketCap' }, // Sort style
				7: { sorter: 'digit' }
			}
		});


// Lightbox	
		$(".bricBox").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
				});


// Change the color of the stock change and percent	
	var priceColor;
	$("tr td:nth-child(4)").each(function() {
		priceColor = $(this);
		if (priceColor.html().charAt(0) == '-') {
			priceColor.css( { color: '#b22222', fontWeight: 'bold'} );
		}
	
		if (priceColor.html().charAt(0) == '+') {
			priceColor.css( { color: 'green', fontWeight: 'bold'} );
		}
		
	});
	
	$("tr td:nth-child(5)").each(function() {
		priceColor = $(this);
		if (priceColor.html().charAt(0) == '-') {
			priceColor.css('color', '#b22222');
		}
	
		if (priceColor.html().charAt(0) == '+') {
			priceColor.css('color', 'green');
		}
		
	});

	
// OLD -- Change the color of the stock change and percent	
//	var rowCount = document.getElementById("bricAdr").getElementsByTagName("tr").length; // count rows
//	for (i=1; i<rowCount; i++) {
	
//	mytable	= document.getElementsByTagName("table")[0]; // navigate to table
//	myrow	= mytable.getElementsByTagName("tr")[i]; // navigate to the second tr (ignore thead)
//	mycel	= myrow.getElementsByTagName("td")[3]; // navigate to the third td
//	mynumber= mycel.innerHTML.charAt(0);

//	if(mynumber=="-") {
//		mycel.style.color = "#b22222";
//		mycel.style.fontWeight = "bold";
//		}
//	if(mynumber=="+") {
//		mycel.style.color = "green";
//		mycel.style.fontWeight = "bold";
//		}
//	}
