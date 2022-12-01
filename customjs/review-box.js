function writeReviewVisibility(){
    if(document.getElementById('reviewBoxContainer').style.display == "block")
    {
        document.getElementById('reviewBoxContainer').style.display = "none";
    }
    else{
        document.getElementById('reviewBoxContainer').style.display = "block";
    }
    
}

function postReview(){
    var charCount = (document.getElementById('writeReviewArea').value).length;
    if(charCount > 255){
        alert("Message Too Long");
    }
    else{
        document.getElementById('reviewBoxContainer').style.display = "none";
        alert("Review Sent");     
    }
}

function updateCharCount(){
    var msg = document.getElementById('writeReviewArea').value;
    var charCount = msg.length;

    var msgCharLen = document.getElementById('charMsgLength');
    msgCharLen.innerHTML = charCount + " / 255";
}