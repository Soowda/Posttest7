const modeToggle = document.getElementById("modeToggle");
const modeText = document.getElementById("modeText");
const body = document.body;

modeToggle.addEventListener("change", () => {
    if (modeToggle.checked) {
        body.classList.add("dark-mode");
        modeText.textContent = "Light Mode";
    } else {
        body.classList.remove("dark-mode");
        modeText.textContent = "Dark Mode";
    }
});

// Mengecek status mode saat pertama kali load halaman
if (localStorage.getItem("mode") === "dark") {
    body.classList.add("dark-mode");
    modeToggle.checked = true;
    modeText.textContent = "Light Mode";
} else {
    body.classList.remove("dark-mode");
    modeToggle.checked = false;
    modeText.textContent = "Dark Mode";
}

// Simpan status mode ke local storage
modeToggle.addEventListener("change", () => {
    if (modeToggle.checked) {
        localStorage.setItem("mode", "dark");
    } else {
        localStorage.setItem("mode", "light");
    }
});




const openPopupButton = document.getElementById('open-popup');
const closePopupButton = document.getElementById('close-popup');
const popup = document.getElementById('popup');

// Open the popup
openPopupButton.addEventListener('click', () => {
    popup.style.display = 'block';
});

// Close the popup
closePopupButton.addEventListener('click', () => {
    popup.style.display = 'none';
});


