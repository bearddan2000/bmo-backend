<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

  </div>

  <footer class="footer">
    <a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>

    BeMo Academic Consulting Inc. All rights reserved. <br/>
    <a href="#">Disclaimer &amp; Privacy Policy</a>
    <a href="contact-us.html">Contact Us</a>
  </footer>

</body>
</html>
