document.addEventListener("DOMContentLoaded", () => {
    const toggleDarkModeButton = document.getElementById("toggleDarkMode");

    // Function to toggle dark mode
    const toggleDarkMode = () => {
        document.documentElement.classList.toggle("dark");
        // Save the current mode to localStorage
        const isDarkMode = document.documentElement.classList.contains("dark");
        localStorage.setItem("darkMode", isDarkMode);
    };

    // Add click event listener to the button
    toggleDarkModeButton.addEventListener("click", toggleDarkMode);

    // Check the localStorage and apply the mode
    if (localStorage.getItem("darkMode") === "true" || !(darkMode in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches) {
        document.documentElement.classList.add("dark");
    } else {
        document.documentElement.classList.remove("dark");
    }
});
