//---------------------------------------------------------
//
//  make calculations in the Checkout file

updateSubTotal();

function removeFromBag(item)
{
    var selectedItemName = item.parentNode.parentNode.children[0].innerText;
    console.log("Item To Remove: " + selectedItemName);

    var items = document.getElementsByClassName('order-window')[0].children;
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
            }            
        }
    }
    updateSubTotal();
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
        }
    }
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
}