
const VIPoutput1 = document.getElementById('output1');
const VIPprice = document.getElementById('VIP-price');
const counterElement = document.getElementById('counter');
const VIPContainer = document.getElementById('VIP-container');
const seat = document.getElementById('rowSeat');
const VIPseat = document.getElementById('vip-seat').textContent;
const SeatLocation = document.getElementById('SeatLocation');
const VIPSeatsButton = document.getElementById('VIP-select');
const VIPoutput = document.getElementById('output');
const numberOfRows = 15;
const numberOfColumns = 22;
let clickedCount = 0; 
console.log("VIP loaded");

VIPSeatsButton.addEventListener('click', function() {
    const PriceValue = parseInt(VIPprice.textContent.replace(/[^\d]/g, ''));          
    VIPoutput.textContent = `₱${PriceValue.toLocaleString()}`;
    SeatLocation.textContent = VIPseat;                       
}); 

for (let row = 1; row <= numberOfRows; row++) {
    for (var col = numberOfColumns; col >= 1; col--) {
        const VIPbutton = document.createElement('button');
        VIPbutton.textContent = '';
        VIPbutton.classList.add('box');            
        VIPbutton.setAttribute('data-bs-toggle', 'tooltip');
        VIPbutton.setAttribute('data-bs-placement', 'top');
        VIPbutton.setAttribute('data-bs-custom-class', 'custom-tooltip');
        const VIPseatType = `${VIPseat} RR${row} S${col}`;
        VIPbutton.setAttribute('data-bs-title', VIPseatType);
        VIPbutton.id = VIPseatType;

        VIPbutton.addEventListener('click', () => {
        if (VIPbutton.classList.contains('clicked')) {
            VIPbutton.classList.remove('clicked');
        } else {
            VIPbutton.classList.add('clicked');
        }
        seat.textContent = VIPbutton.getAttribute('data-bs-title');
        updateSeatData();
    });
    VIPContainer.appendChild(VIPbutton);
    }
}      
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        const tooltip = new bootstrap.Tooltip(tooltipTriggerEl);
        tooltipTriggerEl.addEventListener('mouseleave', () => {
            tooltip.hide();
        });
        tooltipTriggerEl.addEventListener('click', () => {
            if (tooltipTriggerEl.classList.contains('clicked')) {
                clickedCount++; 
            } else {
                clickedCount--;
            }
            
            const clickedCounterElement = document.getElementById('counter');
            clickedCounterElement.textContent = clickedCount;
        });
        return tooltip;
    });   
    
    const VIPboxButtons = document.querySelectorAll('.box');
    VIPboxButtons.forEach(VIPbutton => {

        
        VIPbutton.addEventListener('click', function() {
            const VipClickCount = parseInt(counterElement.textContent);
            const VIPPriceVal = parseInt(VIPprice.textContent.replace(/[^\d]/g, ''));
            const totalPrice = VIPPriceVal * VipClickCount;
            VIPoutput1.textContent = `₱${totalPrice.toLocaleString()}`;
                var title = VIPbutton.getAttribute("data-bs-title");
                var amount = VIPPriceVal;
                
                    
                var seatIndex = VIPClicked.findIndex(seat => seat.title === title);
                if (seatIndex === -1) {
                   VIPClicked.push({ title: title, amount: amount, Qty: VipClickCount });
                   
                } else {
                    VIPClicked.splice(seatIndex, 1);
                }
            });
        });
        const VIPClicked = [];
        
        const VIPTotalAmount = document.getElementById("totalAmount");
        const confirmSeatButton = document.getElementById('confirmSeat');
        const VIPselectedSeats = document.getElementById("seat-table");
        confirmSeatButton.addEventListener('click', function() {
            VIPselectedSeats.innerHTML = "";
            var totalAmount = 0;

            VIPClicked.forEach(function(seat) {
                var newRow = VIPselectedSeats.insertRow();
                var cellTitle = newRow.insertCell(0);
                cellTitle.textContent = seat.title;

                var cellAmountAndDelete = newRow.insertCell(1);
                cellAmountAndDelete.textContent = "₱" + seat.amount.toLocaleString();

                
                
                var deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.classList = "delBtn btn btn-danger btn-sm ms-5";
                deleteButton.addEventListener("click", function() {
                    var index = VIPClicked.findIndex(entry => entry.title === seat.title); // Find the correct index
        
                    VIPClicked.splice(index, 1); 
                    
    
                    const clickedButton = document.getElementById(seat.title);
                    if (clickedButton) {
                        clickedButton.classList.remove('clicked');
                    }
    
                    totalAmount -= seat.amount;
                    VIPTotalAmount.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        
                    VIPselectedSeats.deleteRow(index); 
        
                    if (VIPClicked.length === 0) {
                        VIPTotalAmount.textContent = "₱0";
                        clickedCount = 0;
                        counterElement.textContent = clickedCount;
                        VIPselectedSeats.innerHTML = ""; 
                        updateDropdownState();
                    }
                });
        
                cellAmountAndDelete.appendChild(deleteButton);
        
                totalAmount += seat.amount;
                VIPTotalAmount.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });

                
            });
            updateDropdownState();
        });

        const VIPpaymentButton = document.getElementById('paymentButton');
function updateDropdownState() {
    const VIPselectedSeats = document.getElementById('seat-table');
    const VIPSeatsDropdown = document.getElementById('vipSelect');
    
        
        if (VIPselectedSeats.rows.length > 0) {
            VIPSeatsDropdown.disabled = true;
            VIPpaymentButton.style.display = 'block';
        } else {
            VIPSeatsDropdown.disabled = false;
            VIPpaymentButton.style.display = 'none';
        }
}

function saveData() {
    var title = VIPseat;
    var seatLocation = VIPcheckedSeats;
    var price = VIPprice.textContent;
    var quantity = clickedCount;
    var total = VIPTotalAmount.textContent;
    var xhr = new XMLHttpRequest();
    
    xhr.open("POST", "index.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log(xhr.responseText); // This will show the response from the PHP script
            } else {
                console.error("Request failed");
            }
        }
    };

    // Send the data to the PHP script as separate variables
    

    var data = "seatLocation=" + encodeURIComponent(seatLocation) +
               "&price=" + encodeURIComponent(price) +
               "&quantity=" + encodeURIComponent(quantity) +
               "&total=" + encodeURIComponent(total) +
               "&title="+ encodeURIComponent(title);
    xhr.send(data);
}


const VIPConfirm = document.getElementById('ComfirmPay');
VIPConfirm.addEventListener("click", function() {
    saveData();
});




let VIPcheckedSeats = [];
function updateSeatData() {
    const VIPboxButtons = document.querySelectorAll('.box');

    VIPboxButtons.forEach(VIPbutton => {
        const title = VIPbutton.getAttribute('data-bs-title');
        const isChecked = VIPbutton.classList.contains('clicked');

        if (isChecked) {
            VIPbutton.classList.add('clicked');
            if (!VIPcheckedSeats.includes(title)) {
                VIPcheckedSeats.push(title);
            }
        } else {
            VIPbutton.classList.remove('clicked');
            const index = VIPcheckedSeats.indexOf(title);
            if (index !== -1) {
                VIPcheckedSeats.splice(index, 1);
            }
        }
    });
}


    

