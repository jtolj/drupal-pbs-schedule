<div class="pbs-schedule-detail-wrapper">
  <?php if (empty($is_ajax)) : ?>
    <h3><?php echo $program_title ?></h3>
  <?php endif ?>
  <?php if (!empty($episode_title)) : ?>
    <h3><?php echo $episode_title ?></h3>
  <?php endif ?>
  <div class="pbs-schedule-detail-ep-description"><?php echo $episode_description?></div>
  <div class="pbs-schedule-detail-pg-description"><?php echo $program_description?></div>
  <?php if (!empty($upcoming_airdates)) : ?>
    <div class="pbs-schedule-detail-upcoming">
      <strong>Upcoming Airdates:<strong>
      <ul>
        <?php foreach ($upcoming_airdates as $episode): ?>
          <li>
            <span class="upcoming-time"><?php echo $episode['time'] ?></span> on 
            <span class="upcoming-channel"><?php echo $episode['channel'] ?></span>
            <span class="upcoming-gcal"><?php echo l('Add to Google Calendar', $episode['gcal_url'], array('attributes' => array('target' => '_blank'))) ?></span>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  <?php endif ?> 
</div>