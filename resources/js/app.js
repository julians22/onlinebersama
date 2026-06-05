import { animate, scroll } from 'motion';
import './bootstrap';
import './swiper';

// Video Modal
document.addEventListener('alpine:init', () => {
    Alpine.store('videoModal', {
        open: false,
        src: null,

        openModal(src) {
            console.log('Opening video modal with src');
            this.open = true;
            this.src = src;
        },
        closeModal() {
            this.open = false;
            this.src = null;
        }
    })
})

// Motion Animation (Card Stack)
document.addEventListener("DOMContentLoaded", () => {
    const stackItems = document.querySelectorAll(".card-stack");

    stackItems.forEach((item, index) => {
        const overlay = item.querySelector(".overlay-dark");
        const nextCard = stackItems[index + 1];

        if (nextCard && overlay) {
            scroll(
                animate(overlay, {
                    opacity: [0, 0.15]
                }),
                {
                    target: nextCard,
                    offset: ["start end", "start 300px"]
                }
            );

            const thirdCard = stackItems[index + 2];
            if (thirdCard) {
                scroll(
                    animate(overlay, { opacity: [0, 0.15, 0.3] }),
                    {
                        target: thirdCard,
                        offset: ["start end", "start 500px"]
                    }
                );
            }
        }
    });
});
