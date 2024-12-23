// Team Section Hover Effect
const teamMembers = document.querySelectorAll(".team .member");
if (teamMembers.length > 0) {
    teamMembers.forEach((member) => {
        member.addEventListener("mouseover", () => {
            member.style.transform = "scale(1.05)";
            member.style.transition = "transform 0.3s ease-in-out";
        });
        member.addEventListener("mouseout", () => {
            member.style.transform = "scale(1)";
        });
    });
}

// Scroll to Values Section
const valuesLink = document.querySelector("a[href='#values']");
if (valuesLink) {
    valuesLink.addEventListener("click", (e) => {
        e.preventDefault();
        const targetSection = document.querySelector("#values");
        targetSection.scrollIntoView({ behavior: "smooth" });
    });
}