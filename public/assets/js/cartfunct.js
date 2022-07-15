
/*the logic behind this is storing  all the elements with the class box-container and creating 
an array of sorts, then each element with the clas box-container will be on the array
and whenever someone clicks on a particular element, */ 

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('danger-btn')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }
}

function removeCartItem(event){

    var buttonClicked = event.target
    buttonClicked.parentElement.remove()
    updateCartTotal()
}

function updateCartTotal(){

    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for(var i = 0; i< cartRows.length; i++){

        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-Price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$',''));
        var quantity = quantityElement.value
        total = total + (price * quantity)

    }


}

total = Math.round(total*100)/100
document.gerElementsByClassName('cart-tota-price')[0].innerText = '$ ' + total