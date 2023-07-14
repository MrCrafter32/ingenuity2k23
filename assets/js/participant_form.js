var ticket_type = document.getElementById("type");
var participant_deets = document.getElementById("participant_details");
type.addEventListener("change", function(){
		if(ticket_type.value == "participant"){
			participant_deets.style.display = "block"
		}
		else{
			participant_deets.style.display = "none"
		}	
	}