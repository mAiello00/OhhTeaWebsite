//Marco Aiello
//November 15, 2022
//When an option from the quiz page is selected, get the result and save it
//Then show the next question
//Once all of the questions have been answered, display the recommended products

var selections = [];

//Products that belong to each of the tags  
var quizData ={
    "quizElements": 
    [
        {
            "quizTag": "looseLeaf",
            "applicableProducts": ["testEntryTwo"]
        },

        {
            "quizTag": "bagged",
            "applicableProducts": ["testEntryThree"]
        },

        {
            "quizTag": "fancy",
            "applicableProducts": []
        },

        {
            "quizTag": "milkAndSugar",
            "applicableProducts": []
        },

        {
            "quizTag": "hot",
            "applicableProducts": []
        },

        {
            "quizTag": "black",
            "applicableProducts": []
        },

        {
            "quizTag": "honeyAndLemon",
            "applicableProducts": []
        },

        {
            "quizTag": "iceCold",
            "applicableProducts": []
        },

        {
            "quizTag": "caffineFree",
            "applicableProducts": []
        },

        {
            "quizTag": "lowCaffine",
            "applicableProducts": []
        },

        {
            "quizTag": "highCaffine",
            "applicableProducts": []
        },

        {
            "quizTag": "allCaffine",
            "applicableProducts": []
        },

        {
            "quizTag": "fruity",
            "applicableProducts": []
        },

        {
            "quizTag": "floral",
            "applicableProducts": []
        },

        {
            "quizTag": "sweet",
            "applicableProducts": []
        },

        {
            "quizTag": "traditional",
            "applicableProducts": []
        },

        {
            "quizTag": "spiced",
            "applicableProducts": []
        },

        {
            "quizTag": "natural",
            "applicableProducts": []
        },

        {
            "quizTag": "forTaste",
            "applicableProducts": []
        },

        {
            "quizTag": "forWellness",
            "applicableProducts": []
        },

        {
            "quizTag": "forEnergy",
            "applicableProducts": []
        },

        {
            "quizTag": "toCalmDown",
            "applicableProducts": []
        },

        {
            "quizTag": "toSleep",
            "applicableProducts": []
        },

        {
            "quizTag": "toDetoxDigest",
            "applicableProducts": []
        },

        {
            "quizTag": "endTaste",
            "applicableProducts": []
        },

        {
            "quizTag": "endWellness",
            "applicableProducts": []
        },

        {
            "quizTag": "endEnergy",
            "applicableProducts": []
        }    
    ]
}

//Tally for each product
var productsTally ={
    "testEntryTwo": 0,
    "testEntryThree": 0,
    "testEntryFour": 0
}

//alert(quizData.quizElements[2].applicableProducts.length);

function startQuiz()
{
    document.getElementById("question-one").style.display = "block";     
    // alert(productsTally.testEntryTwo);
    // productsTally.testEntryTwo++;
    // alert(productsTally.testEntryTwo);
}


//The following functions will...
    //Shows the next question
    //disabled the buttons for the current question question
    //Saves the result of the current question

function startQuestionTwo(brewType)
{
    document.getElementById("question-two").style.display = "block";

    document.getElementById("q-1-a-1").disabled = true;
    document.getElementById("q-1-a-2").disabled = true;

    //The index corresponds to a specific answer for the quiz
    index = 0;
    if(brewType == "bagged")
    {
        index = 1;
    }

    processQuizData(index);
}

function startQuestionThree(howYouLike)
{
    document.getElementById("question-three").style.display = "block";

    document.getElementById("q-2-a-1").disabled = true;
    document.getElementById("q-2-a-2").disabled = true;
    document.getElementById("q-2-a-3").disabled = true;
    document.getElementById("q-2-a-4").disabled = true;
    document.getElementById("q-2-a-5").disabled = true;
    document.getElementById("q-2-a-6").disabled = true;

    switch(howYouLike)
    {
        case "milkAndSugar":
            index = 3;
            break;      
        case "hot":
            index = 4;
            break;
        case "black":
            index = 5;
            break;
        case "honeyAndLemon":
            index = 6;
            break;
        case "iceCold":
            index = 7;
            break;
        default:
            index = 2;
    }

    processQuizData(index);
}

function startQuestionFour(caffineLevel)
{
    document.getElementById("question-four").style.display = "block";

    document.getElementById("q-3-a-1").disabled = true;
    document.getElementById("q-3-a-2").disabled = true;
    document.getElementById("q-3-a-3").disabled = true;
    document.getElementById("q-3-a-4").disabled = true;

    switch(caffineLevel)
    {
        case "caffineFree":
            index = 8;
            break;
        case "lowCaffine":
            index = 9;
            break;
        case "highCaffine":
            index = 10;
            break;
        default:
            index = 11;
    }
    processQuizData(index);
}

function startQuestionFive(teaTaste)
{
    document.getElementById("question-five").style.display = "block";

    document.getElementById("q-4-a-1").disabled = true;
    document.getElementById("q-4-a-2").disabled = true;
    document.getElementById("q-4-a-3").disabled = true;
    document.getElementById("q-4-a-4").disabled = true;
    document.getElementById("q-4-a-5").disabled = true;
    document.getElementById("q-4-a-6").disabled = true;

    switch(teaTaste)
    {
        case "fruity":
            index = 12;
            break;
        case "floral":
            index = 13;
            break;
        case "sweet":
            index = 14;
            break;
        case "traditional":
            index = 15;
            break;
        case "spiced":
            index = 16;
            break;
        default:
            index = 17;
    }
    processQuizData(index);
}

function startQuestionSix(whyDrinkTea)
{
    document.getElementById("question-six").style.display = "block";

    document.getElementById("q-5-a-1").disabled = true;
    document.getElementById("q-5-a-2").disabled = true;
    document.getElementById("q-5-a-3").disabled = true;
    document.getElementById("q-5-a-4").disabled = true;
    document.getElementById("q-5-a-5").disabled = true;
    document.getElementById("q-5-a-6").disabled = true;

    switch(whyDrinkTea)
    {
        case "forTaste":
            index = 18;
            break;
        case "forWellness":
            index = 19;
            break;
        case "forEnergy":
            index = 20;
            break;
        case "toCalmDown":
            index = 21;
            break;
        case "toSleep":
            index = 22;
            break;
        default:
            index = 23;
    }
    processQuizData(index);
}

function quizEnd(whats)
{
    document.getElementById("q-6-a-1").disabled = true;
    document.getElementById("q-6-a-2").disabled = true;
    document.getElementById("q-6-a-3").disabled = true;

    switch(whats)
    {
        case "endtaste":
            index = 24;
            break;
        case "endWellness":
            index = 25;
            break;
        default:
            index = 26;
    }
    processQuizData(index);
}

function processQuizData(index)
{
    var toTally = quizData.quizElements[index].applicableProducts;
    for(tea of toTally)
    {
        productsTally[tea]++;
    }
}
//
// Quiz Tags
//
// * Question 1:
//         - looseLeaf 0
//         - bagged 1
    
//     * Question 2
//         - fancy 2
//         - milkAndSugar 3
//         - hot 4
//         - black 5
//         - honeyAndLemon 6
//         - iceCold 7

//     * Question 3
//         - caffineFree 8
//         - lowCaffine 9
//         - highCaffine 10
//         - allCaffine 11

//     * Question 4
//         - fruity 12
//         - floral 13
//         - sweet 14
//         - traditional 15
//         - spiced 16
//         - natural 17

//     * Question 5
//         - forTaste 18
//         - forWellness 19
//         - forEnergy 20
//         - toCalmDown 21
//         - toSleep 22
//         -toDetoxDigest 23
    
//     *Question 6
//         - endTaste 24
//         - endWellness 25
//         - endEnergy 26