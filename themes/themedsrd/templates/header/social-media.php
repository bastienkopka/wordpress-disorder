<ul class="social-media">
  <?php if (get_theme_mod('facebook_setting')) : ?>
    <li>
      <a href="<?= get_theme_mod('facebook_setting'); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
    </li>
  <?php endif; ?>
  <?php if (get_theme_mod('twitch_setting')) : ?>
    <li>
      <a href="<?= get_theme_mod('twitch_setting'); ?>" target="_blank"><i class="fa-brands fa-twitch"></i></a>
    </li>
  <?php endif; ?>
  <?php if (get_theme_mod('youtube_setting')) : ?>
    <li>
      <a href="<?= get_theme_mod('youtube_setting'); ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a>
    </li>
  <?php endif; ?>
  <?php if (get_theme_mod('tiktok_setting')) : ?>
    <li>
      <a href="<?= get_theme_mod('tiktok_setting'); ?>" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
    </li>
  <?php endif; ?>
  <?php if (get_theme_mod('discord_setting')) : ?>
    <li>
      <a href="<?= get_theme_mod('discord_setting'); ?>" target="_blank"><i class="fa-brands fa-discord"></i></a>
    </li>
  <?php endif; ?>
</ul>