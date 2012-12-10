<div id="pbs-schedule-tonight-wrapper">
  <?php foreach ($channels as $channel): ?>
  <div class="pbs-schedule-tonight">
    <strong><?php echo $channel['name'] ?></strong>
    <ul>
      <?php foreach ($channel['listings'] as $listing) : ?>
        <li>
          <span class="listing-time"><?php echo $listing['start_time'] ?></span>
          <span class="listing-title"><?php echo $listing['title'] ?></span>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
  <?php endforeach ?>
</div>