$(document).ready(function() { 
	var xmlhttp = new XMLHttpRequest();
	var url = "employees.json";
	
	xmlhttp.onreadystatechange = function() {
		//Runs if 4: request finished and response is ready and status: 200 = "OK"
	    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	        var employeeArr = JSON.parse(xmlhttp.responseText);
	        //Triggers the loop function to print out the json file
	        printEmployees(employeeArr);
	    }
	};
	
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	
	function printEmployees(arr) {
	    var out = "";
	    var i;
	    for(i = 0; i < arr.length; i++) {
	    	out += '<tr>';
	        out += '<td>' + arr[i].firstname + '</td>';
	        out += '<td>' + arr[i].lastname + '</td>';
	        out += '<td>' + arr[i].age + '</td>';
	        if(arr[i].sex == "m"){
	        	out += '<td>' + "Male" + '</td>';
	        };
	        if(arr[i].sex == "f"){
	        	out += '<td>' + "Female" + '</td>';
	        };
	        out += '<tr>';
	        out += '</table>';
	    }
	    
	    //adds the out array to the table once the loop is complete
	    document.getElementById("results").innerHTML = out;
	}
});






