import { animate, scroll } from 'motion';
import './bootstrap';
import './swiper';

// Video Modal
document.addEventListener('alpine:init', () => {
    Alpine.store('videoModal', {
        accountId: null,
        playerId: null,
        open: false,
        videoId: null,
        loaded: false,

        init(accountId, playerId) {
            this.accountId = accountId;
            this.playerId = playerId;
        },
        openModal(videoId) {
            this.open = true;
            this.videoId = videoId;

            if (!this.loaded) {
                this.loadVideo();
                this.loaded = true;
            }
        },
        closeModal() {
            this.open = false;
            this.videoId = null;
            this.loaded = false;

            let videoRender = document.getElementById('vjs-video-render');
            videoRender.innerHTML = '';
        },
        loadVideo() {
            let videoRender = document.getElementById('vjs-video-render');
            const video_html = `<video-js
                    id="vjs-video-player"
                    autoplay="play"
                    data-account="${this.accountId}"
                    data-player="${this.playerId}"
                    data-embed="default"
                    controls=""
                    data-video-id="${this.videoId}"
                    data-playlist-id=""
                    data-application-id=""
                    class="vjs-fluid">
                </video-js>`;
            videoRender.innerHTML = video_html;

            let videoScript = document.createElement('script');
            videoScript.setAttribute('src', `https://players.brightcove.net/${this.accountId}/${this.playerId}_default/index.min.js`);
            document.body.appendChild(videoScript);
        },
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
