//Marco Aiello
//August 29, 2022
//js to control the carousel for the "Get Inspred" section


//Marco Aiello
// August 25, 2022
//js to control the carousel for the 'top picks section of the front page'

var imagesInsp = ["img/one.png", "img/two.png", "img/three.png", "img/three.png", "img/two.png", "img/one.png"];
var currInsp = 0;

var leftImage = document.getElementById("get-inspired-img-left");
var middleImage = document.getElementById("get-inspired-img-middle");
var rightImage = document.getElementById("get-inspired-img-right");

document.getElementById("get-inspired-button-left").addEventListener("click", getInspiredLeftClick);
document.getElementById("get-inspired-button-right").addEventListener("click", getInspiredRightClick);

function getInspiredRightClick()
{
    currInsp = currInsp + 3;

    //If we are out of bounds go to the beginning of the array
    if(currInsp >= imagesInsp.length)
    {
        currInsp = 0;
    }

    document.getElementById("get-inspired-img-left").src=imagesInsp[currInsp];
    document.getElementById("get-inspired-img-middle").src=imagesInsp[currInsp + 1];
    document.getElementById("get-inspired-img-right").src=imagesInsp[currInsp + 2];

}

function getInspiredLeftClick()
{
    currInsp = currInsp - 3;

    //If we are out of bounds go to the last three elements of the array
    if(currInsp < 0)
    {
        currInsp = imagesInsp.length - 3;
    }

    document.getElementById("get-inspired-img-left").src=imagesInsp[currInsp];
    document.getElementById("get-inspired-img-middle").src=imagesInsp[currInsp + 1];
    document.getElementById("get-inspired-img-right").src=imagesInsp[currInsp + 2];

}