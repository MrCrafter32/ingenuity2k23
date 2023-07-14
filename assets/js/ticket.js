var price, noTickets, total participant_tickets;
function calc() {
    type = document.getElementByID("type").value;
    if (type == "visitor"){
        price = 150;
        noTickets = document.getElementById("n-tickets").value;
        total = parseFloat(price) * notickets;
    }else if (type == "participant"){
        price = 250;
        noTickets = document.getElementById("n-participants").value;
        total = parseFloat(price) * participant_tickets; 
    }
    if (!isNaN(total)){
    document.getElementById("total").innerHTML = total;}
}
