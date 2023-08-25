const PAclicked = [];
const PAoutput1 = document.getElementById('PAoutput1');
const PAprice = document.getElementById('PA-price');
const PAcounterElement = document.getElementById('PAcounter');
const PAcontainer = document.getElementById('PA-container');
const PArowSeat = document.getElementById('PArowSeat');
const PAseat = document.getElementById('PA-seat').textContent;
const PASeatlocation = document.getElementById('Seatlocation');
const PAseatsButton = document.getElementById('PA-select');
const PAoutput = document.getElementById('PAoutput');
const PArows = 10;
const PAcolumns = 12;
let PAclickCount = 0; 
console.log("PA loaded");
for (let row = 1; row <= PArows; row++) {
    for (var col = PAcolumns; col >= 1; col--) {
        const PAbutton = document.createElement('button');
        PAbutton.textContent = '';
        PAbutton.classList.add('box');            
        PAbutton.setAttribute('data-bs-toggle', 'tooltip');
        PAbutton.setAttribute('data-bs-placement', 'top');
        PAbutton.setAttribute('data-bs-custom-class', 'custom-tooltip');
        const PAseatType = `${PAseat} R${row} S${col}`;
        PAbutton.setAttribute('data-bs-title', PAseatType);
        PAbutton.id = PAseatType;
        PAbutton.addEventListener('click', () => {
        if (PAbutton.classList.contains('clicked')) {
            PAbutton.classList.remove('clicked');
        } else {
            PAbutton.classList.add('clicked');
        }
        PArowSeat.textContent = PAbutton.getAttribute('data-bs-title');
    });
    PAcontainer.appendChild(PAbutton);
    }
}      

PAseatsButton.addEventListener('click', function() {
    const PApriceVal = parseInt(PAprice.textContent.replace(/[^\d]/g, ''));          
    PAoutput.textContent = `₱${PApriceVal.toLocaleString()}`;
    PASeatlocation.textContent = PAseat;                       
}); 


const PAtoolTipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const PAtooltipList = PAtoolTipTriggerList.map(function (tooltipTriggerEl) {
        const PAtooltip = new bootstrap.Tooltip(tooltipTriggerEl);
        tooltipTriggerEl.addEventListener('mouseleave', () => {
            PAtooltip.hide();
        });
        tooltipTriggerEl.addEventListener('click', () => {
            if (tooltipTriggerEl.classList.contains('clicked')) {
                PAclickCount++; 
            } else {
                PAclickCount--;
            }
            
            const PAclickedCounterElement = document.getElementById('PAcounter');
            PAclickedCounterElement.textContent = PAclickCount;
        });
        return PAtooltip;
    });   

    const PAboxButtons = document.querySelectorAll('.box');
    PAboxButtons.forEach(PAbutton => {
        PAbutton.addEventListener('click', function() {
            const PAClickCount = parseInt(PAcounterElement.textContent);
            const PAPriceVal = parseInt(PAprice.textContent.replace(/[^\d]/g, ''));
            const totalPrice = PAPriceVal * PAClickCount;
            PAoutput1.textContent = `₱${totalPrice.toLocaleString()}`;
                var title = PAbutton.getAttribute("data-bs-title");
                var amount = PAPriceVal;
                    
                var seatIndex = PAclicked.findIndex(PArowSeat => PArowSeat.title === title);
                if (seatIndex === -1) {
                   PAclicked.push({ title: title, amount: amount});
                } else {
                    PAclicked.splice(seatIndex, 1);
                }
            });
        });

        const PAtotalAmount = document.getElementById("totalAmount");
        const PAConfrimButton = document.getElementById('PAconfirmSeat');
        const PAselectedSeats = document.getElementById("seat-table");
        PAConfrimButton.addEventListener('click', function() {
            // PAselectedSeats.innerHTML = "";
            var totalAmount = 0;
        
            PAclicked.forEach(function(PArowSeat) {
                var PAnewRow = PAselectedSeats.insertRow();
                var PAcellTitle = PAnewRow.insertCell(0);
                PAcellTitle.textContent = PArowSeat.title;
                
                var PAcellAD = PAnewRow.insertCell(1);
                PAcellAD.textContent = "₱" + PArowSeat.amount.toLocaleString();
                
                var deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.classList = "delBtn btn btn-danger btn-sm ms-5";
                deleteButton.addEventListener("click", function() {
                    var index = PAclicked.findIndex(entry => entry.title === PArowSeat.title);
        
                    PAclicked.splice(index, 1); 

                    const clickedButton = document.getElementById(PArowSeat.title);
                    if (clickedButton) {
                        clickedButton.classList.remove('clicked');
                    }

                    totalAmount -= PArowSeat.amount;
                    PAtotalAmount.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        
                    PAselectedSeats.deleteRow(index);
        
                    if (PAclicked.length === 0) {
                        PAtotalAmount.textContent = "₱0";
                        PAclickCount = 0;
                        PAcounterElement.textContent = PAclickCount;
                        PAselectedSeats.innerHTML = "";
                    }
                });
        
                PAcellAD.appendChild(deleteButton);
        
                totalAmount += PArowSeat.amount;
                PAtotalAmount.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
            });
        });
        