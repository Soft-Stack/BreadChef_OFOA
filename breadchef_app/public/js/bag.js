
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
    console.log('Function called: displayDataInModal()');
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

    // // Old Loop
    // /*for(var i = 0; i < items.length; i++)
    // {
    //     var bagItemName = items[i].children[0].innerText.split(' ')[0];
    //     console.log("Item Bag: " + bagItemName);

    //     if(selectedItemName.trim() == bagItemName.trim())
    //     {
    //         console.log('Already in Bag');
    //         createNewItem = false;
    //     }
    //     else
    //     {
    //         console.log('Not in Bag');
    //         //var newItemQuantity = parseInt(selectedItemQuantity, 10) + 1;
    //         //console.log("New Qty: " + newItemQuantity);
    //         createNewItem = true;
    //     }
       
    // }*/
    // // Old Loop

    var bagObj = localStorage.getItem("bagJSON");
    var itemsArray = JSON.parse(bagObj);
    if(itemsArray == null)
    {
        itemsArray = [];
    }
    // // New Loop
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
    // // New Loop

    if(createNewItem)
    {
    //     console.log('New Item will be Added');
    //     var bagWindow = document.getElementsByClassName('bag-window')[0];
    //     bagWindow.innerHTML = "";
    //     //console.log(selectedItemPrice);


    //     // Storing in localStorage
    //     itemObj = {'name': selectedItemName, 'quantity': selectedItemQuantity, 'price': selectedItemPrice};
    //     itemsArray == null ? itemsArray = [itemObj] : itemsArray.push(itemObj); // even if itemsArray is null push new item
    //     bagObj = JSON.stringify(itemsArray);
    //     localStorage.setItem("bagJSON", bagObj);
        

    //     // Displaying Data in HTML
    //     var itemBox = `<div class='row cart-item'>
    //                     <h4>${selectedItemName}
    //                         <span class='float-end' onClick='removeFromBag(this)'><i class='bi bi-bag-dash'></i></span>
    //                     </h4> 
    //                     <p>
    //                         <span><button class='btn border-dark' onClick='decrementQuantity(this)'>-</button></span>
    //                         <span class='fs-5'> ${selectedItemQuantity} </span>
    //                         <span><button class='btn border-dark' onClick='incrementQuantity(this)'>+</button></span> 
    //                         <span class='float-end fs-5'>Rs.${selectedItemPrice}</span>
    //                     </p>
    //                     <hr>
    //                   </div>`;

    //     bagWindow.innerHTML += itemBox;

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
        if(selectedItemName.trim() == bagItemName.trim())
        {
            items[i].remove();
            item.parentNode.parentNode.remove();           
        }
    }
    updateSubTotal();
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
    var selectedItemName = item.parentNode.parentNode.parentNode.children[0].innerText.split(' ')[0];

    var items = document.getElementsByClassName('bag-window')[0].children;
    for(var i = 0; i < items.length; i++)
    {
        var bagItemName = items[i].children[0].innerText.split(' ')[0];
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
            }            
        }
    }
    updateSubTotal();
}


function incrementQuantity(item)
{
    //console.log("Inc qty " + item.parentNode.parentNode.parentNode.children[0].innerText.split(' ')[0]);
    var selectedItemName = item.parentNode.parentNode.parentNode.children[0].innerText.split(' ')[0];

    var items = document.getElementsByClassName('bag-window')[0].children;
    for(var i = 0; i < items.length; i++)
    {
        var bagItemName = items[i].children[0].innerText.split(' ')[0];
        var bagItemQty = items[i].children[1].children[1].innerText;
        console.log('Bag Qty: ' + bagItemQty);
        // console.log(bagItemName + " " + bagItemQty);

        if(selectedItemName.trim() == bagItemName.trim())
        {
            var quantity = (parseInt(bagItemQty, 10) + 1);
            console.log("New Qty Text: " + quantity);
            items[i].children[1].children[1].innerText = " " + quantity + " ";         
        }
    }
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