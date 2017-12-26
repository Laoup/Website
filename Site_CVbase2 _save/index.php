<!DOCTYPE html>
<html>

    <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="CSS/home.min.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="CSS/main.min.css" type="text/css" media="screen" />
      <title>Alban-Meurice</title>
    </head>

    <body>
      <section class="splashscreen" style="display:none;">
        <div>
          <h1>Alban Meurice</h1>
          <h3>Dévellopeur Web - Freelance</h3>
        </div>
        <div class="profil">
          <img src="RESSOURCES/Lego-Starwars-icon.png"/>
        </div>
        <div class="school">
          <img src="RESSOURCES/book.png"/>
        </div>
        <div class="exp">
          <img src="RESSOURCES/work.png"/>
        </div>
        <div class="contact">
          <img src="RESSOURCES/email.png"/>
        </div>
      </section>

      <section class="who" style="display:none;">
        <img src="RESSOURCES/cross1.png" class="close-cross" alt="close page" />
        <article>
          <div class="image"><div class="image_cache"></div></div>
          <div class="rubrique">
            <h2>Qui Suis-je ?</h2>
            <div>
              <div>
                <img src="RESSOURCES/albanProfil.jpg" alt="photo de profil"/>
              </div>
              <div>
                <p>Actuellement je suis étudiant d'Epitech Paris en 3ème année et auto-entrepreneur.<br/>
J'ai des connaissances dans le domaine du web, connaissances que j'ai acquises au travers de différents projets aussi bien professionnel que personnel.<br/>
J'ai nottament travaillé au CNRS au sein du laboratoire APC. J'ai aussi refait le site internet de la start-up Coding Days, ainsi que donné des cours de HTML/CSS au sein de cette même start-up.<br/>
Durant ces 3 dernières années a l'école j'ai aussi appris les langages C et C++.
Ces derniers temps, je travaille mes compétences de web développeur. Par exemple j'apprends le ReactJs pour pouvoir mener a bien mon projet de fin d'études(EIP).<br/>
Cette année je travaille aussi mon anglais pour pouvoir partir l'année prochaine dans un pays étranger.<br/>
Je suis curieux, travailleur et tous les domaines du développement sont suceptibles de m'intérésser. J'aimerai acquérir des compétences dans des domaines qui ne me sont pas familliers, Sécurité, BigData, Algorythmie, Modélisation3D ...<br/>
                </p>
                <p>
                  Dans la vie, mis a part l'informatique je suis aussi un féru d'histoire, notamment de l'antiquité.
                  De pars mon âge et ma génération, j'ai aussi une réel culture du jeu vidéo, bien que je n'y joue plus trop aujourd'hui.<br/>
                  Je suis aussi un joueur de poker ocasionnel et un passioné des voyages a pieds.
                  Je passe aussi beaucoup de temps à lire, bien que l'orthographe me fasse parfois défault.
                </p>
              </div>
            </div>
            <h2>Mes Compétences</h2>
            <img src="RESSOURCES/Next-arrow.png" alt="next"/>
          </div>
        </article>
      </section>

      <section class="cv" style="">
        <img src="RESSOURCES/cross1.png" class="close-cross" alt="close page" />
        <article>
          <div class="image"><div class="image_cache"></div></div>
          <div class="rubrique">
            <h2>Quel est mon parcours ?</h2>
            <div>
              <div>
                <h4>2013-2014</h4>
                <p>Baccalauréat STI2D (Sciences et Technologies de l'industrie et du dévéloppement durable). Mention Bien.</p>
              </div>
              <div>
                <h4>2014-2017</h4>
                <p>EPITECH Paris (Ecole pour l'informatique et les nouvelles technologies).</p>
              </div>
              <!--<div>
                <h4>Aout-Decembre 2015</h4>
                <p>Stage développeur Web laboratoire APC (CNRS/PARIS).</p>
              </div>-->
              <div>
                <h4>Octobre-Novembre 2016</h4>
                <p>Assistant pédagogique à l'ETNA (Groupe IONIS).</p>
              </div>
              <div>
                <h4>Décembre 2016-Mars 2017</h4>
                <p>Stage temps partiel développeur WEB au FACe (CNRS/PARIS).</p>
              </div>
              <div>
                <h4>Avril 2017-Aout 2017</h4>
                <p>Développeur Web CodingDays (Start-up).</p>
              </div>
            </div>
          </div>
        </article>
      </section>

      <section class="mail_me" style="display:none;">
        <img src="RESSOURCES/cross1.png" class="close-cross" alt="close page" />
        <article>
          <div class="image"><div class="image_cache"></div></div>
          <div class="rubrique">
            <h2>Contactez moi !</h2>
            <form action="mailFunc.php" name="envoi" method="post">
              <label>Nom</label>
                <input name="nom" maxlength="50" />
              <label>Prénom</label>
                <input name="prenom" maxlength="50" />
              <label>Email</label>
                <input name="mail" type="email" maxlength="50" />
              <label>Expliquez moi ce que vous souhaitez:</label>
                <textarea name="message" cols="120" rows="10"></textarea>
              <input class="submit_button" type="submit" value="Envoyer" name="Envoyer">
            </form>
          </div>
        </article>
      </section>

    </body>
</html>
