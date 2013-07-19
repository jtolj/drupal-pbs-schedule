<div id="pbs-schedule-tonight-wrapper">
  <?php foreach ($channels as $channel): ?>
  <div class="pbs-schedule-tonight">
    <div class="pbs-schedule-on-tonight-channel"><?php echo $channel['name'] ?></div>
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