const text = document.querySelector("h2");
const countdownDate = new Date("June 5, 2024 23:59:59");
function getChrono() {
  const now = new Date();
  const distanceBase = countdownDate - now;
  const days = Math.floor(distanceBase / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distanceBase % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((distanceBase % (1000 * 60 * 60)) / (1000 * 60));
  const secondes = Math.floor((distanceBase % (1000 * 60)) / 1000);

  const formattedDays = days.toString().padStart(2, "0");
  const formattedHours = hours.toString().padStart(2, "0");
  const formattedMinutes = minutes.toString().padStart(2, "0");
  const formattedSeconds = secondes.toString().padStart(2, "0");

  let pluralDays = days === 0 || days === 1 ? "" : "";
  let pluralHours = hours === 0 || hours === 1 ? "" : "";
  let pluralMinutes = minutes === 0 || minutes === 1 ? "" : "";
  let pluralSeconds = secondes === 0 || secondes === 1 ? "" : "" ;

  text.innerText = `${formattedDays} ${pluralDays} ${formattedHours} ${pluralHours} ${formattedMinutes} ${pluralMinutes} ${formattedSeconds} ${pluralSeconds}`;
  if (days <= 0 && hours <= 0 && minutes <= 0 && secondes <= 0) {
    clearInterval(countDownInterval);
    text.innerText = "Today, is D-Day";
  }
}

const countDownInterval = setInterval(getChrono, 1000);