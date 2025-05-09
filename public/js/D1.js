// Redirección
// Reiniciar el valor al cargar la página
sessionStorage.setItem("typedWords", "");

document.addEventListener("keydown", function (event) {
    let typedKey = event.key.toLowerCase();
    let typedWords = sessionStorage.getItem("typedWords") || "";

    typedWords += typedKey;
    sessionStorage.setItem("typedWords", typedWords);

    if (typedWords.includes("login")) {
        // Reiniciar antes de redireccionar
        sessionStorage.setItem("typedWords", "");
        window.location.href = "/login";
    } else if (typedWords.includes("register")) {
        sessionStorage.setItem("typedWords", "");
        window.location.href = "/register";
    }

    setTimeout(() => sessionStorage.setItem("typedWords", ""), 2000);
});

// Copiar Correo
function copiarCorreo() {
    const correo = "aldorojas401@gmail.com";
    navigator.clipboard
        .writeText(correo)
        .then(() => {
            alert("Correo copiado al portapapeles: " + correo);
        })
        .catch((err) => {
            console.error("Error al copiar: ", err);
        });
}
