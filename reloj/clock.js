const time = document.getElementById("time");
const date = document.getElementById("date");

const monthNames = [
  "01",
  "02",
  "03",
  "04",
  "05",
  "06",
  "07",
  "08",
  "09",
  "10",
  "11",
  "12",
];

const interval = setInterval(() => {
  const local = new Date();

  let day = local.getDate(),
    month = local.getMonth(),
    year = local.getFullYear();

  time.innerHTML = local.toLocaleTimeString();
  date.innerHTML = `${day} ${monthNames[month]} ${year}`;
}, 1000);
