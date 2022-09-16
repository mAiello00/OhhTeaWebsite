//Marco Aiello
// August 25, 2022
//js to control the carousel for the 'top picks section of the front page'

var images = ["img/one.png", "img/two.png", "img/three.png", "img/three.png", "img/two.png", "img/one.png"];
var curr = 0;

var leftImage = document.getElementById("our-top-picks-img-left");
var middleImage = document.getElementById("our-top-picks-img-middle");
var rightImage = document.getElementById("our-top-picks-img-right");

document.getElementById("our-top-picks-button-left").addEventListener("click", topPicksLeftClick);
document.getElementById("our-top-picks-button-right").addEventListener("click", topPicksRightClick);

function topPicksRightClick()
{
    curr = curr + 3;

    //If we are out of bounds go to the beginning of the array
    if(curr >= images.length)
    {
        curr = 0;
    }

    document.getElementById("our-top-picks-img-left").src=images[curr];
    document.getElementById("our-top-picks-img-middle").src=images[curr + 1];
    document.getElementById("our-top-picks-img-right").src=images[curr + 2];

}

function topPicksLeftClick()
{
    curr = curr - 3;

    //If we are out of bounds go to the last three elements of the array
    if(curr < 0)
    {
        curr = images.length - 3;
    }

    document.getElementById("our-top-picks-img-left").src=images[curr];
    document.getElementById("our-top-picks-img-middle").src=images[curr + 1];
    document.getElementById("our-top-picks-img-right").src=images[curr + 2];

}