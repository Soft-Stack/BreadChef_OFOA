
"use strict";

var bagObj = localStorage.getItem("bagJSON");
var itemsArray = JSON.parse(bagObj);
if(itemsArray == null)
{
    itemsArray = [];
    bagObj = JSON.stringify(itemsArray);
    localStorage.setItem("bagJSON", bagObj);
}

var itemObj, myBagJSON, text;

displayDataInModal();
updateSubTotal();

/**
 * Retreive Data from JSON and display into Bag HTML Modal
 */
function displayDataInModal()
{
    var bagObj = localStorage.getItem("bagJSON");
    var itemsArray = JSON.parse(bagObj);

    var bagWindow = document.getElementsByClassName('bag-window')[0];
    bagWindow.innerHTML = "";

    console.log("Items in JSON: " + itemsArray.length);
    for(var i = 0; i < itemsArray.length; i++)
    {
        console.log('JSON Item Name: ' + itemsArray[i].name);
        console.log('JSON Item Qty: ' + itemsArray[i].quantity);
        console.log('JSON Item Price: '+ itemsArray[i].price);

        var itemName = itemsArray[i].name;
        var itemQuantity = itemsArray[i].quantity;
        var itemPrice = itemsArray[i].price;

        var itemBox = `<div class='row cart-item'>
                        <h4>${itemName}
                            <span class='float-end' onClick='removeFromBag(this)'><i class='bi bi-bag-dash'></i></span>
                        </h4> 
                        <p>
                            <span><button class='btn border-dark' onClick='decrementQuantity(this)'>-</button></span>
                            <span class='fs-5'> ${itemQuantity} </span>
                            <span><button class='btn border-dark' onClick='incrementQuantity(this)'>+</button></span> 
                            <span class='float-end fs-5'>Rs.${itemPrice}</span>
                        </p>
                        <hr>
                      </div>`;

        bagWindow.innerHTML += itemBox; 
    }
    updateSubTotal();

}

function addToBag(item){

    // var itemName = e.children[0].children[0].children[0].innerHTML;
    var selectedItemName = item.parentNode.children[1].innerText;
    var selectedItemQuantity = 1;
    var selectedItemPrice = item.parentNode.children[3].innerText.split('.')[1];
    console.log("Selected Item Name: " + selectedItemName);
    console.log("Selected Item Price: " + selectedItemPrice);

    // var items = document.getElementsByClassName('bag-window')[0].children;
    var createNewItem = true;
    // console.log("Items in Bag: " + items.length);


    var bagObj = localStorage.getItem("bagJSON");
    var itemsArray = JSON.parse(bagObj);
    if(itemsArray == null)
    {
        itemsArray = [];
    }
    
    // New Loop
    for(var i  = 0; i < itemsArray.length; i++)
    {
        var bagItemName = itemsArray[i].name;
        
        if(selectedItemName == bagItemName)
        {
            createNewItem = false;
            console.log('New Item will NOT be Added');
        }
        else
        {
            createNewItem = true;
        }
    }
    // New Loop

    if(createNewItem)
    {
        var bagObj = localStorage.getItem("bagJSON");
        var itemsArray = JSON.parse(bagObj);
        if(itemsArray == null)
        {
            itemsArray = [];
            bagObj = JSON.stringify(itemsArray);
            localStorage.setItem("bagJSON", bagObj);
        }

        var jsoned = JSON.parse(localStorage.bagJSON)
        jsoned.push({"name": selectedItemName, "quantity": selectedItemQuantity, "price": selectedItemPrice});
        localStorage.bagJSON = JSON.stringify(jsoned);
        displayDataInModal();
    }


}

function removeFromBag(item)
{
    var selectedItemName = item.parentNode.parentNode.children[0].innerText;
    console.log("Item To Remove: " + selectedItemName);

    var items = document.getElementsByClassName('bag-window')[0].children;
    for(var i = 0; i < items.length; i++)
    {
        var bagItemName = items[i].children[0].innerText;
        console.log("Bag Item Name " + i + ": " + bagItemName);
        
        if(selectedItemName == bagItemName)
        {
            // console.log(selectedItemName + "==" + bagItemName);
            // removing item from localStorage
            var bagObj = localStorage.getItem("bagJSON");
            var itemsArray = JSON.parse(bagObj);
            for(var j = 0; j < itemsArray.length; j++)
            {
                if(itemsArray[j].name == selectedItemName)
                {
                    itemsArray.pop(j);
                    var jsoned = JSON.stringify(itemsArray);
                    localStorage.setItem("bagJSON", jsoned);
                }
            }

            // // removing item from HTML
            items[i].remove();
            item.parentNode.parentNode.remove(); 
        }

    }
    displayDataInModal();
    // updateSubTotal();
}

function emptyBag(bag)
{
    localStorage.clear();
    document.getElementsByClassName('bag-window')[0].innerHTML = "";
    setSubTotal(0);
}

function decrementQuantity(item)
{
    //console.log("Dec qty " + item.parentNode.parentNode.parentNode.children[0].innerText.split(' ')[0]);
    var selectedItemName = item.parentNode.parentNode.parentNode.children[0].innerText;

    var items = document.getElementsByClassName('bag-window')[0].children;
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
                items[i].children[1].children[1].innerText = " " + quantity + " ";

                // decrementing item in localStorage
                var jsoned = localStorage.getItem("bagJSON");
                var itemsArray = JSON.parse(jsoned);
                for(var i = 0; i < itemsArray.length; i++)
                {
                    if(itemsArray[i].name == selectedItemName)
                    {
                        itemsArray[i].quantity = quantity;

                        var jsoned = JSON.stringify(itemsArray);
                        localStorage.setItem("bagJSON", jsoned);
                    }
                }

            }            
        }
    }
    displayDataInModal();
    updateSubTotal();
}


function incrementQuantity(item)
{
    //console.log("Inc qty " + item.parentNode.parentNode.parentNode.children[0].innerText.split(' ')[0]);
    var selectedItemName = item.parentNode.parentNode.parentNode.children[0].innerText;
    console.log("Item to Increase: " + selectedItemName);

    var items = document.getElementsByClassName('bag-window')[0].children;
    for(var i = 0; i < items.length; i++)
    {
        var bagItemName = items[i].children[0].innerText;
        var bagItemQty = items[i].children[1].children[1].innerText;
        // console.log('Bag Qty: ' + bagItemQty);
        // console.log(bagItemName + " " + bagItemQty);

        if(selectedItemName.trim() == bagItemName.trim())
        {
            console.log("Old Qty: " + bagItemQty);
            var quantity = (parseInt(bagItemQty, 10) + 1);
            console.log("New Qty: " + quantity);
            items[i].children[1].children[1].innerText = " " + quantity + " ";
            
            // incrementing item in localStorage
            var jsoned = localStorage.getItem("bagJSON");
            var itemsArray = JSON.parse(jsoned);
            for(var i = 0; i < itemsArray.length; i++)
            {
                console.log("Item in Array " + itemsArray[i].name);

                if(itemsArray[i].name == selectedItemName)
                {
                    console.log("JSON Selected Item to Increase: " + itemsArray[i].name);
                    itemsArray[i].quantity = quantity;

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
    var items = document.getElementsByClassName('bag-window')[0].children;
    var sum = 0;
    for(var i = 0; i < items.length; i++)
    {
        var price = parseInt(items[i].children[1].children[3].innerHTML.split('.')[1], 10);
        var quantity = parseInt(items[i].children[1].children[1].innerHTML.split(' ')[1], 10);
        sum += price * quantity;
    }
    //console.log("Sub Total: " + sum);
    setSubTotal(sum);
}

function setSubTotal(subtotal) {
    var SubTotal = "Rs." + subtotal;
    document.getElementById('subtotal').innerText = SubTotal;
}