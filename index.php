<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Tickets</title>
</head>

<body>
    <div class="row">
        <div class="col">
            <h1>concert name</h1>
        </div>
    </div>
    <div class="content-wrap mt-3">
        <div class="col">
            <h1>Seat Plan</h1>
            <div class="img-wrap">
                <a href="" data-bs-toggle="modal" data-bs-target="#seatplan">
                    <img src="seat_plan.jpg" alt="Seat Plan" width="100%">
                </a>
            </div>
        </div>

        <div class="container ms-3">

            <h1>Tickets</h1>


            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">Location</div>
                <div class="col d-flex justify-content-center align-items-center">Section</div>
                <div class="col d-flex justify-content-center align-items-center">Price</div>
                <div class="col d-flex justify-content-center align-items-center">Quantity</div>
            </div>
            <!---------------------------------------- VIP ----------------------------------------------->
            <div class="row mt-3">
                <div class="col d-flex justify-content-center align-items-center">
                    <h3 id="vip-seat" class="vip">VIP</h3>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <select class="form-select w-75" aria-label="VIPselect" id="vipSelect">
                        <option selected value="">Seat Section</option>
                        <option value="VIP-L" disabled>VIP 101 - Unavailable</option>
                        <option value="VIP-R">VIP 103</option>

                    </select>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <h3 class="mt-1" id="VIP-price"><span>&#8369;</span> 7,400</h3>
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <button type="button" id="VIP-select" class="btn btn-outline-success VIPSelect"
                        data-bs-toggle="modal" data-bs-target="#vipselect" disabled>Select Seats</button>
                </div>
            </div>

            <!---------------------------------------- P-A ----------------------------------------------->
            <div class="row mt-3">
                <div class="col d-flex justify-content-center align-items-center">
                    <h3 id="PA-seat" class="patronA">PATRON A</h3>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <select class="form-select w-75" aria-label="VIPselect" id="paSelect">
                        <option selected value="">Seat Section</option>
                        <option value="PA101" disabled>PATRON A 101 - Unavailable</option>
                        <option value="PA103" disabled>PATRON A 103 - Unavailable</option>
                        <option value="PA104" disabled>PATRON A 104 - Unavailable</option>
                        <option value="PA105" disabled>PATRON A 105 - Unavailable</option>
                        <option value="PA106" disabled>PATRON A 106 - Unavailable</option>
                        <option value="PA107" disabled>PATRON A 107 - Unavailable</option>
                        <option value="PA108" disabled>PATRON A 108 - Unavailable</option>
                        <option value="PA112" disabled>PATRON A 113 - Unavailable</option>
                        <option value="PA114">PATRON A 114</option>
                        <option value="PA115" disabled>PATRON A 115 - Unavailable</option>
                        <option value="PA116" disabled>PATRON A 116 - Unavailable</option>
                        <option value="PA117" disabled>PATRON A 117 - Unavailable</option>
                    </select>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <h3 class="mt-1" id="PA-price"><span>&#8369;</span> 6,400</h3>
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <button type="button" id="PA-select" class="btn btn-outline-success selectSeats"
                        data-bs-toggle="modal" data-bs-target="#PA-Seats" disabled>Select Seats</button>
                </div>
            </div>

            <!---------------------------------------- P-B ----------------------------------------------->
            <div class="row mt-3">
                <div class="col d-flex justify-content-center align-items-center">
                    <h3 id="PB-seat" class="patronB">PATRON B</h3>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <select class="form-select w-75" aria-label="VIPselect" id="pbSelect">
                        <option selected value="">Seat Section</option>
                        <option value="PB101" disabled>PATRON B 101 - Unavailable</option>
                        <option value="PB103" disabled>PATRON B 103 - Unavailable</option>
                        <option value="PB104" disabled>PATRON B 104 - Unavailable</option>
                        <option value="PB105" disabled>PATRON B 105 - Unavailable</option>
                        <option value="PB106" disabled>PATRON B 106 - Unavailable</option>
                        <option value="PB107" disabled>PATRON B 107 - Unavailable</option>
                        <option value="PB108" disabled>PATRON B 108 - Unavailable</option>
                        <option value="PB112" disabled>PATRON B 113 - Unavailable</option>
                        <option value="PB114">PATRON B 114</option>
                        <option value="PB115" disabled>PATRON B 115 - Unavailable</option>
                        <option value="PB116" disabled>PATRON B 116 - Unavailable</option>
                        <option value="PB117" disabled>PATRON B 116 - Unavailable</option>
                    </select>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <h3 class="mt-1" id="PB-price"><span>&#8369;</span> 5,800</h3>
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <button type="button" id="PB-select" class="btn btn-outline-success selectSeats"
                        data-bs-toggle="modal" data-bs-target="#PB-Seats" disabled>Select Seats</button>
                </div>
            </div>

            <!---------------------------------------- L-B ----------------------------------------------->
            <div class="row mt-3">
                <div class="col d-flex justify-content-center align-items-center">
                    <h3 id="LB-seat" class="lBox">LOWER BOX</h3>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <select class="form-select w-75" aria-label="lbselect" id="lbSelect">
                        <option selected value="">Seat Section</option>
                        <option value="LB300" disabled>LOWER BOX 300 - Unavailable</option>
                        <option value="LB301" disabled>LOWER BOX 301 - Unavailable</option>
                        <option value="LB302" disabled>LOWER BOX 302 - Unavailable</option>
                        <option value="LB303" disabled>LOWER BOX 303 - Unavailable</option>
                        <option value="LB304" disabled>LOWER BOX 304 - Unavailable</option>
                        <option value="LB305" disabled>LOWER BOX 305 - Unavailable</option>
                        <option value="LB306" disabled>LOWER BOX 306 - Unavailable</option>
                        <option value="LB307" disabled>LOWER BOX 307 - Unavailable</option>
                        <option value="LB316" disabled>LOWER BOX 316 - Unavailable</option>
                        <option value="LB317" disabled>LOWER BOX 317 - Unavailable</option>
                        <option value="LB318" disabled>LOWER BOX 318 - Unavailable</option>
                        <option value="LB319" disabled>LOWER BOX 319 - Unavailable</option>
                        <option value="LB320" disabled>LOWER BOX 320 - Unavailable</option>
                        <option value="LB321">LOWER BOX 321</option>
                    </select>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <h3 class="mt-1" id="LB-price"><span>&#8369;</span> 4,800</h3>
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <button type="button" id="LB-select" class="btn btn-outline-success selectSeats"
                        data-bs-toggle="modal" data-bs-target="#LB-Seats" disabled>Select Seats</button>
                </div>
            </div>

            <!---------------------------------------- U-B ----------------------------------------------->
            <div class="row mt-3">
                <div class="col d-flex justify-content-center align-items-center">
                    <h3 id="UB-seat" class="uBox">UPPER BOX</h3>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <select class="form-select w-75" aria-label="ubselect" id="ubSelect">
                        <option selected value="">Seat Section</option>
                        <option value="UB400">UPPER BOX 400</option>
                        <option value="UB401" disabled>UPPER BOX 401 - Unavailable</option>
                        <option value="UB402" disabled>UPPER BOX 402 - Unavailable</option>
                        <option value="UB403" disabled>UPPER BOX 403 - Unavailable</option>
                        <option value="UB404" disabled>UPPER BOX 404 - Unavailable</option>
                        <option value="UB405" disabled>UPPER BOX 405 - Unavailable</option>
                        <option value="UB406" disabled>UPPER BOX 406 - Unavailable</option>
                        <option value="UB407" disabled>UPPER BOX 407 - Unavailable</option>
                        <option value="UB419" disabled>UPPER BOX 419 - Unavailable</option>
                        <option value="UB420" disabled>UPPER BOX 420 - Unavailable</option>
                        <option value="UB421" disabled>UPPER BOX 421 - Unavailable</option>
                        <option value="UB422" disabled>UPPER BOX 422 - Unavailable</option>
                        <option value="UB423" disabled>UPPER BOX 423 - Unavailable</option>
                    </select>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <h3 class="mt-1" id="UB-price"><span>&#8369;</span> 3,200</h3>
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <button type="button" id="UB-select" class="btn btn-outline-success selectSeats"
                        data-bs-toggle="modal" data-bs-target="#UB-Seats" disabled>Select Seats</button>
                </div>
            </div>

            <!---------------------------------------- Gen Ad ----------------------------------------------->
            <div class="row mt-2">
                <div class="col d-flex justify-content-center align-content-center">
                    <h3 id="GA-seat" class="genAd">GEN. AD.</h3>
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <select class="form-select w-75" aria-label="Default select example" id="genAdSelect">
                        <option selected value="">Seat Section</option>
                        <option value="genAd" disabled>GEN. AD. Unavailable</option>
                    </select>
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <h3 class="pt-1"><span>&#8369;</span> 850</h3>
                </div>

                <div class="col pt-1 d-flex justify-content-start align-items-center">
                    <div class="btn-group" role="group">
                        <button id="action-btn6" disabled
                            class="minus btn btn-danger d-flex justify-content-center align-items-center"><i
                                class="controls bi bi-dash"></i></button>
                        <input class="qty6 m-0" id="qty6" type="number" min="1" max="20" disabled>
                        <button id="action-btn6a" disabled
                            class="addition btn btn-success d-flex justify-content-center align-items-center me-2"><i
                                class="controls bi bi-plus"></i></button>
                    </div>
                    <button id="action-btn6b" type="button" class="btn btn-outline-success addbtn ms-2"
                        disabled>ADD</button>
                </div>
            </div>


            <div class="row mt-4">
                <div class="container" id="selected-ticket-container">
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>Selected Seats</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody id="seat-table">
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Total</th>
                                <th id="totalAmount">₱0</th>
                            </tr>
                        </tfoot>
                    </table>
                    <form action=""></form>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-5">
                        <button class="btn btn-success" style="display: none;" id="paymentButton" data-bs-toggle="modal"
                            data-bs-target="#paymentModal">Proceed to
                            Payment</button>
                    </div>

                </div>

            </div>
        </div>


        <!------------------------------------ Seat Plan Map Modal ------------------------------------------>
        <div class="modal fade" id="seatplan" tabindex="-1" aria-labelledby="seatplanLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="d-grid d-md-flex justify-content-md-end p-1">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="overflow-hidden">
                            <img src="seat_plan.jpg" alt="Seat Plan" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------------- VIP SEATS Modal --------------------------------------------->
        <div class="modal fade" id="vipselect" tabindex="-1" aria-labelledby="vipselectLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">SELECT YOUR SEAT/S</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mt-0 pt-0" style="height: 100%;">
                        <div class="row" style="height: 100%;">
                            <!------------------------- left Column ------------------------->
                            <div class="col-md-8 overflow-auto">
                                <div class="front mt-2 pt-2 ">
                                    <div class="stage">
                                        <h2>STAGE</h2>
                                    </div>
                                </div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="width: 100%;"></td>
                                            <td>
                                                <div id="VIP-container" class="mt-2 pt-2 ">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!------------------------- Right Column ------------------------->
                            <div class="col-md-4 mt-0 pt-0">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="box"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Available</td>
                                        </tr>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="taken"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Taken</td>
                                        </tr>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="selected"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Selected</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="fs-5" hidden>Seat Location</td>
                                        </tr>
                                        <tr>
                                            <td id="SeatLocation" class="fs-5" hidden></td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5">Number of Seats</td>
                                        </tr>
                                        <tr>
                                            <td id="counter" class="fs-5">0</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5  mt-2">Amount</td>
                                        </tr>
                                        <tr>
                                            <td id="output" class="fs-5 amounts">0</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5 mt-2">Total Amount</td>
                                        </tr>
                                        <tr>
                                            <td id="output1" class="fs-5">0</td>
                                        </tr>
                                        <tr hidden>
                                            <td class="fs-5">Row and Seat Number</td>
                                        </tr>
                                        <tr hidden>
                                            <td id="rowSeat" class="fs-5">0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-lg" id="confirmSeat"
                            data-bs-dismiss="modal">CONFIRM SEAT/S</button>
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------------- PATRON A SEATS Modal --------------------------------------------->
        <div class="modal fade" id="PA-Seats" tabindex="-1" aria-labelledby="PA-SeatsLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">SELECT YOUR SEAT/S</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mt-0 pt-0" style="height: 100%;">
                        <div class="row" style="height: 100%;">
                            <!------------------------- left Column ------------------------->
                            <div class="col-md-8 d-flex justify-content-center align-content-center overflow-auto">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div id="PA-container" class="mt-2 pt-2">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                            <!------------------------- Right Column ------------------------->
                            <div class="col-md-4 mt-0 pt-0">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="box"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Available</td>
                                        </tr>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="taken"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Taken</td>
                                        </tr>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="selected"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Selected</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="fs-5" hidden>Seat Location</td>
                                        </tr>
                                        <tr>
                                            <td id="PAlocation" class="fs-5" hidden></td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5">Number of Seats</td>
                                        </tr>
                                        <tr>
                                            <td id="PAcounter" class="fs-5">0</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5  mt-2">Amount</td>
                                        </tr>
                                        <tr>
                                            <td id="PAoutput" class="fs-5 amounts">0</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5 mt-2">Total Amount</td>
                                        </tr>
                                        <tr>
                                            <td id="PAoutput1" class="fs-5">0</td>
                                        </tr>
                                        <tr hidden>
                                            <td class="fs-5">Row and Seat Number</td>
                                        </tr>
                                        <tr hidden>
                                            <td id="PArowSeat" class="fs-5">0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-lg" id="PAconfirmSeat"
                            data-bs-dismiss="modal">CONFIRM SEAT/S</button>
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------------- PATRON B SEATS Modal --------------------------------------------->
        <div class="modal fade" id="PB-Seats" tabindex="-1" aria-labelledby="PB-SeatsLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">SELECT YOUR SEAT/S</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mt-0 pt-0" style="height: 100%;">
                        <div class="row" style="height: 100%;">

                            <!------------------------- left Column ------------------------->
                            <div class="col-md-8 d-flex justify-content-center align-content-center overflow-auto">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="col mt-5 PB-container">
                                                    <div id="PB-container" class=" mt-5 ">
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                            <!------------------------- Right Column ------------------------->
                            <div class="col-md-4 mt-0 pt-0">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="box"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Available</td>
                                        </tr>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="taken"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Taken</td>
                                        </tr>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="selected"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Selected</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="fs-5" hidden>Seat Location</td>
                                        </tr>
                                        <tr>
                                            <td id="PBlocation" class="fs-5" hidden></td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5">Number of Seats</td>
                                        </tr>
                                        <tr>
                                            <td id="PBcounter" class="fs-5">0</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5  mt-2">Amount</td>
                                        </tr>
                                        <tr>
                                            <td id="PBoutput" class="fs-5 amounts">0</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5 mt-2">Total Amount</td>
                                        </tr>
                                        <tr>
                                            <td id="PBoutput1" class="fs-5">0</td>
                                        </tr>
                                        <tr hidden>
                                            <td class="fs-5">Row and Seat Number</td>
                                        </tr>
                                        <tr hidden>
                                            <td id="PBrowSeat" class="fs-5">0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-lg" id="PBconfirmSeat"
                            data-bs-dismiss="modal">CONFIRM SEAT/S</button>
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------------- LOWERBOX SEATS Modal --------------------------------------------->
        <div class="modal fade" id="LB-Seats" tabindex="-1" aria-labelledby="LB-SeatsLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">SELECT YOUR SEAT/S</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mt-0 pt-0" style="height: 100%;">
                        <div class="row" style="height: 100%;">
                            <!------------------------- left Column ------------------------->
                            <div class="col-md-8 overflow-auto">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div
                                                    class="col d-flex justify-content-center align-content-center mt-5 ">
                                                    <div id="LB-container" class="mt-2 pt-2 LB-container"></div>
                                                </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!------------------------- Right Column ------------------------->
                            <div class="col-md-4 mt-0 pt-0">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="box"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Available</td>
                                        </tr>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="taken"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Taken</td>
                                        </tr>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="selected"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Selected</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="fs-5" hidden>Seat Location</td>
                                        </tr>
                                        <tr>
                                            <td id="LBlocation" class="fs-5" hidden></td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5">Number of Seats</td>
                                        </tr>
                                        <tr>
                                            <td id="LBcounter" class="fs-5">0</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5  mt-2">Amount</td>
                                        </tr>
                                        <tr>
                                            <td id="LBoutput" class="fs-5 amounts">0</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5 mt-2">Total Amount</td>
                                        </tr>
                                        <tr>
                                            <td id="LBoutput1" class="fs-5">0</td>
                                        </tr>
                                        <tr hidden>
                                            <td class="fs-5">Row and Seat Number</td>
                                        </tr>
                                        <tr hidden>
                                            <td id="LBrowSeat" class="fs-5">0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-lg" id="LBconfirmSeat"
                            data-bs-dismiss="modal">CONFIRM SEAT/S</button>
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------------- UPPERBOX SEATS Modal --------------------------------------------->
        <div class="modal fade" id="UB-Seats" tabindex="-1" aria-labelledby="UB-SeatsLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">SELECT YOUR SEAT/S</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mt-0 pt-0" style="height: 100%;">
                        <div class="row" style="height: 100%;">

                            <!------------------------- left Column ------------------------->
                            <div class="col-md-8 overflow-auto">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div
                                                    class="col d-flex justify-content-center align-content-center mt-5 ">
                                                    <div id="UB-container" class="mt-2 pt-2 UB-container">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                            <!------------------------- Right Column ------------------------->
                            <div class="col-md-4 mt-0 pt-0">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="box"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Available</td>
                                        </tr>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="taken"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Taken</td>
                                        </tr>
                                        <tr>
                                            <td class="mb-1 pb-1">
                                                <p class="selected"></p>
                                            </td>
                                            <td>
                                                <p class="spc"></p>
                                            </td>
                                            <td> Seats Selected</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="fs-5" hidden>Seat Location</td>
                                        </tr>
                                        <tr>
                                            <td id="UBlocation" class="fs-5" hidden></td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5">Number of Seats</td>
                                        </tr>
                                        <tr>
                                            <td id="UBcounter" class="fs-5">0</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5  mt-2">Amount</td>
                                        </tr>
                                        <tr>
                                            <td id="UBoutput" class="fs-5 amounts">0</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-5 mt-2">Total Amount</td>
                                        </tr>
                                        <tr>
                                            <td id="UBoutput1" class="fs-5">0</td>
                                        </tr>
                                        <tr hidden>
                                            <td class="fs-5">Row and Seat Number</td>
                                        </tr>
                                        <tr hidden>
                                            <td id="UBrowSeat" class="fs-5">0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-lg" id="UBconfirmSeat"
                            data-bs-dismiss="modal">CONFIRM SEAT/S</button>
                    </div>
                </div>
            </div>
        </div>


        <!--------------------------------- Payment Modal --------------------------------------------->

        <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="title">Payment</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form action="" onsubmit="submit()">
                                <div class="row">
                                    <div class="col">

                                        <div class="col">
                                            <div class="inputBox">
                                                <span>Cards Accepted:</span>
                                                <img src="card.JPG" alt="" class="w-50">
                                            </div>
                                            <div class="inputBox">
                                                <span>Name on Card:</span>
                                                <input type="text" placeholder="Mr. Juan Dela Cruz" id="fullName"
                                                    required class="form-control">
                                            </div>
                                            <div class="inputBox">
                                                <span>Credit Card Number:</span>
                                                <input type="text" min="0" maxlength="16"
                                                    placeholder="1111-0000-2222-3333" id="cardNumber"
                                                    class="form-control" required>
                                            </div>
                                            <div class="inputBox">
                                                <span>Expiry Month:</span>
                                                <input type="text" placeholder="January" id="expiryMonth"
                                                    class="form-control" required>
                                            </div>
                                            <div class="flex">
                                                <div class="inputBox">
                                                    <span>Expiry Year :</span>
                                                    <input type="text" maxlength="4" placeholder="2023"
                                                        class="form-control" id="expiryYear" required>
                                                </div>
                                                <div class="inputBox">
                                                    <span>CVV:</span>
                                                    <input type="text" maxlength="4" placeholder="0123"
                                                        class="form-control" id="cardCVV" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary submit-btn" id="ComfirmPay">Confirm
                            Payment</button>
                    </div>
                </div>
            </div>
        </div>


        <script>
        var dropdowns = document.querySelectorAll('.form-select');
        var ST = document.getElementById('seat-table');
        dropdowns.forEach(function(dropdown) {
            dropdown.addEventListener('change', function() {
                if (dropdown.value === '') {
                    dropdowns.forEach(function(d) {
                        d.disabled = false;
                    });
                } else {
                    dropdowns.forEach(function(d) {
                        if (d !== dropdown) {
                            d.disabled = true;
                        }
                    });
                }
            });
        });

        document.getElementById("vipSelect").addEventListener("change", function() {
            var VIPVal = this.value;
            var VIPButton = document.getElementById("VIP-select");

            if (VIPVal !== "") {
                VIPButton.classList.add("enabled");
                VIPButton.removeAttribute("disabled");
                const VIPoutput = document.getElementById('output');
                const VIPprice = document.getElementById('VIP-price');
                const PriceValue = parseInt(VIPprice.textContent.replace(/[^\d]/g, ''));
                VIPoutput.textContent = `₱${PriceValue.toLocaleString()}`;

            } else {
                VIPButton.classList.remove("enabled");
                VIPButton.setAttribute("disabled", true);
            }
        });

        document.getElementById("paSelect").addEventListener("change", function() {
            var PAval = this.value;
            var PAButton = document.getElementById("PA-select");

            if (PAval !== "") {
                PAButton.classList.add("enabled");
                PAButton.removeAttribute("disabled");
                const PAoutput = document.getElementById('PAoutput');
                const PAprice = document.getElementById('PA-price');
                const PApriceVal = parseInt(PAprice.textContent.replace(/[^\d]/g, ''));
                PAoutput.textContent = `₱${PApriceVal.toLocaleString()}`;

            } else {
                PAButton.classList.remove("enabled");
                PAButton.setAttribute("disabled", true);
            }
        });

        document.getElementById("pbSelect").addEventListener("change", function() {
            var PAval = this.value;
            var PAButton = document.getElementById("PB-select");

            if (PAval !== "") {
                PAButton.classList.add("enabled");
                PAButton.removeAttribute("disabled");
                const PAoutput = document.getElementById('PBoutput');
                const PAprice = document.getElementById('PB-price');
                const PApriceVal = parseInt(PAprice.textContent.replace(/[^\d]/g, ''));
                PAoutput.textContent = `₱${PApriceVal.toLocaleString()}`;

            } else {
                PAButton.classList.remove("enabled");
                PAButton.setAttribute("disabled", true);
            }
        });


        document.getElementById("lbSelect").addEventListener("change", function() {
            var LBval = this.value;
            var LBButton = document.getElementById("LB-select");

            if (LBval !== "") {
                LBButton.classList.add("enabled");
                LBButton.removeAttribute("disabled");
                const LBoutput = document.getElementById('LBoutput');
                const LBprice = document.getElementById('LB-price');
                const LBpriceVal = parseInt(LBprice.textContent.replace(/[^\d]/g, ''));
                LBoutput.textContent = `₱${LBpriceVal.toLocaleString()}`;

            } else {
                LBButton.classList.remove("enabled");
                LBButton.setAttribute("disabled", true);
            }
        });


        document.getElementById("ubSelect").addEventListener("change", function() {
            var UBval = this.value;
            var UBButton = document.getElementById("UB-select");

            if (UBval !== "") {
                UBButton.classList.add("enabled");
                UBButton.removeAttribute("disabled");
                const UBoutput = document.getElementById('UBoutput');
                const UBprice = document.getElementById('UB-price');
                const UBpriceVal = parseInt(UBprice.textContent.replace(/[^\d]/g, ''));
                UBoutput.textContent = `₱${UBpriceVal.toLocaleString()}`;

            } else {
                UBButton.classList.remove("enabled");
                UBButton.setAttribute("disabled", true);
            }
        });


        document.getElementById('VIP-select').addEventListener('click', function() {
            loadScript('vip.js');
        });

        document.getElementById('PA-select').addEventListener('click', function() {
            loadScript('pa.js');
        });

        document.getElementById('PB-select').addEventListener('click', function() {
            loadScript('pb.js');
        });

        document.getElementById('LB-select').addEventListener('click', function() {
            loadScript('lb.js');
        });

        document.getElementById('UB-select').addEventListener('click', function() {
            loadScript('ub.js');
        });

        var currentScriptElement = null;

        function loadScript(scriptUrl) {
            var script = document.createElement('script');
            script.src = scriptUrl;
            script.async = true;
            if (currentScriptElement) {
                document.body.removeChild(currentScriptElement);
            }

            currentScriptElement = script;
            document.body.appendChild(script);
        }
        </script>

        <script>
        const inputs = document.querySelectorAll('input');
        const submit = document.querySelector('#submit-Btn');


        inputs.forEach(input => {
            input.addEventListener('input', function() {
                let isAllFilled = true;
                inputs.forEach(input => {
                    if (!input.value) {
                        isAllFilled = false;
                    }
                });
                submit.disabled = !isAllFilled;
            });
        });

        const submitBtn = document.querySelector('.submit-btn');
        submitBtn.addEventListener('click', function() {
            alert("Payment Successful, Thank you!")
            window.location.href = window.location.href;
        });
        </script>

</body>

</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u548574294_laravel";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $seatLocation = $_POST['seatLocation'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total = $_POST['total'];
    $Payment = "PAID";


    $sql = "INSERT INTO `booking`(`ticket_name`, `ticket_price`, `qty`, `total`, `payment_status`, `seat_location`, `email`) VALUES 
                        ('$title','$price','$quantity','$total','$Payment','$seatLocation','$Payment')";
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>