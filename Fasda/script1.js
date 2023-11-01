document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("myForm");
    const resultName = document.getElementById("resultName");
    const resultAge = document.getElementById("resultAge");
    const resultPassword = document.getElementById("resultPassword");

    form.addEventListener("submit", function(e) {
        e.preventDefault();
        const name = document.getElementById("name").value;
        const age = document.getElementById("age").value;
        const password = document.getElementById("password").value;

        resultName.textContent = name;
        resultAge.textContent = age;
        resultPassword.textContent = password;
    });
});
