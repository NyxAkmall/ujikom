// Hero Section Scroll Button
const heroButton = document.querySelector(".btn-primary");
if (heroButton) {
    heroButton.addEventListener("click", (e) => {
        e.preventDefault();
        const targetSection = document.querySelector(heroButton.getAttribute("href"));
        targetSection.scrollIntoView({ behavior: "smooth" });
    });
}

// Testimonial Slider (if applicable)
let currentTestimonial = 0;
const testimonials = document.querySelectorAll(".testimonial");
if (testimonials.length > 0) {
    setInterval(() => {
        testimonials[currentTestimonial].classList.add("hidden");
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        testimonials[currentTestimonial].classList.remove("hidden");
    }, 5000);
}