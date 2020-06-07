/**
* Author: Divanshu Verma
* Target: enquire.html, payment.html
* Purpose: Validate HTML form submission and pass info from enquire.html to payment.html
*/

"use strict";
var debug = true;
/*************** Enquiry Form Validation ***************/
function validateEnquire() {
	var errMsg="";
	var result=true;

	var firstName = document.getElementById("first-name").value.trim();
	var lastName = document.getElementById("last-name").value.trim();
	var email = document.getElementById("email").value.trim();
	var streetAddress = document.getElementById("street_address").value.trim();
	var suburb = document.getElementById("suburb").value.trim();

	//State Dropdown
	var state = document.getElementById("state");
	var stateText = state.options[state.selectedIndex].text;

	var postcode = document.getElementById("postcode").value.trim();
	var phone = document.getElementById("phone").value.trim();

	var radioPost = document.getElementById("post").checked;
	localStorage.setItem("radioPost", radioPost)
	var radioEmail=document.getElementById("radio_email").checked;
	localStorage.setItem("radioEmail", radioEmail)
	var radioPhone=document.getElementById("radio_phone").checked;
	localStorage.setItem("radioPhone", radioPhone)
	
	//Preferred Contact
	var radioPost = document.getElementById("post").checked;
	var radioEmail=document.getElementById("radio_email").checked;
	var radioPhone=document.getElementById("radio_phone").checked;
	
	//Pricing Dropdown
	var pricing = document.getElementById("pricing-plan");
	var pricingText = pricing.options[pricing.selectedIndex].text;

	//Number of months to sign up for
	var months = document.getElementById("months").value.trim();

	//Product Features
	var chkboxPersonalised = document.getElementById("personalised").checked;
	var chkboxProjects = document.getElementById("real-projects").checked;
	var chkboxSupport = document.getElementById("peer-support").checked;

	var comment = document.getElementById("comment").value.trim();
	
	/************ Validation *************/
	if (!debug) {  //disable validation
		if (firstName=="") {
			errMsg += "Please enter your first name.\n";
		}

		if (lastName=="") {
			errMsg += "Please enter your last name.\n";
		}
		
		if (email=="") {
			errMsg += "Please enter your email.\n";
		}

		if (streetAddress=="") {
			errMsg += "Please enter your street address.\n";
		}

		if (suburb=="") {
			errMsg += "Please enter your suburb.\n";
		}

		if (postcode=="") {
			errMsg += "Please enter your postcode.\n";
		}

		//State/Postcode Validation
		if (stateText=="-- select --") {
			errMsg += "Please select one of the states.\n";
		}
		else if (stateText=="VIC" && !postcode.match(/^3|^8/)) {
			errMsg += "A postcode for Victoria must start with 3 or 8.\n";
		}
		else if (stateText=="NSW" && !postcode.match(/^1|^2/)) {
			errMsg += "A postcode for NSW must start with 1 or 2.\n";
		}
		else if (stateText=="NT" && !postcode.match(/^0/)) {
			errMsg += "A postcode for Northern Territory must start with 0.\n";
		}
		else if (stateText=="WA" && !postcode.match(/^6/)) {
			errMsg += "A postcode for Western Australia must start with 6.\n";
		}
		else if (stateText=="SA" && !postcode.match(/^5/)) {
			errMsg += "A postcode for South Australia must start with 5.\n";
		}
		else if (stateText=="TAS" && !postcode.match(/^7/)) {
			errMsg += "A postcode for Tasmania must start with 7.\n";
		}	
		else if (stateText=="ACT" && !postcode.match(/^0/)) {
			errMsg += "A postcode for ACT must start with 0.\n";
		}

		if (phone=="") {
			errMsg += "Please enter your phone number.\n";
		}

		//Months Validation
		if (months=="") {
			errMsg += "Please enter the number of months you wish to sign up for.\n";
		}
		else if (months < 1) {
			errMsg = errMsg + "The number of months must be higher than 0.\n"
		}
		else if (months > 500) {
			errMsg = errMsg + "The number of months must be less than 500.\n"
		}

		if (pricingText=="-- select --") {
			errMsg += "Please select a pricing plan.\n";
		}
	}
	if (errMsg!="") { 	// There are errors
		alert (errMsg); //Displays error
		result=false;
	}
	else {    // no error, save info to storage
		saveInfo (firstName, lastName, email, streetAddress, suburb, postcode, phone, months, stateText, pricingText, comment, radioPost, radioEmail, radioPhone, chkboxPersonalised, chkboxProjects, chkboxSupport);
	}
	return result;	
}

	/*************** Save Info ***************/
function saveInfo (firstName, lastName, email, streetAddress, suburb, postcode, phone, months, stateText, pricingText, comment, radioPost, radioEmail, radioPhone, chkboxPersonalised, chkboxProjects, chkboxSupport){ 
	localStorage.setItem("firstName", firstName);
	localStorage.setItem("lastName", lastName);
	localStorage.setItem("email", email);
	localStorage.setItem("streetAddress", streetAddress);
	localStorage.setItem("suburb", suburb);
	localStorage.setItem("postcode", postcode);
	localStorage.setItem("phone", phone);
	localStorage.setItem("months", months);	
	localStorage.setItem("stateText", stateText);
	localStorage.setItem("pricingText", pricingText);
	localStorage.setItem("comment", comment);
	localStorage.setItem("radioPost", radioPost)
	localStorage.setItem("radioEmail", radioEmail)
	localStorage.setItem("radioPhone", radioPhone)
	localStorage.setItem("chkboxPersonalised", chkboxPersonalised)
	localStorage.setItem("chkboxProjects", chkboxProjects)
	localStorage.setItem("chkboxSupport", chkboxSupport)
}

	/******** Get Info From Storage & Display It ********/
function getInfo(){ 
	if (typeof(Storage)!=="undefined"){	// the browser supports web storage
		if (localStorage.getItem("firstName") !== null){
			document.getElementById("first-name").value = localStorage.getItem("firstName");
			document.getElementById("last-name").value = localStorage.getItem("lastName");
			document.getElementById("email").value = localStorage.getItem("email");

			//Full Address
			document.getElementById("full-address").innerHTML = localStorage.getItem("streetAddress") + ", " + localStorage.getItem("suburb") + ", " + localStorage.getItem("stateText") + " " + localStorage.getItem("postcode");
			document.getElementById("street_address").value = localStorage.getItem("streetAddress");
			document.getElementById("suburb").value = localStorage.getItem("suburb");
			document.getElementById("state").value = localStorage.getItem("stateText");
			document.getElementById("postcode").value = localStorage.getItem("postcode");

			document.getElementById("phone").value = localStorage.getItem("phone");
			document.getElementById("pricing-plan").value = localStorage.getItem("pricingText");
			document.getElementById("months").value = localStorage.getItem("months");

			// Calculate total cost
			var cost = 0; 				//create variable cost
			var months = Number(localStorage.getItem("months")); 						//create variable months and get value from storage
			if (localStorage.getItem("pricingText") == "Basic - $1/per month"){ 		//If basic plan is chosen
				cost = 1*months;		//Then the cost is $1 * the number of months
			}
			else if (localStorage.getItem("pricingText") == "Pro - $19.99/per month"){ 	//If pro plan is chosen
				cost = 19.99*months;	//Then the cost is $19.99 * the number of months
			}
			else if (localStorage.getItem("pricingText") == "Teams - $24.99/per month"){ //If teams plan is chosen
				cost = 24.99*months;	//Then the cost is $24.99 * the number of months
			}
			document.getElementById("totalCost").value = "$" + cost.toFixed(2);			 //Display Cost

			//Preferred Contact Radio Buttons
			var radioPost = localStorage.getItem("radioPost")
			document.getElementById("post").checked = (radioPost=="true");
			var radioEmail = localStorage.getItem("radioEmail")
			document.getElementById("radio_email").checked = (radioEmail=="true");
			var radioPhone = localStorage.getItem("radioPhone")
			document.getElementById("radio_phone").checked = (radioPhone=="true");	
			
			//Product Features Checkboxes
			var chkboxPersonalised = localStorage.getItem("chkboxPersonalised")
			
			document.getElementById("personalised").checked = (chkboxPersonalised=="true");
			var chkboxProjects = localStorage.getItem("chkboxProjects")
			document.getElementById("real-projects").checked = (chkboxProjects=="true");
			var chkboxSupport = localStorage.getItem("chkboxSupport")
			document.getElementById("peer-support").checked = (chkboxSupport=="true");
		}
	}
}

	/******** Payment Form Validation ********/
function validatePayment() {
	var errMsg="";
	var result=true;
	
	//Card Type Dropdown
	var cardType = document.getElementById("card-type");
	var cardTypeText = cardType.options[cardType.selectedIndex].text;

	var cardName = document.getElementById("card-name").value.trim();
	var cardNumber = document.getElementById("card-number").value.trim();
	var monthExpiry = document.getElementById("month-expiry").value.trim();
	var yearExpiry = document.getElementById("year-expiry").value.trim();
	var cvv = document.getElementById("cvv").value.trim();

	if (!debug) {
		if (cardTypeText=="-- select --") {
			errMsg += "Please select your credit card type. \n";
		}

		//Card name Validation
		if (cardName=="") {
			errMsg += "Please enter the name on the credit card.\n";
		}
		else if (cardName.length > 40) {
			errMsg += "Card name must be less than 40 characters in length.\n";
		}
		else if (!cardName.match(/^[a-zA-Z ]*$/)) {
			errMsg += "Card name must be alphabetical and spaces only.\n";
		}

		//Card Number/Type Validation
		if (cardTypeText=="Visa" && !cardNumber.match(/^4[0-9]{12}(?:[0-9]{3})?$/)) {
			errMsg += "A Visa card number must start with 4 and have 16 digits. \n";
		}
		else if (cardTypeText=="Mastercard" && !cardNumber.match(/^(5[1-5][0-9]{14}|2(22[1-9][0-9]{12}|2[3-9][0-9]{13}|[3-6][0-9]{14}|7[0-1][0-9]{13}|720[0-9]{12}))$/)) {
			errMsg += "A Mastercard card number must start with 51 through to 55 and have 16 digits. \n";
		}
		else if (cardTypeText=="American Express" && !cardNumber.match(/^3[47][0-9]{13}$/)) {
			errMsg += "An American Express card number must start with 34 or 37 and have 15 digits. \n";
		}

		if (monthExpiry=="") {
			errMsg += "Please enter the credit card expiry month. \n";
		}
		else if (monthExpiry.length > 2) {
			errMsg += "Credit card expiry month must be in the format MM. \n";
		}
		else if(monthExpiry > 12){
			errMsg += "There are only 12 months in a year. Not " + monthExpiry + "! \n";
		}
		if (yearExpiry=="") {
			errMsg += "Please enter the credit card expiry year. \n";
		}
		else if (monthExpiry.length > 2) {
			errMsg += "Credit card expiry month must be in the format MM. \n";
		}

		if (cvv=="") {
			errMsg += "Please enter the credit card cvv number. \n";
		}
	}
	if (errMsg!="") {
		alert (errMsg);
		result=false;
	}

	return result;	
}

function clearStorage(){  //For cancel button
	localStorage.clear();
	location.href="index.php";
}

//*************** Initialise ***************
function init() {
	if (document.getElementById("enquireForm")!=null) {  // it is enquire page 
		document.getElementById("enquireForm").onsubmit = validateEnquire;
	}
	else if (document.getElementById("paymentForm")!=null) { // it is payment page  
		getInfo();     // fill up the page with information passed from enquire page
		document.getElementById("paymentForm").onsubmit = validatePayment;
		document.getElementById("cancelOrder").onclick = clearStorage;
	}
}
window.addEventListener("load",init);