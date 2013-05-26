
<div id="top-wrapper">
  <div id="user-info">
    <?php
    global $user;
    print $user->name;
    ?>
    <a href="/admin/appearance/settings/admini" id="config-link"></a>
    <a href="/user/logout" id="exit-link"></a>
  </div>
  <div id="top-menu">
    <a href="/" id="home-link"></a>
    <?php
    $menu_array = menu_navigation_links('management', 1);
    print theme('links__management', array('links' => $menu_array));
    ?>
  </div>
</div>

<div id="page-wrapper">
  <div class='tabs clearfix'>
    <?php if ($primary_local_tasks): ?>
      <ul class='primary-tabs links clearfix'><?php print render($primary_local_tasks) ?></ul>
    <?php endif; ?>
  </div>

  <?php if ($messages): ?>
    <div id="console" class="clearfix"><?php print $messages; ?></div>
  <?php endif; ?>
  <?php if ($page['help']): ?>
    <div id="help">
      <?php print render($page['help']); ?>
    </div>
  <?php endif; ?>
  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  <?php print render($page['content']); ?>
</div>

