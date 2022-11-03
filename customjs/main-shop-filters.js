
filterSelection('all');

function filterSelection(selection)
{
    var i = 0;
    var shopElements = document.getElementsByClassName('shop-item');

    if(selection == 'all')
    {
        for(i = 0; i < shopElements.length; i++)
        {
            shopElements[i].classList.remove('hide');
        }
    }
    else
    {
        //First we add the .hide class from all the shop-elements
        for(i= 0; i < shopElements.length; i++)
        {
            shopElements[i].classList.add('hide');
        }

        i = 0;
        //Then we remove it from the elements we want to display
        for(i = 0; i < shopElements.length; i++)
        {
            if(shopElements[i].classList.contains(selection))
            {
                shopElements[i].classList.remove('hide');
            }
        }
    }
}
