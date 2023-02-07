<title>Yosmar B. Portfolio</title>

<x-home-layout>

    <header class="header" id="header">

      <!--==================== NAV ====================-->
        <nav class="nav container">
          <a href="#" class="nav__logo"><img src="{{Storage::url('img/logo.png')}}" alt="" srcset=""></a>
    
          <div class="nav__menu" id="nav-menu">
            <ul class="nav__list grid">
              <li class="nav__item">
                <a href="#home" class="nav__link active-link"><i class="ri-home-5-line"></i>Inicio</a>
              </li>
    
              <li class="nav__item">
                <a href="#skills" class="nav__link"><i class="ri-trophy-line"></i> Habilidades</a>
              </li>
    
              <li class="nav__item">
                <a href="#projects" class="nav__link"><i class="ri-image-line"></i> Proyectos</a
                >
              </li>
    
              <li class="nav__item">
                <a href="#contact" class="nav__link"><i class="ri-chat-3-line"></i> Contacto</a>
              </li>

              <li class="nav__item">
                <a href="{{route('posts.index')}}" class="nav__link"><i class="ri-chat-3-line"></i> Blog</a>
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
                <a href="https://linkedin.com/in/yosbp" target="_blank" class="home__social-icon"><i class="ri-linkedin-fill"></i></a>
                
                <a href="https://github.com/yosbp" target="_blank" class="home__social-icon"><i class="ri-github-fill"></i></a>
    
                <a href="#CV" class="home__social-icon"><i class="ri-profile-line"></i></a>
              </div>
              
    
              <div class="home__img">
                <svg class="home__blob" viewBox="0 0 200 187">
                  <mask id="mask0" mask-type="alpha">
                    <path
                      d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                  130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                  97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                  0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                    />
                  </mask>
                  <g mask="url(#mask0)">
                    <path
                      d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                  165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                  129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                  -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                    />
                    <!--==================== 
                    <image class="home__blob-img" x="12" y="18" href="./img/perfil.png"/>
                                  ====================-->
                  </g>
                </svg>
              </div>
    
              <div class="home__data">
                <h1 class="home__title">Hola, Soy Yosmar</h1>
                <h3 class="home__subtitle">FullStack developer</h3>
                <p class="home__description">
                  Puedo gestionar su proyecto de la A a la Z, ocupándome de toda la implementación técnica y parte del proceso creativo.
                </p>
                <a href="#contact" class="button button--flex">Contáctame<i class="ri-send-plane-fill"></i></a>
              </div>
            </div>
          </div>
        </section>
    
        <section class="skills section" id="skills">
          <h2 class="section__title">Habilidades</h2>
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
                              <img src="{{Storage::url('img\html-1.svg')}}">
                          </div>
    
                          <h3 class="skills__name">HTML</h3>
                          <span class="skills__subtitle">Intermedio</span>
                      </div>
    
                      <div class="skills__data">
                          <div class="skills__blob">
                              <img src="{{Storage::url('img\css-3.svg')}}" >
                          </div>
    
                          <h3 class="skills__name">CSS</h3>
                          <span class="skills__subtitle">Intermedio</span>
                      </div>
    
                      <div class="skills__data">
                          <div class="skills__blob">
                              <img src="{{Storage::url('img\logo-javascript.svg')}}">
                          </div>
    
                          <h3 class="skills__name">JavaScript</h3>
                          <span class="skills__subtitle">Intermedio</span>
                      </div>
    
                      <div class="skills__data">
                          <div class="skills__blob">
                              <img src="{{Storage::url('img/react-2.svg')}}">
                          </div>
    
                          <h3 class="skills__name">React</h3>
                          <span class="skills__subtitle">Básico</span>
                      </div>
    
                      <div class="skills__data">
                          <div class="skills__blob">
                              <img src="{{Storage::url('img/git-icon.svg')}}">
                          </div>
    
                          <h3 class="skills__name">Git</h3>
                          <span class="skills__subtitle">Intermedio</span>
                      </div>
                      <div class="skills__data">
                          <div class="skills__blob">
                              <img src="{{Storage::url('img/bootstrap.svg')}}">
                          </div>
    
                          <h3 class="skills__name">Bootstrap</h3>
                          <span class="skills__subtitle">Intermedio</span>
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
                              <img src="{{Storage::url('img/php.svg')}}">
                          </div>
    
                          <h3 class="skills__name">PHP</h3>
                          <span class="skills__subtitle">Intermedio</span>
                      </div>
    
                      <div class="skills__data">
                          <div class="skills__blob">
                              <img src="{{Storage::url('img/mysql.svg')}}">
                          </div>
    
                          <h3 class="skills__name">MySQL</h3>
                          <span class="skills__subtitle">Intermedio</span>
                      </div>
    
                      <div class="skills__data">
                          <div class="skills__blob">
                              <img src="{{Storage::url('img/api.svg')}}">
                          </div>
    
                          <h3 class="skills__name">Api Rest</h3>
                          <span class="skills__subtitle">Intermedio</span>
                      </div>
    
                      <div class="skills__data">
                          <div class="skills__blob">
                              <img src="{{Storage::url('img/laravel.svg')}}">
                          </div>
    
                          <h3 class="skills__name">Laravel</h3>
                          <span class="skills__subtitle">Intermedio</span>
                      </div>
    
                  </div>
              </div>
          </div>
      </section>
    
      </main>
    
       <!--==================== PROYECTOS ====================-->
      <section class="projects section" id="projects">
        <h2 class="section__title">Proyectos</h2>
        <span class="section__subtitle">Trabajos más recientes</span>
    
        <div class="container section__border">
            <div class="projects__container swiper">
                <div class="swiper-wrapper">
                    <!--==================== PROYECTO 1 ====================-->
                    <div class="projects__content swiper-slide">
                      
                        <img src="{{Storage::url('img/proyecto1.JPG')}}" class="projects__img">
    
                        <div>
                            <span class="projects__subtitle">Web</span>
                            <h1 class="projects__title">Página Inmobiliaria</h1>
                            <a href="/inmobiliaria" class="projects__button">
                                Ir al sitio <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
      </section>
    
       <!--==================== CONTACTO ====================-->
      <section class="contact section" id="contact">
        <h2 class="section__title">Contáctame</h2>
        <span class="section__subtitle"></span>
    
        <div class="contact__container container grid section__border">
            <div class="contact__content">
                <h3 class="contact__title">
                    <i class="ri-chat-3-line"></i> Mantente en contacto
                </h3>
    
                <div class="contact__info">
                    <div class="contact__data">
                        <span class="contact__data-title">Correo</span>
                        <span class="contact__data-info">imyosbp@gmail.com</span>
                    </div>
    
                    <div class="contact__data">
                        <span class="contact__data-title">Whatsapp</span>
                        <span class="contact__data-info">+58 42417266</span>
                        <a href="https://api.whatsapp.com/send?phone=584241417266&text=Hola!, necesito más información" target="_blank" class="contact__button">
                            Escribeme <i class="ri-whatsapp-line"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="contact__content">
              <h3 class="contact__title">
                <i class="ri-send-plane-line"></i> Escribeme lo que necesites
              </h3>
    
              <form action="" class="contact__form" id="contact-form">
                <div class="contact__form-div">
                  <label class="contact__form-tag">Nombre</label>
                  <input type="text" name="user_name" required placeholder="Ingresa tu nombre" class="contact__form-input" id="contact-name">
                </div>
    
                <div class="contact__form-div">
                  <label class="contact__form-tag">Correo</label>
                    <input type="email" name="user_email" required placeholder="Ingresa tu correo" class="contact__form-input" id="contact-email">
                </div>
    
                <div class="contact__form-div contact__form-area">
                  <label class="contact__form-tag">Proyecto</label>
                  <textarea name="user_project" placeholder="Hablame acerca de tu proyecto" class="contact__form-input" id="contact-project"></textarea>
                </div>
    
                <p class="contact__message" id="contact-message"></p>
    
                <button type="submit" class="contact__button"> Enviar <i class="ri-arrow-right-up-line"></i>
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
                    <a href="#home" class="footer__link">Home</a>
                </li>
                <li>
                    <a href="#skills" class="footer__link">Habilidades</a>
                </li>
                <li>
                    <a href="#projects" class="footer__link">Proyectos</a>
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


