document.addEventListener("DOMContentLoaded", () => {
    const body = document.body;

    // Change background color automatically every 5 seconds
    setInterval(() => {
        body.classList.toggle('highlight');
    }, 5000);
});
