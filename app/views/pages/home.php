
<header class="container">
  <button id="toggle-header-nav" class="hamburger hamburger--collapse" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>

  <div id="header-logo">
    <img src="./images/logo-jp.png" alt="Julien Paris" />
    <h1>Julien Paris</h1>
  </div>

  <nav id="header-navigation">
    <ul>
      <li><a href="#about">Qui-suis-je ?</a></li>
      <li><a href="#skills">Mes compétences</a></li>
      <li><a href="#projects">Mes projets</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>

    <div id="header-nav-footer">
      <p>Made with <span class="heart">❤</span> by Julien Paris</p>
      <p>
        <a href="https://www.linkedin.com/in/julien-paris34/" target="_blank"><img src="./images/social/linkedin-in.svg"
            alt="Julien Paris linkedin" /></a>
        <a href="https://twitter.com/JulienParis13" target="_blank"><img src="./images/social/twitter.svg" alt="Julien Paris twitter" /></a>
        <a href="https://github.com/parisjulien" target="_blank"><img src="./images/social/github.svg" alt="Julien Paris github" /></a>
      </p>
    </div>
  </nav>
</header>

<main>
  <section id="top-page">
    <div class="container">
      <div id="top-page-content">
        <h2>
          Vous avez un projet<br>
          et vous avez besoin d'un <strong>développeur freelance</strong> ?
        </h2>
        <p>Ne cherchez plus je suis le <strong>freelance</strong> qu'il vous faut !</p>
      </div>
    </div>
  </section>

  <div class="container">
    <section id="about">
      <h3>Je suis un <strong>développeur freelance</strong> passionné</h3>

      <p>
        Je m'appelle Julien Paris, j'ai 21 ans et je suis développeur depuis l'age de 16 ans.
        J'ai commencé par créer des sites web au départ pour mon premier site personnel
        et de fil en aiguille, je me suis passionné de la programmation.
        J'adore expérimenter, découvrir et apprendre au fur et à mesure de mes différents projets
        personnels et professionnels.
      </p>
    </section>
  </div>

  <section id="skills">
    <div class="container">
      <h3>Voici ce que je sais faire</h3>
    </div>

    <section id="skills-web">
      <div class="container">
        <h4>Je développe des <strong>sites web</strong>...</h4>
  
        <div id="skills-container">
          <div class="skills-item">
            <img src="./images/skills/html.png" alt="Julien Paris html5">
            <p>HTML5</p>
          </div>
  
          <div class="skills-item">
            <img src="./images/skills/css.png" alt="Julien Paris css3">
            <p>CSS3</p>
          </div>
  
          <div class="skills-item">
            <img src="./images/skills/javascript.png" alt="Julien Paris Javascript">
            <p>JavaScript ES6</p>
          </div>
  
          <div class="skills-item">
            <img style="width: 142px;" src="./images/skills/nodejs.png" alt="Julien Paris NodeJs">
            <p>NodeJs</p>
          </div>
  
          <div class="skills-item">
            <img src="./images/skills/php.png" alt="Julien Paris PHP">
            <p>PHP 7</p>
          </div>
  
          <div class="skills-item">
            <img src="./images/skills/vuejs.png" alt="Julien Paris VueJs">
            <p>VueJs</p>
          </div>
  
          <div class="skills-item">
            <img src="./images/skills/angular.png" alt="Julien Paris Angular">
            <p>Angular</p>
          </div>
        </div>
      </div>
    </section>

    <section id="skills-app">
      <div class="container">
        <h4>Je conçois des <strong>applications lourdes</strong>...</h4>
    
        <div id="skills-container">
          <div class="skills-item">
            <img src="./images/skills/csharp.svg" alt="Julien Paris csharp">
              <p>C#</p>
            </div>
      
            <div class="skills-item">
              <img src="./images/skills/electronjs.png" alt="Julien Paris Electron">
              <p>ElectronJs</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>

  <section id="projects">
    <div class="container">
      <h4>Un aperçu de mes projets</h4>

      <div id="projects-filter">
        <button class="is-active">Tous</button>
        <!-- <button>Développement web</button>
        <button>Applications lourdes</button> -->
      </div>

      <div id="projects-container">
        <div class="project-item" style="background: url('./images/projects/project-beonyxcms.png') no-repeat center center;">
          <a href="#" class="is-leave-to-top">
            Beonyx CMS
            <small>Développement web</small>
          </a>
        </div>

        <div class="project-item" style="background: url('./images/projects/project-gitesmontplaisir.png') no-repeat top center;">
          <a href="#" class="is-leave-to-left">
            Gîtes Montplaisir
            <small>Développement web</small>
          </a>
        </div>

        <div class="project-item" style="background: url('./images/projects/project-bellaharmonie.png') no-repeat top center;">
          <a href="#" class="is-leave-to-left">
            BellaHarmonie
            <small>Développement web</small>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <h3>Vous voulez me contacter ?</h3>

      <form id="contact-form" method="POST" action="">
        <div class="groupFields">
          <div class="formField">
            <label for="frmFullname">Votre nom :</label>
            <input type="text" required id="frmFullname" name="frmFullname" placeholder="Julien Paris..." />
          </div>
  
          <div class="formField">
            <label for="frmEmail">Votre email :</label>
            <input type="text" required id="frmEmail" name="frmEmail" placeholder="contact@parisjulien.fr" />
            <p class="formFieldMessage">L'email doit être sous cette forme : contact@domaine.fr</p>
          </div>
        </div>

        <div class="formField">
          <label for="frmSubject">Sujet du mail :</label>
          <input type="text" required id="frmSubject" name="frmSubject" placeholder="Demande de création de site web..." />
        </div>

        <div class="formField">
          <label for="frmMessage">Votre message :</label>
          <textarea required id="frmMessage" name="frmMessage" placeholder="Demande de création de site web..."></textarea>
        </div>

        <button type="submit">Envoyer</button>
      </form>
    </div>
  </section>
</main>

<a id="arrow-up" href="#top-page"><img src="./images/arrow-up.svg" alt="arrow up"></a>

<footer>
  <p id="footer-copy">© Tout droits réservés - Julien Paris</p>
  <p>
    <a href="https://www.linkedin.com/in/julien-paris34/" target="_blank"><img src="./images/social/linkedin-in-color.svg" alt="Julien Paris linkedin" /></a>
    <a href="https://twitter.com/JulienParis13" target="_blank"><img src="./images/social/twitter-color.svg" alt="Julien Paris twitter" /></a>
    <a href="https://github.com/parisjulien" target="_blank"><img src="./images/social/github-color.svg" alt="Julien Paris github" /></a>
  </p>
</footer>