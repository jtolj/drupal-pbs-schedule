<div class="pbs-schedule-detail-wrapper">
  <?php if (empty($is_ajax)) : ?>
    <h5><?php echo $program_title ?></h5>
  <?php endif ?>
  <h6><?php echo $episode_title ?></h6>
  <div class="pbs-schedule-detail-ep-description"><?php echo $episode_description?></div>
  <div class="pbs-schedule-detail-pg-description"><?php echo $program_description?></div>
  <?php if (!empty($upcoming_airdates)) : ?>
    <div class="pbs-schedule-detail-upcoming">
      <h6>Upcoming Airdates:</h6>
      <ul>
        <?php foreach ($upcoming_airdates as $episode): ?>
          <li>
            <span class="upcoming-time"><?php echo $episode['time'] ?></span> on 
            <span class="upcoming-channel"><?php echo $episode['channel'] ?></span>
            <span class="upcoming-gcal"><?php echo $episode['gcal'] ?></span>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  <?php endif ?> 
</div>