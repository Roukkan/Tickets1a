const PBclicked = [];
const PBoutput1 = document.getElementById('PBoutput1');
const PBprice = document.getElementById('PB-price');
const PBcounterElement = document.getElementById('PBcounter');
const PBcontainer = document.getElementById('PB-container');
const PBrowSeat = document.getElementById('PBrowSeat');
const PBseat = document.getElementById('PB-seat').textContent;
const PBSeatlocation = document.getElementById('Seatlocation');
const PBseatsButton = document.getElementById('PB-select');
const PBoutput = document.getElementById('PBoutput');
const PBrows = 5;
const PBcolumns = [11, 12, 12, 13, 12];
let PBclickCount = 0; 
console.log("PB loaded");
for (let row = 0; row < PBrows; row++) {
    const rowDiv = document.createElement('div'); // Create a new row for each set of buttons
    rowDiv.classList.add('row');

    for (let col = PBcolumns[row]; col >= 1; col--) {
        const PBbutton = document.createElement('button');
        PBbutton.textContent = '';
        PBbutton.classList.add('box');            
        PBbutton.setAttribute('data-bs-toggle', 'tooltip');
        PBbutton.setAttribute('data-bs-placement', 'top');
        PBbutton.setAttribute('data-bs-custom-class', 'custom-tooltip');
        const PBseatType = `${PBseat} R${row + 1} S${col}`;
        PBbutton.setAttribute('data-bs-title', PBseatType);
        PBbutton.id = PBseatType;
        PBbutton.addEventListener('click', () => {
            if (PBbutton.classList.contains('clicked')) {
                PBbutton.classList.remove('clicked');
            } else {
                PBbutton.classList.add('clicked');
            }
        });
        rowDiv.appendChild(PBbutton);
    }

    PBcontainer.appendChild(rowDiv);
}

       

PBseatsButton.addEventListener('click', function() {
    const PBpriceVal = parseInt(PBprice.textContent.replace(/[^\d]/g, ''));          
    PBoutput.textContent = `₱${PBpriceVal.toLocaleString()}`;
    PBSeatlocation.textContent = PBseat;                       
}); 


const PBtoolTipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const PBtooltipList = PBtoolTipTriggerList.map(function (tooltipTriggerEl) {
        const PBtooltip = new bootstrap.Tooltip(tooltipTriggerEl);
        tooltipTriggerEl.addEventListener('mouseleave', () => {
            PBtooltip.hide();
        });
        tooltipTriggerEl.addEventListener('click', () => {
            if (tooltipTriggerEl.classList.contains('clicked')) {
                PBclickCount++; 
            } else {
                PBclickCount--;
            }
            
            const PBclickedCounterElement = document.getElementById('PBcounter');
            PBclickedCounterElement.textContent = PBclickCount;
        });
        return PBtooltip;
    });   

    const PBboxButtons = document.querySelectorAll('.box');
    PBboxButtons.forEach(PBbutton => {
        PBbutton.addEventListener('click', function() {
            const PBclickCount = parseInt(PBcounterElement.textContent);
            const PBpriceVal = parseInt(PBprice.textContent.replace(/[^\d]/g, ''));
            const PBtotalPrice = PBpriceVal * PBclickCount;
            PBoutput1.textContent = `₱${PBtotalPrice.toLocaleString()}`;
                var title = PBbutton.getAttribute("data-bs-title");
                var amount = PBpriceVal;
                    
                var seatIndex = PBclicked.findIndex(PBrowSeat => PBrowSeat.title === title);
                if (seatIndex === -1) {
                   PBclicked.push({ title: title, amount: amount});
                } else {
                    PBclicked.splice(seatIndex, 1);
                }
            });
        });

        const PBtotalAmount = document.getElementById("totalAmount");
        const PBconfirmButton = document.getElementById('PBconfirmSeat');
        const PBselectedSeats = document.getElementById("seat-table");
        PBconfirmButton.addEventListener('click', function() {
            PBselectedSeats.innerHTML = "";
            var totalAmount = 0;
        
            PBclicked.forEach(function(PBrowSeat) {
                var PBnewRow = PBselectedSeats.insertRow();
                var PBcellTitle = PBnewRow.insertCell(0);
                PBcellTitle.textContent = PBrowSeat.title;
                
                var PBcellAD = PBnewRow.insertCell(1);
                PBcellAD.textContent = "₱" + PBrowSeat.amount.toLocaleString();
                
                var deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.classList = "delBtn btn btn-danger btn-sm ms-5";
                deleteButton.addEventListener("click", function() {
                    var index = PBclicked.findIndex(entry => entry.title === PBrowSeat.title);
        
                    PBclicked.splice(index, 1); 

                    const clickedButton = document.getElementById(PBrowSeat.title);
                    if (clickedButton) {
                        clickedButton.classList.remove('clicked');
                    }

                    totalAmount -= PBrowSeat.amount;
                    PBtotalAmount.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        
                    PBselectedSeats.deleteRow(index);
        
                    if (PBclicked.length === 0) {
                        PBtotalAmount.textContent = "₱0";
                        PBclickCount = 0;
                        PBcounterElement.textContent = PBclickCount;
                        PBselectedSeats.innerHTML = "";
                    }
                });
        
                PBcellAD.appendChild(deleteButton);
        
                totalAmount += PBrowSeat.amount;
                PBtotalAmount.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
            });
        });
        