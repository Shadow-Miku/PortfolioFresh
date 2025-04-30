document.addEventListener("DOMContentLoaded", function () {
    function previewImages(input) {
        const previewContainer = document.getElementById("imagePreview");
        previewContainer.innerHTML = ""; // Limpiar el preview anterior

        const files = input.files;

        if (files.length > 0) {
            Array.from(files).forEach((file) => {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.classList.add("img-thumbnail");
                    img.style.width = "120px";
                    img.style.height = "120px";
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        }
    }

    document.getElementById("url").addEventListener("change", function () {
        previewImages(this);
    });
});
