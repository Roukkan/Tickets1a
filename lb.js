const LBclicked = [];
const LBoutput1 = document.getElementById('LBoutput1');
const LBprice = document.getElementById('LB-price');
const LBcounterElement = document.getElementById('LBcounter');
const LBcontainer = document.getElementById('LB-container');
const LBrowSeat = document.getElementById('LBrowSeat');
const LBSeat = document.getElementById('LB-seat').textContent;
const LBseatLocation = document.getElementById('LBlocation');
const LBseatButton = document.getElementById('LB-select');
const LBoutput = document.getElementById('LBoutput');
const LBrows = 9;
const LBcolumns = [12, 13, 13, 14, 14, 15, 15, 16, 16];
let LBclickCount = 0; 
console.log("LB loaded");
for (let row = 0; row < LBrows; row++) {
    const rowDiv = document.createElement('div'); // Create a new row for each set of buttons
    rowDiv.classList.add('row');

    for (let col = LBcolumns[row]; col >= 1; col--) {
        const LBbutton = document.createElement('button');
        LBbutton.textContent = '';
        LBbutton.classList.add('box');            
        LBbutton.setAttribute('data-bs-toggle', 'tooltip');
        LBbutton.setAttribute('data-bs-placement', 'top');
        LBbutton.setAttribute('data-bs-custom-class', 'custom-tooltip');
        const LBseatType = `${LBSeat} R${row + 1} S${col}`;
        LBbutton.setAttribute('data-bs-title', LBseatType);
        LBbutton.id = LBseatType;
        LBbutton.addEventListener('click', () => {
            if (LBbutton.classList.contains('clicked')) {
                LBbutton.classList.remove('clicked');
            } else {
                LBbutton.classList.add('clicked');
            }
        });
        rowDiv.appendChild(LBbutton);
    }

    LBcontainer.appendChild(rowDiv);
}
     


LBseatButton.addEventListener('click', function() {
    const LBpriceVal = parseInt(LBprice.textContent.replace(/[^\d]/g, ''));          
    LBoutput.textContent = `₱${LBpriceVal.toLocaleString()}`;
    LBseatLocation.textContent = LBSeat;                       
}); 


const LBtoolTipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const LBtooltipList = LBtoolTipTriggerList.map(function (tooltipTriggerEl) {
        const LBtooltip = new bootstrap.Tooltip(tooltipTriggerEl);
        tooltipTriggerEl.addEventListener('mouseleave', () => {
            LBtooltip.hide();
        });
        tooltipTriggerEl.addEventListener('click', () => {
            if (tooltipTriggerEl.classList.contains('clicked')) {
                LBclickCount++; 
            } else {
                LBclickCount--;
            }
            
            const LBclickedCounterElement = document.getElementById('LBcounter');
            LBclickedCounterElement.textContent = LBclickCount;
        });
        return LBtooltip;
    });   

    const LBboxButtons = document.querySelectorAll('.box');
    LBboxButtons.forEach(LBbutton => {
        LBbutton.addEventListener('click', function() {
            const LBclickCount = parseInt(LBcounterElement.textContent);
            const LBpriceVal = parseInt(LBprice.textContent.replace(/[^\d]/g, ''));
            const LBtotalPrice = LBpriceVal * LBclickCount;
            LBoutput1.textContent = `₱${LBtotalPrice.toLocaleString()}`;
                var title = LBbutton.getAttribute("data-bs-title");
                var amount = LBpriceVal;
                    
                var seatIndex = LBclicked.findIndex(LBrowSeat => LBrowSeat.title === title);
                if (seatIndex === -1) {
                   LBclicked.push({ title: title, amount: amount});
                } else {
                    LBclicked.splice(seatIndex, 1);
                }
            });
        });
        
        const LBtotalAmount = document.getElementById("totalAmount");
        const LBconfirmButton = document.getElementById('LBconfirmSeat');
        const LBselectedSeats = document.getElementById("seat-table");
        LBconfirmButton.addEventListener('click', function() {
            LBselectedSeats.innerHTML = "";
            var totalAmount = 0;
        
            LBclicked.forEach(function(LBrowSeat) {
                var LBnewRow = LBselectedSeats.insertRow();
                var LBcellTitle = LBnewRow.insertCell(0);
                LBcellTitle.textContent = LBrowSeat.title;
                
                var LBcellAD = LBnewRow.insertCell(1);
                LBcellAD.textContent = "₱" + LBrowSeat.amount.toLocaleString();
                
                var deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.classList = "delBtn btn btn-danger btn-sm ms-5";
                deleteButton.addEventListener("click", function() {
                    var index = LBclicked.findIndex(entry => entry.title === LBrowSeat.title);
        
                    LBclicked.splice(index, 1); 

                    const clickedButton = document.getElementById(LBrowSeat.title);
                    if (clickedButton) {
                        clickedButton.classList.remove('clicked');
                    }

                    totalAmount -= LBrowSeat.amount;
                    LBtotalAmount.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        
                    LBselectedSeats.deleteRow(index);
        
                    if (LBclicked.length === 0) {
                        LBtotalAmount.textContent = "₱0";
                        LBclickCount = 0;
                        LBcounterElement.textContent = LBclickCount;
                        LBselectedSeats.innerHTML = "";
                    }
                });
        
                LBcellAD.appendChild(deleteButton);
        
                totalAmount += LBrowSeat.amount;
                LBtotalAmount.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
            });
        });
        
        