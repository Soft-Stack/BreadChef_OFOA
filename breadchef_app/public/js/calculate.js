
// e is item
// .order-window is .bag-window
// createNewOrder is createNewItem

function addToBag(item){

    // var itemName = e.children[0].children[0].children[0].innerHTML;
    var selectedItemName = item.parentNode.children[1].innerText;
    var selectedItemQuantity = 1;
    var selectedItemPrice = item.parentNode.children[3].innerText.split('.')[1];
    console.log("Selected Item Name: " + selectedItemName);
    console.log("Selected Item Price: " + selectedItemPrice);

    var items = document.getElementsByClassName('bag-window')[0].children;
    var createNewItem = true;
    console.log("Items in Bag: " + items.length);

    for(var i = 0; i < items.length; i++)
    {
        var bagItemName = items[i].children[0].innerText.split(' ')[0];
        console.log("Item Bag: " + bagItemName);

        if(selectedItemName.trim() == bagItemName.trim())
        {
            console.log('Already in Bag');
            createNewItem = false;
        }
        else
        {
            console.log('Not in Bag');
            //var newItemQuantity = parseInt(selectedItemQuantity, 10) + 1;
            //console.log("New Qty: " + newItemQuantity);
            createNewItem = true;
        }
    }

    if(createNewItem)
    {
        console.log('New Item will be Added');
        var bagWindow = document.getElementsByClassName('bag-window')[0];
        console.log(selectedItemPrice);

        var itemBox = "<div class='row cart-item'><h4>"+selectedItemName+"<span class='float-end' onClick='removeFromBag(this)'><i class='bi bi-bag-dash'></i></span></h4> <p><span><button class='btn border-dark fw-bold' onClick='decrementQuantity(this)'>-</button></span><span class='fs-5'> "+selectedItemQuantity+" </span><span><button class='btn border-dark fw-bold' onClick='incrementQuantity(this)'>+</button></span> <span class='float-end fs-5'>Rs."+selectedItemPrice+"</span></p><hr></div>";

        bagWindow.innerHTML += itemBox;
    }
    updateSubTotal();

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
    console.log("Sub Total: " + sum);
    setSubTotal(sum);
}

function setSubTotal(subtotal) {
    var SubTotal = "Rs." + subtotal;
    document.getElementById('subtotal').innerText = SubTotal;
}