<div id="tv-schedule">
  <div id="day-selector">
    <select>
    <?php for ($i=-15;$i<16;$i++): ?>
      <?php $this_day = strtotime('+' . $i . 'days') ?>
      <option value="<?php echo date('Ymd', $this_day) ?>" <?php if ((!empty($_GET['date']) && date('Ymd', $this_day) === $_GET['date']) || (empty($_GET['date']) && $i === 0 )) echo 'selected="selected"' ?>>
        <?php if ($i === -1){echo "Yesterday";}else if ($i === 0){echo "Today";}else{echo date('D, M jS', $this_day );} ?>
      </option>
    <?php endfor ?>
    </select>
    <input type="submit" value="Go"/>
  </div>
  <div id="station-list">
    <?php foreach ($channels as $channel): ?>
      <h3><?php echo $channel['name'] ?></h3>
    <?php endforeach; ?>
  </div>
  <div id="controls">
    <a class="prev" href="#"><</a>
    <a class="next" href="#">></a>
  </div>
  <div id="tv-schedule-scroll-container">
    <ul class="times"><?php //TODO - make this static html ?>
      <?php for ($time = strtotime('01-01-2001 00:00');$time < strtotime('01-01-2001 23:59');$time+=1800): ?>
          <li id="start-time-<?php echo date('Hi', $time) ?>"><?php echo date('g:i a',$time) ?></li>
      <?php endfor ?>
    </ul>
    <?php foreach ($channels as $channel): ?>
    <div class="listings-wrapper">
      <ul class="listings">
      <?php foreach ($channel['listings'] as $listing): ?>
        <li class="duration-<?php echo $listing['duration']; echo (!empty($listing['last'])) ? ' last' : '' ?>"><span><?php echo $listing['title'] ?></span></li>
      <?php endforeach ?>
      </ul>
    </div>
    <?php endforeach; ?>
  </div>
</div>