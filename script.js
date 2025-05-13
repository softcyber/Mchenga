function toggleMenu() {
    // Select the navigation menu and hamburger button
    const navbar = document.querySelector('.navbar');
    const toggleButton = document.querySelector('.tongle');

    // Toggle the 'active' class on the navbar and toggle button
    navbar.classList.toggle('active');
    toggleButton.classList.toggle('active');
}
