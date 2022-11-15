//Marco Aiello
//November 15, 2022
//When an option from the quiz page is selected, get the result and save it
//Then show the next question
//Once all of the questions have been answered, display the recommended products(still figuring this out)

var selections = [];

function startQuiz()
{
    document.getElementById("question-one").style.display = "block"; 
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

    //Get the data
    selections.push(brewType);
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

    //Get the data
    selections.push(howYouLike);
}

function startQuestionFour(caffineLevel)
{
    document.getElementById("question-four").style.display = "block";

    document.getElementById("q-3-a-1").disabled = true;
    document.getElementById("q-3-a-2").disabled = true;
    document.getElementById("q-3-a-3").disabled = true;
    document.getElementById("q-3-a-4").disabled = true;

    //Get the data
    selections.push(caffineLevel);
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

    selections.push(teaTaste);
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

    selections.push(whyDrinkTea);
}

function quizEnd(whats)
{
    document.getElementById("q-6-a-1").disabled = true;
    document.getElementById("q-6-a-2").disabled = true;
    document.getElementById("q-6-a-3").disabled = true;

    selections.push(whats);
    processQuizData();
    for(element of selections)
    {
        alert(element);
    }
}

function processQuizData()
{
    //Products are linked to each of the questions
    //When a choice is made, each of the products ender that label recieve one vote
    //The results page will show the products sorted by the number of votes
    //Opens a new page and we have a query that pulls the quizTage and names of each of the selections
    //We then use JS on the main page to 
}