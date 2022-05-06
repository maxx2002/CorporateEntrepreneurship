// button virtual career expo
const day1 = document.querySelector("#day1");
const day2 = document.querySelector("#day2");
const btnday1 = document.querySelector("#btnday1");
const btnday2 = document.querySelector("#btnday2");

btnday1.addEventListener("click", () => {
  day1.classList.remove("visually-hidden");
  day2.classList.add("visually-hidden");
});

btnday2.addEventListener("click", () => {
  day2.classList.remove("visually-hidden");
  day1.classList.add("visually-hidden");
});