<script language="JavaScript" type="text/javascript">

	dayName = new Array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday") // define an array for the variable "dayName"
	monName = new Array ("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December") // define a new array for the variable "monName"
	now = new Date // define the object "now" as a new Date

	document.write(" " + dayName[now.getDay()] + " - " + monName[now.getMonth()] + " " + now.getDate() + ", "+ now.getFullYear() +" ")

</script>