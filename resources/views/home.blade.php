<title>@lang('app.title')</title>

<x-home-layout>

    <header class="header" id="header">

        <!--==================== NAV ====================-->
        <nav class="nav container">
            <a href="#" class="nav__logo"><img src="{{ Storage::url('img/logo.png') }}" alt=""
                    srcset=""></a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link"><i
                                class="ri-home-5-line"></i>@lang('app.nav-home')</a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link"><i class="ri-trophy-line"></i>@lang('app.nav-skills')</a>
                    </li>

                    <li class="nav__item">
                        <a href="#projects" class="nav__link"><i class="ri-image-line"></i> @lang('app.nav-projects')</a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link"><i class="ri-chat-3-line"></i>@lang('app.nav-contact')</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{ route('posts.index') }}" class="nav__link"><i class="ri-newspaper-line"></i>
                            Blog</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{ route('home.' . Lang::get('app.lang')) }}" class="nav__link"><i
                                class="ri-translate"></i>@lang('app.lang')</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__buttons">
                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-4-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== HOME ====================-->
    <main class="main">
        <section class="home section" id="home">
            <div class="home__container container grid section__border">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://linkedin.com/in/yosbp" target="_blank" class="home__social-icon"><i
                                class="ri-linkedin-fill"></i></a>

                        <a href="https://github.com/yosbp" target="_blank" class="home__social-icon"><i
                                class="ri-github-fill"></i></a>

                        <a href="{{ Storage::url('CV-Yosmar-Barco-' . Lang::get('app.cv') . '.pdf') }}" target="_blank"
                            class="home__social-icon"><i class="ri-file-download-line"></i></a>
                    </div>


                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187">
                            <mask id="mask0" mask-type="alpha">
                                <path
                                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                  130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                  97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                  0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path
                                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                  165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                  129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                  -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />

                                <image class="home__blob-img" x="12" y="18"
                                    href="{{ Storage::url('img\profile.png') }}" />

                            </g>
                        </svg>
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">@lang('app.name')</h1>
                        <h3 class="home__subtitle">FullStack Developer</h3>
                        <p class="home__description">
                            @lang('app.description')
                        </p>
                        <a href="#contact" class="button button--flex">@lang('app.contact-title')<i
                                class="ri-send-plane-fill"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="skills section" id="skills">
            <h2 class="section__title">@lang('app.nav-skills')</h2>
            <span class="section__subtitle"></span>

            <div class="skills__container container grid section__border">
                <!--==================== SKILLS 1 ====================-->
                <div class="skills__content">
                    <h3 class="skills__title">
                        <i class="ri-braces-line"></i> Frontend Developer
                    </h3>

                    <div class="skills__info">
                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ Storage::url('img\html-1.svg') }}">
                            </div>

                            <h3 class="skills__name">HTML</h3>
                            <span class="skills__subtitle">@lang('app.skills-intermediate')</span>
                        </div>

                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ Storage::url('img\css-3.svg') }}">
                            </div>

                            <h3 class="skills__name">CSS</h3>
                            <span class="skills__subtitle">@lang('app.skills-intermediate')</span>
                        </div>

                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ Storage::url('img\logo-javascript.svg') }}">
                            </div>

                            <h3 class="skills__name">JavaScript</h3>
                            <span class="skills__subtitle">@lang('app.skills-intermediate')</span>
                        </div>

                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ Storage::url('img/vue.svg') }}">
                            </div>

                            <h3 class="skills__name">Vue</h3>
                            <span class="skills__subtitle">@lang('app.skills-intermediate')</span>
                        </div>

                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ Storage::url('img/git-icon.svg') }}">
                            </div>

                            <h3 class="skills__name">Git</h3>
                            <span class="skills__subtitle">@lang('app.skills-intermediate')</span>
                        </div>
                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ Storage::url('img/tailwind.svg') }}">
                            </div>

                            <h3 class="skills__name">UI Frams</h3>
                            <span class="skills__subtitle">@lang('app.skills-intermediate')</span>
                        </div>
                    </div>
                </div>

                <!--==================== SKILLS 2 ====================-->
                <div class="skills__content">
                    <h3 class="skills__title">
                        <i class="ri-braces-line"></i> Backend Developer
                    </h3>

                    <div class="skills__info">
                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ Storage::url('img/php.svg') }}">
                            </div>

                            <h3 class="skills__name">PHP</h3>
                            <span class="skills__subtitle">@lang('app.skills-intermediate')</span>
                        </div>

                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ Storage::url('img/mysql.svg') }}">
                            </div>

                            <h3 class="skills__name">MySQL</h3>
                            <span class="skills__subtitle">@lang('app.skills-intermediate')</span>
                        </div>

                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ Storage::url('img/api.svg') }}">
                            </div>

                            <h3 class="skills__name">Api Rest</h3>
                            <span class="skills__subtitle">@lang('app.skills-intermediate')</span>
                        </div>

                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ Storage::url('img/laravel.svg') }}">
                            </div>

                            <h3 class="skills__name">Laravel</h3>
                            <span class="skills__subtitle">@lang('app.skills-intermediate')</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <!--==================== PROYECTOS ====================-->

    <section class="projects section" id="projects">
        <h2 class="section__title">@lang('app.nav-projects')</h2>
        <span class="section__subtitle">@lang('app.projects-recent')</span>

        <div class="container section__border">
            <div class="projects__container carousel" data-flickity>

                <!--==================== PROYECTO 1 ====================-->
                <div class="projects__content carousel-cell">
                    <div class="projects__card">
                        <div class="projects__card-inner">
                            <div class="projects__card-front">
                                <img src="{{ Storage::url('img/proyecto1.JPG') }}" class="">
                            </div>
                            <div class="projects__card-back">
                                <p class="projects__card-title">@lang('app.projects-techs')</p>
                                <p>PHP Vanilla</p>
                                <p>HTML</p>
                                <p>CSS</p>
                                <p>JavaScript</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="projects__subtitle">Web</span>
                        <h1 class="projects__title">@lang('app.projects-realstate')</h1>
                        <a href="https://inmobiliaria.yosmarb.com/" class="projects__button" target="_blank">
                            @lang('app.projects-site') <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <!--==================== PROYECTO 2 ====================-->
                <div class="projects__content carousel-cell">
                    <div class="projects__card">
                        <div class="projects__card-inner">
                            <div class="projects__card-front">
                                <img src="{{ Storage::url('img/proyecto1.JPG') }}" class="">
                            </div>
                            <div class="projects__card-back">
                                <p class="projects__card-title">@lang('app.projects-techs')</p>
                                <p>Api - Laravel</p>
                                <p>Vue3</p>
                                <p>Tailwind</p>
                                <p>JavaScript</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="projects__subtitle">Web</span>
                        <h1 class="projects__title">@lang('app.projects-surveys')</h1>
                        <a href="https://yosbpworks.tech/" class="projects__button" target="_blank">
                            @lang('app.projects-site') <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <!--==================== PROYECTO 3 ====================-->
                <div class="projects__content carousel-cell">
                    <div class="projects__card">
                        <div class="projects__card-inner">
                            <div class="projects__card-front">
                                <img src="{{ Storage::url('img/proyecto3.JPG') }}" class="">
                            </div>
                            <div class="projects__card-back">
                                <p class="projects__card-title">@lang('app.projects-techs')</p>
                                <p>Vue3</p>
                                <p>Ant Design</p>
                                <p>Sass</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="projects__subtitle">Web</span>
                        <h1 class="projects__title">@lang('app.projects-admin')</h1>
                        <a href="https://dashboard.yosmarb.com/" class="projects__button" target="_blank">
                            @lang('app.projects-site') <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>


            </div>
    </section>

    <!--==================== CONTACTO ====================-->
    <section class="contact section" id="contact">
        <h2 class="section__title">@lang('app.contact-title')</h2>
        <span class="section__subtitle"></span>

        <div class="contact__container container grid section__border">
            <div class="contact__content">
                <h3 class="contact__title">
                    <i class="ri-chat-3-line"></i> @lang('app.contact-touch')
                </h3>

                <div class="contact__info">
                    <div class="contact__data">
                        <span class="contact__data-title">@lang('app.contact-mail')</span>
                        <span class="contact__data-info"><a href="mailto:hola@yosmarb.com">hola@yosmarb.com</a>
                        </span>
                    </div>

                    <div class="contact__data">
                        <span class="contact__data-title">Whatsapp</span>
                        <span class="contact__data-info">+58 42417266</span>
                        <a href="https://api.whatsapp.com/send?phone=584241417266&text=Hola!, necesito más información"
                            target="_blank" class="contact__button">
                            @lang('app.contact-text') <i class="ri-whatsapp-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact__content">
                <h3 class="contact__title">
                    <i class="ri-send-plane-line"></i> @lang('app.contact-need')
                </h3>

                <form action="" class="contact__form" id="contact-form">
                    <div class="contact__form-div">
                        <label class="contact__form-tag">@lang('app.contact-name')</label>
                        <input type="text" name="user_name" required
                            placeholder="{{ Lang::get('app.contact-form-name') }}" class="contact__form-input"
                            id="contact-name">
                    </div>

                    <div class="contact__form-div">
                        <label class="contact__form-tag">@lang('app.contact-mail')</label>
                        <input type="email" name="user_email" required
                            placeholder="{{ Lang::get('app.contact-form-mail') }}" class="contact__form-input"
                            id="contact-email">
                    </div>

                    <div class="contact__form-div contact__form-area">
                        <label class="contact__form-tag">@lang('app.contact-project')</label>
                        <textarea name="user_project" placeholder="{{ Lang::get('app.contact-form-project') }}" class="contact__form-input"
                            id="contact-project"></textarea>
                    </div>

                    <p class="contact__message" id="contact-message"></p>

                    <button type="submit" class="contact__button"> @lang('app.contact-send') <i
                            class="ri-arrow-right-up-line"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__container container">
            <h1 class="footer__title">Yosmar Barco</h1>
            <p>Fullstack Dev.</p>

            <ul class="footer__list">
                <li>
                    <a href="#home" class="footer__link">@lang('app.nav-home')</a>
                </li>
                <li>
                    <a href="#skills" class="footer__link">@lang('app.nav-skills')</a>
                </li>
                <li>
                    <a href="#projects" class="footer__link">@lang('app.nav-projects')</a>
                </li>
            </ul>

            <ul class="footer__social">
                <a href="https://linkedin.com/in/yosbp" target="_blank" class="footer__social-link">
                    <i class="ri-linkedin-box-line"></i>
                </a>

                <a href="https://github.com/yosbp" target="_blank" class="footer__social-link">
                    <i class="ri-github-line"></i>
                </a>
            </ul>
        </div>
    </footer>


</x-home-layout>
