document.addEventListener("keydown", function (event) {
    let typedKey = event.key.toLowerCase();
    let typedWords = sessionStorage.getItem("typedWords") || "";

    // Concatenamos la tecla presionada
    typedWords += typedKey;
    sessionStorage.setItem("typedWords", typedWords);

    // Verificamos si incluye "login" o "register"
    if (typedWords.includes("login")) {
        window.location.href = "/login"; // Ajusta la ruta según sea necesario
    } else if (typedWords.includes("register")) {
        window.location.href = "/register"; // Ajusta la ruta según sea necesario
    }

    // Limpiamos la memoria si el usuario hace una pausa en la escritura
    setTimeout(() => sessionStorage.setItem("typedWords", ""), 2000);
});
