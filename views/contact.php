<section class="contact">
  <div class="contact__links">
    <div>
      <h1 id="js-contact-title">Contacte moi !</h1>
    </div>
    <div class="contact__mean">
      <ul>
        <li><?= links("Redshark61", "https://github.com/Redshark61", "github") ?></li>
        <li><?= links("tim.vannier@gmail.com", "#", "mail") ?></li>
        <li><?= links("Timothée Vannier", "https://www.linkedin.com/in/timothée-vannier-19150b238/", "linkedin") ?></li>
        <li><?= links("TimotheeVannier", "https://twitter.com/TimotheeVannier", "twitter") ?></li>
      </ul>
    </div>
  </div>

  <div class="contact__mail text">
    <div class="container">
      <h3 class="subtitle">Tu as un petit message ?</h3>
      <form action="">
        <div class="form__group">
          <label for="mail" class="label">Ton mail</label>
          <input type="email" id="mail" name="mail" placeholder="Ton mail">
        </div>
        <div class="form__group">
          <label for="subject" class="label">Le sujet du message</label>
          <input type="text" id="subject" name="subject" placeholder="Le sujet">
        </div>
        <div class="form__group">
          <label for="message" class="label">Ton message</label>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <button type="button" id="js-send-mail" class="button button--pink button--center">Envoyer !</button>
      </form>
    </div>
  </div>
</section>