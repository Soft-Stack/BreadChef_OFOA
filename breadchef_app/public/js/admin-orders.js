// toast


// load orders table
function addToTable(order) {
    var status = "";
    if(order.status.trim() === "In Progress") {
        status = `<td onclick="getOrderInfo(${order.id})"><span style="color:#fcba03; font-weight:bold;"> In Progress </span></td>`;
    } else if(order.status == "Delivered") {
        status = `<td onclick="getOrderInfo()"><span style="color:green; font-weight:bold;"> Delivered </span></td>`;
    } else if(order.status == "Cancelled") {
        status = `<td onclick="getOrderInfo()"><span style="color:red; font-weight:bold;"> Cancelled </span></td>`;
    }
    var payload = `<tr>
                            <td onclick="getOrderInfo(${order.id})" style="width:30px;"><span class="fa fa-truck"></td>
                            <td onclick="getOrderInfo(${order.id})" style="width:120px;">${order.id}</td>
                            <td onclick="getOrderInfo(${order.id})" style="width:180px;">${order.customer.name}</td>
                            <td onclick="getOrderInfo(${order.id})">${order.customer.phone}</td>
                            <td onclick="getOrderInfo(${order.id})" style="400px;"> ${order.customer.phone}</td>
                            <td><span class="fa fa-calendar"></span> ${order.datetime} </td>
                            ${status};
                            <td onclick="getOrderInfo()">RS.${order.total_amount}</td>
                            <td>
                                <a href="#" class="btn btn-simple btn-icon"><i
                                        class=" fas fa-check"></i></a>
                                <a href="#" class="btn btn-simple btn-icon"><i
                                        class=" fas fa-times"></i></a>
                                <a href="#" class="btn btn-simple btn-icon"><i
                                        class="fas fa-info"></i></a>
                            </td>
                        </tr>`;
                        // return payload;
    $('#orders-table').prepend(payload);
}


// console.log(orders);

var channel = Echo.channel('my-channel');
channel.listen('.my-event', function(data) {
    // alert(JSON.stringify(data));
    console.log(data);

    addToTable(data.order);
});



// console.log($('#datepicker'));  

function getOrderInfo(orderid) {

    var cart = null;
    var total = null;

    orders.forEach(order => {
        if(order.id == orderid) {
            cart = order.cart;
            total = order.total_amount;
        }     
    });

    console.log(cart);

    var payloadHeader = `
            <div class="modal-dialog" style="margin-top:4%; width:100%; font-size:18px;">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row" style="padding:20px;">

                        <div class="col-md-8">
                            <p style="font-size:16px; font-weight:bold">ORDER DETAILS</p>
    `;

    cart.forEach(item => {
        var orderPayload =  `
            <div class="row" style="margin-top:3px;">
                <div class="col-md-3">${item[0]}</div>
                <div class="col-md-5">X   ${item[1]}</div>
                <div class="col-md-4"> RS.${item[2]}</div>
            </div>
        `;

        payloadHeader += orderPayload;
    });
    

    var payloadFooter =  `
                            <div class="row">
                                {{-- <p style="width:90%; margin-top:10px; border-top:1px solid;"></p>
                                <div class="col-md-8"><span style="font-weight:bold;">Discount</span></div>
                                <div class="col-md-4"><span style="font-weight:bold">BS 27,00</span></div> --}}
                            </div>
                            <div class="row" style="margin-top:20px;">
                                <div class="col-md-8"><span style="font-weight:bold;">Total ${cart.length}
                                        Products</span></div>
                                <div class="col-md-4"><span style="font-weight:bold">RS.${total}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
    var finalPayload = payloadHeader + payloadFooter;
    $('#myModal4')[0].innerHTML = finalPayload;
    $('#myModal4').modal('show');
}

function getOrderInfo2() {
    $('#myModal4').modal('show');
}
