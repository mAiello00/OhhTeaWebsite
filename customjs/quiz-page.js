var questionIds = ["quiz-question-one-anchor", "quiz-question-two-anchor", "quiz-question-three-anchor", "quiz-question-four-anchor", "quiz-question-five-anchor", "quiz-question-six-anchor",];

var quizQuestionCounter = 0;

function displayQuizQuestion()
{
    var nextQuestion = questionIds[quizQuestionCounter];
    document.getElementById(nextQuestion).style.display = "block";
    quizQuestionCounter++;
}