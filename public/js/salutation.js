const salutation = document.querySelector("#salutation");
salutation.innerHTML = "";

const stamp = new Date();

const hours = stamp.getHours();
const minutes = stamp.getMinutes();
console.log(hours);
if (hours > 0 || hours < 11) {
    salutation.innerHTML = "Bom Dia.";
} else if (hours > 12 || hours < 18) {
    salutation.innerHTML = "Boa tarde.";
} else {
    salutation.innerHTML = "Boa Noite.";
}
