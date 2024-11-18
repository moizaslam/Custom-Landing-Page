document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.getElementById("menu-icon");
    const mobileMenu = document.getElementById("mobile-menu");

    // Toggle mobile menu
    menuIcon.addEventListener("click", function () {
        menuIcon.classList.toggle("open");
        mobileMenu.classList.toggle("active");
    });

    // AJAX form submission
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);

        fetch("process_form.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Reset form fields
            this.reset();

            // Display success message
            const successMessage = document.getElementById("successMessage");
            successMessage.style.display = "block";
            successMessage.innerText = data;

            // Hide the success message after a few seconds
            setTimeout(() => {
                successMessage.style.display = "none";
            }, 5000);
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });
});
