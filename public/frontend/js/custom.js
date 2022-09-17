// profile dropdown
const dropdownBtn = document.querySelector(".profile");
const dropdown = document.querySelector(".dropdown");

dropdownBtn.addEventListener("click", () => dropdown.classList.toggle("active"));

// modal codes

const modal = document.getElementById("modal");
const close = document.querySelector(".close");
const edit = document.querySelector(".edit");

const openModal = () => modal.classList.add("modal-active");
const closeModal = () => modal.classList.remove("modal-active");

edit.addEventListener("click", () => openModal());
close.addEventListener("click", () => closeModal());

window.onclick = (e) => {
  if (e.target == modal) {
    closeModal();
  }
};

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

firstName.value = showFirstName.innerHTML;
lastName.value = showLastName.innerHTML;
email.value = showEmail.innerHTML;
phone.value = showPhone.innerHTML;
desc.value = showDesc.innerText;
experience.value = showExperience.innerText;

for (const radio of level) {
  if (radio.id.toLowerCase() === showLevel.innerText.toLowerCase()) {
    radio.checked = true;
  }
}
