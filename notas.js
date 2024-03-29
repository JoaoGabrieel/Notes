const currentTime = document.querySelector("h1")
const content = document.querySelector(".content_alarm")
const selectMenu = document.querySelectorAll("select")
const setAlarmBtn = document.querySelector(".buttom_careysell")
let alarmTime = localStorage.getItem("alarme")

let isAlarmSet = false,
  ringtone = new Audio("files/Burglar-Alarm-chosic.com_.mp3")
console.log(selectMenu)
for (let i = 12; i > 0; i--) {
  i = i < 10 ? "0" + i : i
  let option = `<option value="${i}">${i}</option>`
  selectMenu[0].firstElementChild.insertAdjacentHTML("afterend", option)
}

for (let i = 59; i > 0; i--) {
  i = i < 10 ? "0" + i : i
  let option = `<option value="${i}">${i}</option>`
  selectMenu[1].firstElementChild.insertAdjacentHTML("afterend", option)
}

for (let i = 2; i > 0; i--) {
  let ampm = i == 1 ? "AM" : "PM"
  let option = `<option value="${ampm}">${ampm}</option>`
  selectMenu[2].firstElementChild.insertAdjacentHTML("afterend", option)
}

setInterval(() => {
  let date = new Date(),
    h = date.getHours(),
    m = date.getMinutes(),
    s = date.getSeconds(),
    ampm = "AM"

  if (h >= 12) {
    h = h - 12
    ampm = "PM"
  }
  h = h == 0 ? (h = 12) : h //se valor for 0 vira 12
  //adiciona 0 antes da hora,minuto,segundo se o valor for menor que 10
  h = h < 10 ? "0" + h : h
  m = m < 10 ? "0" + m : m
  s = s < 10 ? "0" + s : s

  currentTime.innerText = `${h}:${m}:${s} ${ampm}`
  console.log(ampm)
  console.log(alarmTime)

  if (alarmTime == `${h}:${m} ${ampm}`) {
    console.log(ringtone)
    ringtone.play()
    ringtone.loop = true
  }
}, 1000)

function setAlarm() {
  if (isAlarmSet) {
    alarmTime = ""
    ringtone.pause()
    content.classList.remove("disable")
    setAlarmBtn.innerText = "Set Alarm"
    return (isAlarmSet = false)
  }
  let time = `${selectMenu[0].value}:${selectMenu[1].value} ${selectMenu[2].value}`

  if (
    time.includes("hora") ||
    time.includes("minuto") ||
    time.includes("AM/PM")
  ) {
    return alert("COLOQUE UM HORARIO VALIDO NO ALARME")
  }

  isAlarmSet = true
  localStorage.setItem("alarme", time)
  console.alert(alarmTime)
  content.classList.add("disable")
  setAlarmBtn.innerText = "Clear Alarm"
}

setAlarmBtn.addEventListener("click", setAlarm)
