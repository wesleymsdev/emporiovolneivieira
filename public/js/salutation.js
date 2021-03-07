const salutation = document.querySelector("#salutation");
salutation.innerHTML = "";

const stamp = new Date();

const hours = stamp.getHours();

if (hours > 0 && hours < 12) {
    salutation.innerHTML = "Bom Dia.";
} else if (hours > 12 && hours < 18) {
    salutation.innerHTML = "Bom tarde.";
} else {
    salutation.innerHTML = "Boa Noite.";
}
