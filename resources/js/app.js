import { animate, scroll } from 'motion';
import './bootstrap';
import './swiper';

document.addEventListener("DOMContentLoaded", () => {
    const stackItems = document.querySelectorAll(".card-stack");

    stackItems.forEach((item, index) => {
        const overlay = item.querySelector(".overlay-dark");
        const nextCard = stackItems[index + 1];

        if (nextCard && overlay) {
            // Animasi menggelap 15%
            scroll(
                animate(overlay, {
                    opacity: [0, 0.15]
                }),
                {
                    target: nextCard,
                    // "start 100%": Mulai saat card berikutnya masuk dari bawah layar
                    // "start 400px": Selesai saat card berikutnya sampai di posisi sticky (top-40/60)
                    // Sesuaikan 400px ini dengan nilai 'top' di CSS kamu
                    offset: ["start end", "start 300px"]
                }
            );

            // Card 1 makin gelap (30%) saat Card 3 masuk
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
