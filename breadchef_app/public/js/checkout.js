//---------------------------------------------------------
//
//  make calculations in the Checkout file
"use strict";

$(document).ready(function () {

    /**
     * You first need to create a formatting function to pad numbers to two digits…
     **/
    function twoDigits(d) {
        if(0 <= d && d < 10) return "0" + d.toString();
        if(-10 < d && d < 0) return "-0" + (-1*d).toString();
        return d.toString();
    }

    /**
     * …and then create the method to output the date string as desired.
     * Some people hate using prototypes this way, but if you are going
     * to apply this to more than one Date object, having it as a prototype
     * makes sense.
     **/
    Date.prototype.toMysqlFormat = function() {
        var hours = (this.getUTCHours() + 5);
        if(hours >= 24) {
            hours = hours - 24;
        }
        return this.getUTCFullYear() 
                + "-" + twoDigits(1 + this.getUTCMonth()) 
                + "-" + twoDigits(this.getUTCDate()) 
                + " " + twoDigits(hours) 
                + ":" + twoDigits(this.getUTCMinutes()) 
                + ":" + twoDigits(this.getUTCSeconds());
    };
    var date = new Date();

    $('#datetime')[0].value = date.toMysqlFormat() ;
});

var jsoned = localStorage.getItem("subTotal");
var total = JSON.parse(jsoned);
setSubTotal(total);


displayDataInModal();
updateSubTotal();

/**
 * Retreive Data from JSON and display into Bag HTML Modal
 */
function displayDataInModal()
{
    var bagObj = localStorage.getItem("bagJSON");
    var itemsArray = JSON.parse(bagObj);
    if(itemsArray == null)
    {
        itemsArray = [];
    }

    var orderWindow = document.getElementsByClassName('order-window')[0];
    orderWindow.innerHTML = "";

    for(var i = 0; i < itemsArray.length; i++)
    {
        var itemName = itemsArray[i].name;
        var itemQuantity = itemsArray[i].quantity;
        var itemPrice = itemsArray[i].price;

        var itemBox = ` <div class='row cart-item'>
                            <h5>${itemName}
                                <span class='float-end' onClick='removeFromBag(this)'><i class='bi bi-bag-dash'></i></span>
                            </h5>
                            <p>
                                <span><button class='btn border-dark btn-sm' onClick='decrementQuantity(this)'>-</button></span>
                                <span class='fs-6'> ${itemQuantity} </span>
                                <span><button class='btn border-dark btn-sm' onClick='incrementQuantity(this)'>+</button></span> 
                                <span class='float-end fs-6'>Rs.${itemPrice}</span>
                            </p>
                            <hr>

                            <input type='text' name='items[]' value='${itemName}' hidden>
                            <input type='number' name='quantities[]' value='${itemQuantity}' hidden>
                            <input type='number' name='prices[]' value='${itemPrice}' hidden>
                        </div>`;

        orderWindow.innerHTML += itemBox; 
    }
    updateSubTotal();
}

function removeFromBag(item)
{
    var selectedItemName = item.parentNode.parentNode.children[0].innerText;
    console.log("Item To Remove: " + selectedItemName);

    var items = document.getElementsByClassName('order-window')[0].children;
    for(var i = 0; i < items.length; i++)
    {
        var bagItemName = items[i].children[0].innerText;
        console.log("Bag Item Name " + i + ": " + bagItemName);
        if(selectedItemName == bagItemName)
        {
            console.log(selectedItemName + "==" + bagItemName);
            // removing item from localStorage
            var bagObj = localStorage.getItem("bagJSON");
            var itemsArray = JSON.parse(bagObj);
            console.log("Items Array : ", itemsArray);
            for(var j = 0; j < itemsArray.length; j++)
            {
                console.log(`Item[${j}] : `, itemsArray[j]);
                if(itemsArray[j].name == selectedItemName)
                {
                    console.log(itemsArray[j].name + "==" + selectedItemName);
                    // itemsArray.pop(j);
                    itemsArray.splice(j, 1);
                    var jsoned = JSON.stringify(itemsArray);
                    localStorage.setItem("bagJSON", jsoned);
                    console.log("localStorage updated");
                }
            }

            // removing item from HTML
            items[i].remove();   
            item.parentNode.parentNode.remove();       
        }
    }
    displayDataInModal();
}

function emptyBag(bag)
{
    localStorage.clear();
    document.getElementsByClassName('order-window')[0].innerHTML = "";
    setSubTotal(0);
}

function decrementQuantity(item)
{
    //console.log("Dec qty " + item.parentNode.parentNode.parentNode.children[0].innerText.split(' ')[0]);
    var selectedItemName = item.parentNode.parentNode.parentNode.children[0].innerText;

    var items = document.getElementsByClassName('order-window')[0].children;
    for(var i = 0; i < items.length; i++)
    {
        var bagItemName = items[i].children[0].innerText;
        var bagItemQty = items[i].children[1].children[1].innerText;
        // console.log(bagItemName + " " + bagItemQty);

        if(selectedItemName.trim() == bagItemName.trim())
        {
            var quantity = (parseInt(bagItemQty, 10));
            if(quantity != 1)
            {
                quantity = quantity - 1;
                console.log("New Qty Text: " + quantity);
                items[i].children[1].children[1].innerText = quantity;

                // decrementing item in localStorage
                var jsoned = localStorage.getItem("bagJSON");
                var itemsArray = JSON.parse(jsoned);
                for(var j = 0; j < itemsArray.length; j++)
                {
                    if(itemsArray[j].name == selectedItemName)
                    {
                        itemsArray[j].quantity = quantity;

                        var jsoned = JSON.stringify(itemsArray);
                        localStorage.setItem("bagJSON", jsoned);
                    }
                }
            }            
        }
    }
    displayDataInModal();
}


function incrementQuantity(item)
{
    //console.log("Inc qty " + item.parentNode.parentNode.parentNode.children[0].innerText.split(' ')[0]);
    var selectedItemName = item.parentNode.parentNode.parentNode.children[0].innerText;

    var items = document.getElementsByClassName('order-window')[0].children;
    for(var i = 0; i < items.length; i++)
    {
        var bagItemName = items[i].children[0].innerText;
        var bagItemQty = items[i].children[1].children[1].innerText;
        console.log('Bag Qty: ' + bagItemQty);
        // console.log(bagItemName + " " + bagItemQty);

        if(selectedItemName.trim() == bagItemName.trim())
        {
            var quantity = (parseInt(bagItemQty, 10) + 1);
            console.log("New Qty Text: " + quantity);
            items[i].children[1].children[1].innerText = quantity;
            
            // incrementing item in localStrorage
            var jsoned = localStorage.getItem("bagJSON");
            var itemsArray = JSON.parse(jsoned);
            
            for(var j = 0; j < itemsArray.length; j++)
            {
                if(itemsArray[j].name == selectedItemName)
                {
                    itemsArray[j].quantity = quantity;

                    var jsoned = JSON.stringify(itemsArray);
                    localStorage.setItem("bagJSON", jsoned);
                }
            }
        }
    }
    displayDataInModal();
    updateSubTotal();
}


function updateSubTotal()
{
    var items = document.getElementsByClassName('order-window')[0].children;
    var sum = 0;
    for(var i = 0; i < items.length; i++)
    {
        var price = parseInt(items[i].children[1].children[3].innerHTML.split('.')[1], 10);
        var quantity = parseInt(items[i].children[1].children[1].innerHTML, 10);
        sum += price * quantity;
    }
    console.log("Sub Total: " + sum);
    setSubTotal(sum);
}

function setSubTotal(subtotal) {
    var SubTotal = "Total Rs." + subtotal;
    document.getElementById('subtotal').innerText = SubTotal;
    document.getElementById('total').value = subtotal;

    var jsoned = JSON.stringify(subtotal);
    localStorage.setItem("subTotal", jsoned);
}