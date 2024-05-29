

function displayQuestion() {
    console.log("Displaying question", currentQuestionIndex);
    const question = questions[currentQuestionIndex];
    console.log("Current Question:", question); // Log current question for debugging
    const questionContainer = document.getElementById('question-container');
    questionContainer.innerHTML = `
        <h3>${question.enunciado}</h3>
        ${question.foto ? `<img src="${imageBasePath}${question.foto}" alt="Question Image" style="width: 150px; height: 150px;">` : ''}
        ${question.opciones.map((answer, index) => `
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer${question.id}" id="answer${question.id}_${index}" value="${answer.id}">
                <label class="form-check-label" for="answer${question.id}_${index}">
                    ${answer.texto}
                </label>
            </div>
        `).join('')}
    `;
    startTimer(60);
}

function startTimer(seconds) {
    console.log("Starting timer for", seconds, "seconds");
    const timerElement = document.getElementById('timer-count');
    clearInterval(timer); // Clear any existing timer
    timer = setInterval(() => {
        timerElement.textContent = seconds;
        seconds--;
        if (seconds < 0) {
            clearInterval(timer);
            handleNextButtonClick();
        }
    }, 1000);
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('question-container').addEventListener('click', function(event) {
        if (event.target.matches('input[type="radio"]')) {
            const selectedAnswerId = event.target.value;
            console.log("Selected answer:", selectedAnswerId); // Log selected answer for debugging
            submitAnswer(selectedAnswerId);
        }
    });
});

function handleNextButtonClick() {
    console.log("Next button clicked");
    const questionId = questions[currentQuestionIndex].id;
    let selectedAnswerId = null;
    goToNextQuestion();
}


async function submitAnswer(answerId) {
    const questionId = questions[currentQuestionIndex].id;
    console.log("Submitting answer:", answerId, "for question:", questionId);
    let form = new FormData(document.getElementById("token"));
    form.append("questionId", questionId);
    form.append("answerId", answerId );
    let pet = await fetch(route("final.submit"), {
        method: "POST",
        body: form
    });
    if (pet.ok) {
        goToNextQuestion();
    } else {
        console.log("Response not ok:", pet.status);
    }
}

function goToNextQuestion() {
    console.log("Going to next question");
    currentQuestionIndex++;
    if (currentQuestionIndex < questions.length) {
        displayQuestion();
    } else {
        // End of questions
        window.location.href = route("final.resultado");
    }
}

document.getElementById('next-question-btn').addEventListener('click', handleNextButtonClick);

// Initial call to display the first question
displayQuestion();
