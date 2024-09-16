<!DOCTYPE html>
<html lang="pt-br">
<?php render_view('_layout.head') ?>

<body>
    <main>
        <section>
            <div class="header">
                <div class="navigate">
                    <div class="left-menu">
                        <img class="logo-marca" src="/assets/img/logo.png" alt="logo-marca">
                        <div class="menu">
                            <a href=""><strong>Início</strong></a>
                            <a href="">Séries</a>
                            <a href="">Filmes</a>
                            <a href="">Bombando</a>
                            <a href="">Minha lista</a>
                            <a href="">Navegar por idiomas</a>
                        </div>
                    </div>

                    <div class="right-menu">
                        <div class="search" onclick="itemSearch">
                            <i class="ri-search-line"></i>
                        </div>
                        <div class="text">Infantil</div>
                        <div class="notifications">
                            <i class="ri-notification-2-line"></i>
                            <p>4</p>
                        </div>
                        <div class="account">
                            <img src="/assets/img/profile.jpg" alt="">
                            <i class="ri-arrow-down-s-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section>
        <div class="container">
            <div class="elemento">
                <div class="static">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABZNI5yW7-b--lOOF2X1yLLV4lvuqBifzhvkYNxxyIV6Z34fMcorxuCybkumq8Yx3eoyO-RWh8u49NUEMRrckvKdRqh6P6N-YM4QaexWjDvEHjlqDvtrmTCzyf_M4GkdmS_XxmYMPYhNPYll4NysLuumUMnRxc9P7nKMs3HFGfEay-X3jDAYNLA.webp?r=b93" alt="A Grande Ilusão">
                    <p>
                        A ex-soldada Maya vê imagens do marido assassinado em uma<br>
                        câmera-espiã e descobre uma conspiração fatal há muito tempo<br>
                        em curso.
                    </p>
                    <div class="btn-home">
                        <button class="btn-play" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6 20.1957V3.80421C6 3.01878 6.86395 2.53993 7.53 2.95621L20.6432 11.152C21.2699 11.5436 21.2699 12.4563 20.6432 12.848L7.53 21.0437C6.86395 21.46 6 20.9812 6 20.1957Z"></path>
                            </svg>
                            <p>Assistir</p>
                        </button>
                        <button class="btn-more" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 7H13V9H11V7ZM11 11H13V17H11V11Z"></path>
                            </svg>
                            <p>Mais informações</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="slider-container-initial">
            <div class="text-title-home">
                <div>
                    <div>Séries sobre investigação criminal</div>
                    <div id="title-more">
                        ver tudo
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                </div>
            </div>
            <div class="slider">
                <!-- Investigação criminal -->
                <div class="slide">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABSzPrAXhc3wssGego-oqypJaa8NOze6s0kreY3hNCjU1blYedTWLOegAI6D3yypZY1cPgnsie828DbjnmSgbXuqL6VCDF4f-KIs.webp?r=d6e" alt="how to Get Away with a Murderer">
                </div>
                <div class="slide">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABWrql76W6MMv6HIlZNWRdx89QtYJl5ghi4J-YXCYCIpvC7ktxx_lZkQOVECaFsXqEBrCqX8ZGyfcj5vf5Mjqa19HnFOYUkk0rZo.webp?r=658" alt="Killing Eve">
                </div>
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABWPvBDZw2Rw5OHg4fWC9SzFHOjGW_KH76EPpJr8wYhW6yqYnYiYb0oxKDDlIcJDzlrbEmSRLBposesuEZrx1IL__niripHUgPhq7XG2edUM_y1ymc0dFuY9UnVeN9aMggaoe.jpg?r=c9c" alt="Bom dia, Verônica">
                </div>
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABf1TgopxV9xgn746uYkYSKr02EQ0CgHnf2dri5BvBz3PGe97mFJncbJ1oOOlqV9uR90Aq2OOKVQMh0FDC1oBTC7AJqe4uN93gGaOLkVT9RIpxiS_z2CgAByF46JcxPaBK-HP.jpg?r=ece" alt="O Caso Asunta">
                </div>
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABeoYjHX4zVfx7Z1AlQ41GLno1fnfTzI4BRMxMAQD-R98EJTQZgrfqZ_CrD_chyRF2Z1HhD3qPjTTtZam4LnanlKP8NZaCExStaGrKyiLev0yXUyoM0dRh3i5LPwxdYtmPsB9.jpg?r=51c" alt="Enfermeira">
                </div>
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABQuLhKO4cE_Ovb1Eqxw31H3AgTtfVJlM01UBL3qJZ78rn9tNsVU7a5IiDVKux-iRafUF5XirxU2wrryk2BV0lp8G0U0hIm40Ws-NISThXbzJ_Dz5vrsDOkvKy4OuN6oK1zvi.jpg?r=198a" alt="Coração Marcado">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="slider-container">
            <span>Só na Netflix</span>
            <div class="slider">
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABVxOzw_Lj5kURmW_WJbcWG8k2X7dE2NcPwoRX2d1aRq-VLtLq2RXl-VqgX_AiLq8SRYY6TSFNPNJ_UiLPmke13QeeNdliN5rRAHT0hQ-KKHu6jO9MlarWzUWqhpjxpWF1uL0.jpg?r=6ad" alt="You">
                </div>
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABRy_MyuKLgwtBI7UxRpIot9p0bgMhBoR6RS0yvDx32xfE7gqatzi5UktB100SL5I6WJQS8AL7BjXobh_vgnzT32Okd_TnsKC8YyGl6UXDQohmSGlLpP1EleDNUqPfd6ZmAX7.jpg?r=42a" alt="Stranger Things">
                </div>
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABWeqsTGWhWfLVQBgEOa51-VHiVx34uhFyjOEk6SKNWb21zk1RzGSo7R95RdwLhIneStCSXq_V0tFypWEN0IfHTrXxijx4JLpHjDc7U7KIRdxJzp9PkLAqK28-6cIsYypxX1M.jpg?r=b97" alt="O Turista">
                </div>
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABRLUxJ7dVaNfOv4LP-kYXwH1mVRg-g1tc6DnYHhHknlbQZmKwBxiZ9Te88hM8o7UQvec1mVBziwv8rzsAQHWz8Ynl4lgOrYtYKtYI6_rUo8pP64m3zBSoNEoIcm2K_yC4c5j.jpg?r=e4e" alt="Sense8">
                </div>
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABRZvfRRjoaWkbPlht08KcU6adnT3yTG-XKJ9z6MmZTa-Efvg3hvKg2ry_5Q0qj9OCAOaHTCAZGgFVkpfnomFJKgxweoQ6p84StTE8vZHw3Mu-XGgLfOKx6dSiGyRalMR8RAQ.jpg?r=a08" alt="Segurança em Jogo">
                </div>
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABQ7b9GHWrj_UPrZuD7RUPKaaJH0MFxuJ7rRf7c73RL9PuIdpjmYK2aOLhDD2kgsekRC8S4RN_cLbmPvp7FpiOCDLBuS2jTh4-CJiOBa-XtqNU1BwcxYHIcl_6Ud5WbVJy6cD.jpg?r=59a" alt="Agente Noturno">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="content-more">
            <div class="title-list">
                <span>Continuar assistindo como Ana</span>
                <div class="slide">
                    <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABcnTSL82mFB9xQQCpTh9qcHyG4-qpSEopY7-wp0D3SdbwQ-ViVSB3Fund5u5OLkjPIIQTNx3Hcpy4CR2UULBYX-QR0Xm0WKSrs4.webp?r=a88" alt="NCIS">
                </div>
                <div class="progress">
                    <svg width="166" height="3" viewBox="0 0 166 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="1.5" x2="124" y2="1.5" stroke="#FF0000" stroke-width="3" />
                        <line x1="124" y1="1.5" x2="166" y2="1.5" stroke="#5B5B5B" stroke-width="3" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="slider-container-initial">
            <div class="text-title-home">
                <div>
                    <div>Séries e filmes para jovens adultos</div>
                    <div id="title-more">
                        ver tudo
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                </div>
            </div>
            <div class="slider">
                <!-- Séries e filmes para jovens adultos -->
                <div class="slide">
                    <img src="" alt="">
                </div>
                <div class="slide">
                    <img src="" alt="">
                </div>
                <div class="slide">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABWgDxArCeKE83GYwC-_bsTZWqlAJQeckP1Z2t2GFGtiDUSy-1jJhrI0-dOfBQXDdQbNomE580RxgqxQ_u52f0LGMA1SABtwm24zw2Y7t4tHSx8_zFRFb3v3shVvWew4SWAlT.jpg?r=079" alt="The Witcher">
                </div>
                <div class="slide">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABRF8Zu9cHN1TRgtlAogdQfHJTEIU--x64rxZLSfgjDsql7qSJvyFJYKovvmjamIrBcdiIWLz3r7fxImpCTEJG3MSsy0YtKSR7Wwl99cgJByL_Q_J_LUAKUZnGBU5yDSp0yJm.jpg?r=9c7" alt="Desejo Sombrio">
                </div>
                <div class=" slide">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABTVt5lVVHT4cGC8QlxZIUBE9Adps8D0_sKRcQRvj9WiwwriQL-VQ48M_Ubf--C_Aua4hWAGYFT6eX6gcQQ3q0uxos5DhQhVCkug.webp?r=218" alt="Gossip Girl">
                </div>
                <div class="slide">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABdpOZgXqyYsf0RdyYEOItRPx0MGH3SfSosrBVnM9Z_W88tVbHMRP-_WF2gA_QiLiWNgDeOYNflPfQCjy1JYzGW_qWJLiEKZc5rE.webp?r=1cb" alt="Riverdalle">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="slider-container-initial">
            <div class="text-title-home">
                <div>
                    <div>Filmes de ação e aventura</div>
                    <div id="title-more">
                        ver tudo
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                </div>
            </div>
            <div class="slider">
                <!-- Filmes de ação e aventura -->
                <div class="slide">
                    <img src="" alt="">
                </div>
                <div class="slide">
                    <img src="" alt="">
                </div>
                <div class="slide">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABdglDosDvn7xF9r7KmIfxTZm17A7MSfeT736797dYSFY_3o9eYlJ7PtvSxyFCR-m_NjTNFAI2e5x-ItMQbziRzasDGhJiEC--zY.webp?r=91a" alt="Jogos Vorazes">
                </div>
                <div class="slide">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABXCpzTxDqX1ia540vYYt0n6N4vjNk5YQEwseBtNmM3lr7qbXeAZmr-cMyJqnHC8jEtzHVaTPXlc-YlwHU37-j6s67eIZ9rUu7rA.webp?r=c21" alt="O Espetacular Homem Aranha">
                </div>
                <div class=" slide">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABQjtDLM-tVN4RgXEo4L8J_zvmROZIGkBNauu8NZDHEJk1rNTZX6Gb_MVFO5YzdF3bVeBO6S3qr7N_rxjjuVknoRP49uOCvcuFB4.webp?r=e44" alt="Atlas">
                </div>
                <div class="slide">
                    <img src="https://occ-0-1703-1740.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABTibX4lTmN9Wr3swGJQN-g3rzZyd6Z_MTYAxa70IqBeXO8gtBVA3QHH6Q3BduvxdZHElUHb_EC68rOeg-Af592EXQ5aldWppkLg.webp?r=652" alt="Godzilla">
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div>
            <svg id="rank-2" width="11%" height="100%" viewBox="0 0 80 154" class="svg-icon svg-icon-rank-2 top-10-rank">
                <path stroke="#595959" stroke-linejoin="square" stroke-width="4" d="M3.72 152H113v-30.174H50.484l4.355-3.55 29.453-24.012c5.088-4.124 9.748-8.459 13.983-13.004 4.16-4.464 7.481-9.339 9.972-14.629 2.449-5.203 3.678-11.113 3.678-17.749 0-9.428-2.294-17.627-6.875-24.645-4.597-7.042-10.941-12.494-19.07-16.376C77.803 3.957 68.496 2 58.036 2 47.591 2 38.37 4.023 30.347 8.06c-8.015 4.032-14.457 9.578-19.352 16.654-4.492 6.493-7.389 13.803-8.693 21.952h34.055c1.236-3.52 3.398-6.52 6.459-8.97 3.54-2.834 8.277-4.224 14.147-4.224 5.93 0 10.552 1.537 13.76 4.681 3.181 3.12 4.791 7.024 4.791 11.594 0 4.151-1.16 7.934-3.468 11.298-2.192 3.194-5.987 7.124-11.405 11.84L3.72 122.465V152z"></path>
            </svg>
            <img src="https://occ-0-2127-1740.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABe6U19pJ1HRcut6AIARUmDoDW_qdAeJlQ6FzqPkB_LtEzUDUDbtw2ZXQCFpZwNBURMikMHOHvIo8YvloVFz3Rz9BXCvbvUZrp8XiXU3f9DjWBfqQ-bIopMGyzV-BB-S0ktaLkvXhyTqhdNckr4wwN8vimpJZPC1c8NCk6dDGgPbCABKuir8NuHODQzNF0lL8KoATR_mwuKLR6rem3nCsBzXEmk8v1GTUfZemvjHE1w9KWS1vyqXlf2l8GJSrAR6KvVDCGxFon8mKxTDR_XP_wQn4ozReoJk8oHf7-2TYMTPT5hKYng.jpg?r=e75" alt="">
        </div>
    </section> -->
    <section>
        <footer>
            <div class="social-medias">
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-youtube-fill"></i></a>
            </div>
        </footer>
    </section>
    <script>
        document.addEventListener("scroll", function() {
            const header = document.querySelector(".header");
            const scrollPos = window.scrollY || document.documentElement.scrollTop;

            if (scrollPos > 50) {
                header.classList.remove("transparent");
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
                header.classList.add("transparent");
            }
        });
    </script>
</body>

</html>