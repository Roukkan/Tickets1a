

const UBprice = document.getElementById('UB-price');
const UBcounterElement = document.getElementById('UBcounter');
const UBcontainer = document.getElementById('UB-container');
const UBrowSeat = document.getElementById('UBrowSeat');
const UBSeat = document.getElementById('UB-seat').textContent;
const UBseatLocation = document.getElementById('UBlocation');
const UBseatButton = document.getElementById('UB-select');
const UBoutput = document.getElementById('UBoutput');
const UBrows = 9;
const UBcolumns = [21, 22, 22, 23, 23, 24, 25, 25, 26];
let UBclickCount = 0; 
console.log("UB loaded");
for (let row = 0; row < UBrows; row++) {
    const rowDiv = document.createElement('div'); // Create a new row for each set of buttons
    rowDiv.classList.add('row');

    for (let col = UBcolumns[row]; col >= 1; col--) {
        const UBbutton = document.createElement('button');
        UBbutton.textContent = '';
        UBbutton.classList.add('box');            
        UBbutton.setAttribute('data-bs-toggle', 'tooltip');
        UBbutton.setAttribute('data-bs-placement', 'top');
        UBbutton.setAttribute('data-bs-custom-class', 'custom-tooltip');
        const UBseatType = `${UBSeat} R${row + 1} S${col}`;
        UBbutton.setAttribute('data-bs-title', UBseatType);
        UBbutton.id = UBseatType;
        UBbutton.addEventListener('click', () => {
            if (UBbutton.classList.contains('clicked')) {
                UBbutton.classList.remove('clicked');
            } else {
                UBbutton.classList.add('clicked');
            }
        });
        rowDiv.appendChild(UBbutton);
    }

    UBcontainer.appendChild(rowDiv);
}
     


UBseatButton.addEventListener('click', function() {
    const LBpriceVal = parseInt(UBprice.textContent.replace(/[^\d]/g, ''));          
    UBoutput.textContent = `₱${LBpriceVal.toLocaleString()}`;
    UBseatLocation.textContent = UBSeat;                       
}); 


const UBtoolTipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const UBtooltipList = UBtoolTipTriggerList.map(function (tooltipTriggerEl) {
        const UBtooltip = new bootstrap.Tooltip(tooltipTriggerEl);
        tooltipTriggerEl.addEventListener('mouseleave', () => {
            UBtooltip.hide();
        });
        tooltipTriggerEl.addEventListener('click', () => {
            if (tooltipTriggerEl.classList.contains('clicked')) {
                UBclickCount++; 
            } else {
                UBclickCount--;
            }
            
            const UBclickedCounterElement = document.getElementById('UBcounter');
            UBclickedCounterElement.textContent = UBclickCount;
        });
        return UBtooltip;
    });   
    const UBoutput1 = document.getElementById('UBoutput1');
    const UBboxButtons = document.querySelectorAll('.box');
    UBboxButtons.forEach(UBbutton => {
        UBbutton.addEventListener('click', function() {
            const UBclickCount = parseInt(UBcounterElement.textContent);
            const LBpriceVal = parseInt(UBprice.textContent.replace(/[^\d]/g, ''));
            const LBtotalPrice = LBpriceVal * UBclickCount;
            UBoutput1.textContent = `₱${LBtotalPrice.toLocaleString()}`;
                var title = UBbutton.getAttribute("data-bs-title");
                var amount = LBpriceVal;
                    
                var seatIndex = UBclicked.findIndex(UBrowSeat => UBrowSeat.title === title);
                if (seatIndex === -1) {
                   UBclicked.push({ title: title, amount: amount});
                } else {
                    UBclicked.splice(seatIndex, 1);
                }
            });
        });
        const UBclicked = [];
        const UBpaymentButton = document.getElementById('paymentButton');
        const UBtotalAmount = document.getElementById("totalAmount");
        const UBconfirmButton = document.getElementById('UBconfirmSeat');
        const UBselectedSeats = document.getElementById("seat-table");
        UBconfirmButton.addEventListener('click', function() {
            UBselectedSeats.innerHTML = "";
            var totalAmount = 0;
        
            UBclicked.forEach(function(UBrowSeat) {
                var UBnewRow = UBselectedSeats.insertRow();
                var UBcellTitle = UBnewRow.insertCell(0);
                UBcellTitle.textContent = UBrowSeat.title;
                
                var UBcellAD = UBnewRow.insertCell(1);
                UBcellAD.textContent = "₱" + UBrowSeat.amount.toLocaleString();
                
                var deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.classList = "delBtn btn btn-danger btn-sm ms-5";
                deleteButton.addEventListener("click", function() {
                    var index = UBclicked.findIndex(entry => entry.title === UBrowSeat.title);
        
                    UBclicked.splice(index, 1); 

                    const clickedButton = document.getElementById(UBrowSeat.title);
                    if (clickedButton) {
                        clickedButton.classList.remove('clicked');
                    }

                    totalAmount -= UBrowSeat.amount;
                    UBtotalAmount.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        
                    UBselectedSeats.deleteRow(index);
        
                    if (UBclicked.length === 0) {
                        UBtotalAmount.textContent = "₱0";
                        UBclickCount = 0;
                        UBcounterElement.textContent = UBclickCount;
                        UBselectedSeats.innerHTML = "";
                        updateDropdownState();
                    }
                });
        
                UBcellAD.appendChild(deleteButton);
        
                totalAmount += UBrowSeat.amount;
                UBtotalAmount.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
            });
            updateDropdownState();
        });
        
        function updateDropdownState() {
            const VIPselectedSeats = document.getElementById('seat-table');
            const VIPSeatsDropdown = document.getElementById('ubSelect');
        
            if (VIPselectedSeats.rows.length > 0) {
                VIPSeatsDropdown.disabled = true;
                UBpaymentButton.style.display = 'block';
            } else {
                VIPSeatsDropdown.disabled = false;
                UBpaymentButton.style.display = 'none';
            }
        }