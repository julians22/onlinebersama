import { animate, scroll } from 'motion';
import './bootstrap';
import './swiper';

// Motion Animation

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
