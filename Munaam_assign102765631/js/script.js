
function mainDropDown(){

var nameArray =["Phones","Laptops","Tablets","Music"];
var fileArray =["phone.php","laptop.php","tablet.php","music.php"];
var element = document.getElementById("mainDrop").value;
var value ="";
 for ( var x =0; x<fileArray.length; x++)
 	if (element == nameArray[x]){
 			value = fileArray[x];
 			window.location.replace(value);
 	}

}


var repeated = 0 ;
function dropDownDataCaller(){

 var select = document.getElementById("mainDrop");	
 var labels =["Phones","Laptops","Tablets","Music"];
    
	if (repeated == 0) {
	for (var i=0; i< labels.length; i++){
		var optionTag = labels[i];
		var element = document.createElement("option");
		element.textContent = optionTag;
		element.value = optionTag;
		select.appendChild(element); }}
		repeated += 1;	
}


function setData(pro){
	sessionStorage.setItem("product", pro);
	window.location.replace("enquiry.php");
}

window.onload = function() {
  getSessionData();
};

function getSessionData(){
	var fileName = location.pathname.split("/").slice(-1);

	if(fileName=='enquiry.php'){

		document.getElementById('subject').value=sessionStorage.getItem("product");
		
		var select = document.getElementById('fservice');
		var options = ["Phones-GrapeProMax", "Phones-GrapeNote11", "Phones-Redmi10", "Phones-GrapeMini","Laptops-GrapeBookPro","Laptops-GrapeBookAir","Laptops-GrapeOmen","Laptops-GrapeEnvy2in1","Tablets-GrapePadPro","Tablets-GrapePadAir","Tablets-GrapeTab2","Tablets-GrapeCallTab","Music-GrapeHeadphonesPro","Music-GrapeAirpodsPro","Music-GrapeAirpods","Grape-AirpodsLite"];
		
		 for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }



	}


	sessionStorage.removeItem('product');

}


function setSubject(){
	var sub = document.getElementById('fservice').value;
	document.getElementById('subject').value = 'RE:Enquiry on '+sub;
}

	var messageStatus = ""; 
function submitData(){
	"use strict";
	var isAllOK = false;

	var firstNameVali = firstName();
	var middleNameVali = middleName();
	var lastNameVali = lastName();
	var dobVali = checkDOB();	
	var emailVali = emailFunc();
	var phoneVali = phoneNumber();
	var streetVali = streetValidator();
	var cityVali = cityValidator();
	var stateVali = stateValidator();
	var postalVali = postalValidator();
	var serviceVali = serviceValidator();
	var subjectVali = subjectValidator();
	var startDateVali = firstDateValidator();
	var endDateVali = endDateValidator();
	var mainVali =   subjectVali && startDateVali && endDateVali&&dobVali &&firstNameVali && middleNameVali && lastNameVali && emailVali && phoneVali && streetVali && cityVali&& stateVali&& postalVali&& serviceVali ;
	if (mainVali == true ){
		isAllOK = true;
		
	 //alert('Form submitted Successfully');
	 //location.reload(); 
	}
	else{
		alert(messageStatus); 
		messageStatus = ""; 
		isAllOK = false;
	}
	return isAllOK;
}

function endDateValidator(){
	var dobOK = true;
	var date = document.getElementById('fenddate').value;
	if(date ==""){
		dobOK = false;
		messageStatus += "Please select your Ending Date  \n";
	}
	return dobOK;
}
function firstDateValidator(){
	var dobOK = true;
	var date = document.getElementById('fstartdate').value;
	if(date ==""){
		dobOK = false;
		messageStatus += "Please select your Starting Date  \n";
	}
	return dobOK;
}
function subjectValidator(){
	var isSubjectOK = false;
	var subject = document.getElementById("subject").value;

	if (subject!=""){
		isSubjectOK = true;
	}

	else{
		isSubjectOK = false;
		messageStatus += "Please fill a subject you want to enquire \n";
	}
	return isSubjectOK;
}

function serviceValidator(){
	var isServiceOK = false;
	var service = document.getElementById("fservice").value;

	if (service!=""){
		isServiceOK = true;
	}

	else{
		isServiceOK = false;
		messageStatus += "Please select a service\n";
	}
	return isServiceOK;
}
function postalValidator(){
	var postalOK = true;
	var number = document.getElementById("fpostcode").value;
	var pattern = /[0-9]{5}$/;
	if (number.length != 5 || !pattern.test(number)){
		messageStatus = messageStatus + "Your Postal Code must contain exactly 5 digits\n";
		postalOK = false;
	}
	return postalOK;
	}

function stateValidator(){
	var isStateOK = false;
	var state = document.getElementById("fstate").value;

	if (state !=""){
		isStateOK = true;
	}

	else{
		isStateOK = false;
		messageStatus += "Select a State\n";
	}
	return isStateOK;
}

function cityValidator(){
	var street = document.getElementById('fcity').value;
	var pattern = /^[a-zA-Z ]+$/;
	var isCityOK = true;
	if (street.length == 0 || street.length >20){
		messageStatus += "Your City Address must consist between 1 to 20 characters\n";
		isCityOK = false; 
	}
	else{
		if(!pattern.test(street)){
			messageStatus +="Your City Address must contain letters only\n";
			isCityOK = false;
		}
	}
	return isCityOK;
}

function streetValidator(){
	var street = document.getElementById('fstreet').value;
	var pattern = /^[a-zA-Z ]+$/;
	var isStreetOK = true;
	if (street.length == 0 || street.length >60){
		messageStatus += "Your Street Address must consist between 1 to 60 characters\n";
		isStreetOK = false; 
	}
	else{
		if(!pattern.test(street)){
			messageStatus +="Your Street Address must contain letters only\n";
			isStreetOK = false;
		}
	}
	return isStreetOK;
}
function phoneNumber(){
	var phoneOK= true;
	var number = document.getElementById("fphone").value;
	var pattern = /^[0-9]+$/;
	if (number.length == 0 || number.length > 10 || !pattern.test(number) ){
		messageStatus = messageStatus + "Your Phone Number must contain 1 to 10 digits only \n";
		phoneOK = false;
	}
	return phoneOK;
}

function emailFunc () {
	var email = document.getElementById("femail").value;
	var emailOK = true;
	var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
	if (email.length == 0){
		messageStatus = messageStatus + "Plese type your email address\n";
		emailOK = false;
	}

	else{
		if (!pattern.test(email)){
			messageStatus = messageStatus + "Please Enter a valid Email address\n";
			emailOK = false;
		}
	}
	return emailOK;
}

function checkDOB(){
	var dobOK = true;
	var date = document.getElementById('fdob').value;
	if(date ==""){
		dobOK = false;
		messageStatus += "Please Fill in your date of birth \n";
	}
	return dobOK;
}

function firstName () {

	var name = document.getElementById('fname').value;
	var pattern = /^[a-zA-Z ]+$/ ;
	var status = true;
	if ((name == "" || name.length > 25 )){ 
		messageStatus += "Your First Name must contain between 1 to 25 characters\n";
		status = false; 
	}
	else{
		if (!pattern.test(name)){
			messageStatus += "Your First Name must only contain letters\n";
			status = false; 
		}
	}
	return status;
}

function middleName(){

	var name = document.getElementById('fmname').value;
	var pattern = /^[a-zA-Z ]+$/ ;
	var status = true;
	if ((name == "" || name.length > 25 )){ 
		messageStatus += "Your Midde Name must contain between 1 to 25 characters\n";
		status = false; 
	}
	else{
		if (!pattern.test(name)){
			messageStatus += "Your Midde Name must only contain letters\n";
			status = false; 
		}
	}
	return status;
}

function lastName(){
	var name = document.getElementById('flname').value;
	var pattern = /^[a-zA-Z ]+$/ ;
	var status = true;
	if ((name == "" || name.length > 25 )){ 
		messageStatus += "Your Last Name must contain between 1 to 25 characters\n";
		status = false; 
	}
	else{
		if (!pattern.test(name)){
			messageStatus += "Your Last Name must only contain letters\n";
			status = false; 
		}
	}
	return status;
}


