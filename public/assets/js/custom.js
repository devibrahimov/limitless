// profile dropdown
const dropdownBtn = document.querySelector(".profile");
const dropdown = document.querySelector(".dropdown");

if (dropdown) {
  dropdownBtn.addEventListener("click", () => dropdown.classList.toggle("active"));
}
// modal codes

const modal = document.getElementById("modal");
const close = document.querySelector(".close");
const edit = document.querySelector(".edit");

const openModal = () => modal.classList.add("modal-active");
const closeModal = () => modal.classList.remove("modal-active");

if (modal) {
  edit.addEventListener("click", () => openModal());
  close.addEventListener("click", () => closeModal());

  window.onclick = (e) => {
    if (e.target == modal) {
      closeModal();
    }
  };
}

//modal input values

const firstName = document.querySelector(".form-edit .first-name");
const lastName = document.querySelector(".form-edit .last-name");
const email = document.querySelector(".form-edit .email");
const phone = document.querySelector(".form-edit .phone");
const desc = document.querySelector(".form-edit .desc");
const experience = document.querySelector(".form-edit .experience");
const level = document.querySelectorAll(".form-edit input[name=level]");

const showFirstName = document.querySelector(".details .first-name");
const showLastName = document.querySelector(".details .last-name");
const showEmail = document.querySelector(".details .email");
const showPhone = document.querySelector(".details .phone");
const showDesc = document.querySelector(".details .desc");
const showLevel = document.querySelector(".details .level");
const showExperience = document.querySelector(".details .experience");

if (modal) {
  firstName.value = showFirstName.innerHTML;
  lastName.value = showLastName.innerHTML;
  email.value = showEmail.innerHTML;
  phone.value = showPhone.innerHTML;
  desc.value = showDesc.innerText;
  //experience.value = showExperience.innerText;

  for (const radio of level) {
    if (radio.id.toLowerCase() === showLevel.innerText.toLowerCase()) {
      radio.checked = true;
    }
  }
}

// for quiz app

const quizMockData = [
  {
    question: "Which language runs in a web browser",
    a: "Java",
    b: "C",
    c: "Pyhton",
    d: "Javasciprt",
    correct: "d",
  },
  {
    question: "What does CSS stand for?",
    a: "Central Style Sheets",
    b: "Cascading Style Sheets",
    c: "Cascading Style Simple",
    d: "Cars Suv Sailboats",
    correct: "b",
  },
  {
    question: "What does HTML stand for?",
    a: "HyperText Markup Language",
    b: "HyperText Markdown Language",
    c: "Hyperloop Machine Language",
    d: "Helicopters Terminals Motorboats Lambororor",
    correct: "a",
  },
  {
    question: "What year was Javascript launched?",
    a: "1996",
    b: "1995",
    c: "1994",
    d: "none of the above ",
    correct: "b",
  },
];

const quiz = document.getElementById("quiz");
const answerEls = document.querySelectorAll(".answer");
const questionEl = document.getElementById("question");
const a_text = document.getElementById("a-text");
const b_text = document.getElementById("b-text");
const c_text = document.getElementById("c-text");
const d_text = document.getElementById("d-text");
const submitBtn = document.getElementById("submitButton");

let currentQuiz = 0;
let score = 0;

const deSelectAnswer = () => {
  answerEls.forEach((answerEl) => {
    answerEl.checked = false;
    answerEl.disabled = false;
    answerEl.nextElementSibling.classList.remove("correct");
    answerEl.nextElementSibling.classList.remove("fault");
  });
};

answerEls.forEach((answerEl) => {
  answerEl.addEventListener("click", () => {
    getSelected();
  });
});

const loadQuiz = () => {
  deSelectAnswer();
  if (quiz) {
    const currentQuizData = quizMockData[currentQuiz];
    questionEl.innerText = currentQuizData.question;
    a_text.innerText = currentQuizData.a;
    b_text.innerText = currentQuizData.b;
    c_text.innerText = currentQuizData.c;
    d_text.innerText = currentQuizData.d;
  }

  submitBtn.disabled = true;
  quizMockData[currentQuiz] === quizMockData[quizMockData.length - 1] ? (submitBtn.innerText = "Submit") : (submitBtn.innerText = "Next");
};

loadQuiz();

const getSelected = () => {
  let answer;
  answerEls.forEach((answerEl) => {
    answerEl.disabled = true;
    if (answerEl.disabled) {
      submitBtn.disabled = false;
    }
    if (answerEl.checked) {
      answer = answerEl.id;
      if (answer === quizMockData[currentQuiz].correct) {
        answerEl.nextElementSibling.classList.add("correct");
      } else {
        answerEl.nextElementSibling.classList.add("fault");
        answerEls.forEach((answerEl) => {
          if (quizMockData[currentQuiz].correct === answerEl.id) {
            answerEl.nextElementSibling.classList.add("correct");
          }
        });
      }
    }
  });
  return answer;
};

if (quiz) {
  submitBtn.addEventListener("click", () => {
    const answer = getSelected();
    if (answer === quizMockData[currentQuiz].correct) {
      score++;
    }

    deSelectAnswer();
    currentQuiz++;

    if (currentQuiz < quizMockData.length) {
      loadQuiz();
    } else {
      quiz.innerHTML = `<h4 style="padding: 1rem; text-align: center;">You answered ${score} / ${quizMockData.length} questions correctly </h4>
      <button onclick="location.reload()">Reload</button>
      `;
    }
  });
}
