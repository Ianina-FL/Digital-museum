document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const hiddenElements = document.querySelectorAll('.hidden-left, .hidden-right, .hidden-bottom');
    hiddenElements.forEach(el => observer.observe(el));

    flatpickr("#visit-date", {
        dateFormat: "Y-m-d",
    });

    const ticketType = new Choices('#ticket-type', {
        searchEnabled: false,
        itemSelectText: ''
    });

    const ticketQuantity = new Choices('#ticket-quantity', {
        searchEnabled: false,
        itemSelectText: ''
    });
});
