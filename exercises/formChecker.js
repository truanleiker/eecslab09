function reset()
{
    document.getElementById("formHello").reset();
}

function verify()
{
    let quantityPeanut = document.getElementById("quantityPeanut").value;
    let quantityFeather = document.getElementById("quantityFeather").value;
    let quantityHeart = document.getElementById("quantityHeart").value;

    if (quantityPeanut.startsWith("-"))
    {
        alert("Please enter a valid Single Peanut M&M quantity.")
        return false;
    }
    if (quantityFeather.startsWith("-"))
    {
        alert("Please enter a valid 1.23 Tons of Feathers.")
        return false;
    }
    if (quantityHeart.startsWith("-"))
    {
        alert("Please enter a valid Large Adult Human Heart quantity.")
        return false;
    }

    return true;

}