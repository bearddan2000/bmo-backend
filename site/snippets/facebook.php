<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */

// seperate our facebook ad url so its easier to chg

 $ad_host = "docker-getkirby.localhost";
 $ad_source = "utm_source=facebook";
 $ad_medium = "utm_medium=paidsocial";
 $ad_content = "utm_content=buynow";
 $ad_campaign = "utm_campaign=summerfun";

// assemble the pieces

 $ad_url = "https://" . $ad_host . "/?";
 $ad_url .= $ad_source;
 $ad_url .= "&" . $ad_medium;
 $ad_url .= "&" . $ad_content;
 $ad_url .= "&" . $ad_campaign;
?>

<a href="<?=$ad_url?>">
  <img class="banner" src="<?php echo u() . '/assets/fb-ad.png'; ?>" alt="Facebook ad">
</a>
