
// e is item
// .order-window is .bag-window
// createNewOrder is createNewItem

function addToBag(item){

    // var itemName = e.children[0].children[0].children[0].innerHTML;
    var selectedItemName = item.parentNode.children[1].innerText;
    var selectedItemQuantity = 1;
    var selectedItemPrice = item.parentNode.children[3].innerText;
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

        var itemBox = "<div class='row cart-item'><h4>"+selectedItemName+"<span class='float-end'><i class='bi bi-bag-dash'></i></span></h4> <p><span><button class='btn btn-secondary'>-</button></span><span class='fs-5'> "+selectedItemQuantity+" </span><span><button class='btn btn-secondary'>+</button></span> <span class='float-end fs-5'>Rs."+selectedItemPrice+"</span></p><hr></div>";

        bagWindow.innerHTML += itemBox;
    }
    //updateSubTotal();

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
    setSubTotal(sum);
}

function setSubTotal(subtotal) {
    document.getElementById('subtotal').innerText = "Rs."+subtotal;
}