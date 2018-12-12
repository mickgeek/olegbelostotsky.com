<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/base-min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css" />
    <link rel="stylesheet" href="/statics/styles.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <img src="https://avatars3.githubusercontent.com/u/8091481?s=100" alt="A young man." class="portrait" />

        <div class="resume">
          <h2>Oleg Belostotsky</h2>
          software engineer, music lover & dreamer
        </div>

        <nav>
          <a
            href="mailto:olegbelostotsky@gmail.com"
            class="social-link"
          ><img src="/statics/super-tiny-icons/email.svg" alt="An envelope picture." /></a>
          <a
            href="https://github.com/mickgeek"
            target="_blank"
            rel="nofollow"
            class="social-link"
          ><img src="/statics/super-tiny-icons/github.svg" alt="The GitHub logo." /></a>
          <a
            href="https://stackoverflow.com/users/8428933/"
            target="_blank"
            rel="nofollow"
            class="social-link"
          ><img src="/statics/super-tiny-icons/stackoverflow.svg" alt="The Stack Overflow logo." /></a>
          <a
            href="https://www.instagram.com/olegbelostotsky/"
            target="_blank"
            rel="nofollow"
            class="social-link"
          ><img src="/statics/super-tiny-icons/instagram.svg" alt="The Instagram logo." /></a>
          <a
            href="https://vk.com/olegbelostotsky"
            target="_blank"
            rel="nofollow"
            class="social-link"
          ><img src="/statics/super-tiny-icons/vk.svg" alt="The VK logo." /></a>
          …
          <a
            href="https://soundcloud.com/ohmybro"
            target="_blank"
            rel="nofollow"
            class="social-link"
          ><img src="/statics/super-tiny-icons/soundcloud.svg" alt="The SoundCloud logo." /></a>
          <a
            href="https://vk.com/ohmybro"
            target="_blank"
            rel="nofollow"
            class="social-link"
          ><img src="/statics/super-tiny-icons/vk.svg" alt="The VK logo." /></a>

          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/posts">Posts</a></li>
          </ul>
        </nav>
      </header>

      <main>
        <?= $content ?>
      </main>

      <footer>👽</footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>
