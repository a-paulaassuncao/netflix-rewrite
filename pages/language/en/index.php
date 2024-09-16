<!DOCTYPE html>
<html lang="en">
<?php render_view('_layout.head') ?>

<body>
    <main>
        <div class="header-language">
            <div class="language">
                <div class="left-language">
                    <img class="logo-marca" src="/assets/img/logo.png" alt="brand-logo">
                </div>
                <div class="right-language">
                    <div class="lg">
                        <div class="select-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="16" height="16" viewBox="0 0 16 16" role="img" data-icon="LanguagesSmall" aria-hidden="true">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7668 5.33333L10.5038 5.99715L9.33974 8.9355L8.76866 10.377L7.33333 14H9.10751L9.83505 12.0326H13.4217L14.162 14H16L12.5665 5.33333H10.8278H10.7668ZM10.6186 9.93479L10.3839 10.5632H11.1036H12.8856L11.6348 7.2136L10.6186 9.93479ZM9.52722 4.84224C9.55393 4.77481 9.58574 4.71045 9.62211 4.64954H6.41909V2H4.926V4.64954H0.540802V5.99715H4.31466C3.35062 7.79015 1.75173 9.51463 0 10.4283C0.329184 10.7138 0.811203 11.2391 1.04633 11.5931C2.55118 10.6795 3.90318 9.22912 4.926 7.57316V12.6667H6.41909V7.51606C6.81951 8.15256 7.26748 8.76169 7.7521 9.32292L8.31996 7.88955C7.80191 7.29052 7.34631 6.64699 6.9834 5.99715H9.06968L9.52722 4.84224Z" fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="selector">
                            <select name="LanguageSelect">
                                <option lang="pt" label="Portuguese" value="pt-BR">Portuguese</option>
                                <option lang="en" label="English" value="en-BR" selected="">English</option>
                            </select>
                        </div>
                    </div>
                    <div class="login">
                        <button type="button">
                            <a href="">Sign In</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section>
        <div class="container">
            <div class="elemento-login">
                <div class="static">
                    <div id="title">Movies, TV shows and more, without limits</div>
                    <div id="subtitle">Starting from $20.90. Cancel anytime.</div>
                    <div id="span-title">
                        Want to watch? Enter your email to create or restart your membership.
                    </div>
                    <div class="email">
                        <input type="text" placeholder="Email">
                        <button type="button">
                            <a href="">
                                Let's Go
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>