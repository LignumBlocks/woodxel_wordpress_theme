document.addEventListener('DOMContentLoaded', () => {
    const message = document.querySelector('.woocommerce-message');

    if (message) {
        setTimeout(() => {
            message.style.transition = 'opacity 0.5s';
            message.style.opacity = '0';

            setTimeout(() => {
                message.style.display = 'none';
                console.log("Mensaje ocultado.");
            }, 500);
        }, 3000);
    }
});