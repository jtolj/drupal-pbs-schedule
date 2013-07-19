<div id="tv-schedule">
  <div id="date-time-options">
    <select id="day-selector">
    <?php for ($i=-15;$i<16;$i++): ?>
      <?php $this_day = strtotime('+' . $i . 'days') ?>
      <option value="<?php echo date('Ymd', $this_day) ?>"
      <?php
      if ((!empty($_GET['date']) && date('Ymd', $this_day) === $_GET['date'])
      ||
      ((empty($_GET['date']) || preg_match('/^(20)\d\d(0[1-9]|1[012])(0[1-9]|[12][0-9]|3[01])$/', $_GET['date']) == FALSE) && $i === 0 ))
      echo 'selected="selected"'
      ?>>
        <?php if ($i === -1){echo "Yesterday";}else if ($i === 0){echo "Today";}else{echo date('D, M jS', $this_day );} ?>
      </option>
    <?php endfor ?>
    </select>
    <select id="time-selector">
      <option value="00" <?php if (!empty($_GET['time']) && $_GET['time'] === '00') echo 'selected="selected"' ?>>Midnight</option>
      <option value="01" <?php if (!empty($_GET['time']) && $_GET['time'] === '01') echo 'selected="selected"' ?>>1am</option>
      <option value="02" <?php if (!empty($_GET['time']) && $_GET['time'] === '02') echo 'selected="selected"' ?>>2am</option>
      <option value="03" <?php if (!empty($_GET['time']) && $_GET['time'] === '03') echo 'selected="selected"' ?>>3am</option>
      <option value="04" <?php if (!empty($_GET['time']) && $_GET['time'] === '04') echo 'selected="selected"' ?>>4am</option>
      <option value="05" <?php if (!empty($_GET['time']) && $_GET['time'] === '05') echo 'selected="selected"' ?>>5am</option>
      <option value="06" <?php if (!empty($_GET['time']) && $_GET['time'] === '06') echo 'selected="selected"' ?>>6am</option>
      <option value="07" <?php if (!empty($_GET['time']) && $_GET['time'] === '07') echo 'selected="selected"' ?>>7am</option>
      <option value="08" <?php if (!empty($_GET['time']) && $_GET['time'] === '08') echo 'selected="selected"' ?>>8am</option>
      <option value="09" <?php if (!empty($_GET['time']) && $_GET['time'] === '09') echo 'selected="selected"' ?>>9am</option>
      <option value="10" <?php if (!empty($_GET['time']) && $_GET['time'] === '10') echo 'selected="selected"' ?>>10am</option>
      <option value="11" <?php if (!empty($_GET['time']) && $_GET['time'] === '11') echo 'selected="selected"' ?>>11am</option>
      <option value="12" <?php if (!empty($_GET['time']) && $_GET['time'] === '12') echo 'selected="selected"' ?>>Noon</option>
      <option value="13" <?php if (!empty($_GET['time']) && $_GET['time'] === '13') echo 'selected="selected"' ?>>1pm</option>
      <option value="14" <?php if (!empty($_GET['time']) && $_GET['time'] === '14') echo 'selected="selected"' ?>>2pm</option>
      <option value="15" <?php if (!empty($_GET['time']) && $_GET['time'] === '15') echo 'selected="selected"' ?>>3pm</option>
      <option value="16" <?php if (!empty($_GET['time']) && $_GET['time'] === '16') echo 'selected="selected"' ?>>4pm</option>
      <option value="17" <?php if (!empty($_GET['time']) && $_GET['time'] === '17') echo 'selected="selected"' ?>>5pm</option>
      <option value="18" <?php if (!empty($_GET['time']) && $_GET['time'] === '18') echo 'selected="selected"' ?>>6pm</option>
      <option value="19" <?php if (!empty($_GET['time']) && $_GET['time'] === '19') echo 'selected="selected"' ?>>7pm</option>
      <option value="20" <?php if (!empty($_GET['time']) && $_GET['time'] === '20') echo 'selected="selected"' ?>>8pm</option>
      <option value="21" <?php if (!empty($_GET['time']) && $_GET['time'] === '21') echo 'selected="selected"' ?>>9pm</option>
      <option value="22" <?php if (!empty($_GET['time']) && $_GET['time'] === '22') echo 'selected="selected"' ?>>10pm</option>
      <option value="23" <?php if (!empty($_GET['time']) && $_GET['time'] === '23') echo 'selected="selected"' ?>>11pm</option>
    </select>
    <input id="date-time-submit" type="submit" value="Go"/>
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
    <ul class="times">
      <li id="start-time-0000">12:00 am</li>
      <li id="start-time-0030">12:30 am</li>
      <li id="start-time-0100">1:00 am</li>
      <li id="start-time-0130">1:30 am</li>
      <li id="start-time-0200">2:00 am</li>
      <li id="start-time-0230">2:30 am</li>
      <li id="start-time-0300">3:00 am</li>
      <li id="start-time-0330">3:30 am</li>
      <li id="start-time-0400">4:00 am</li>
      <li id="start-time-0430">4:30 am</li>
      <li id="start-time-0500">5:00 am</li>
      <li id="start-time-0530">5:30 am</li>
      <li id="start-time-0600">6:00 am</li>
      <li id="start-time-0630">6:30 am</li>
      <li id="start-time-0700">7:00 am</li>
      <li id="start-time-0730">7:30 am</li>
      <li id="start-time-0800">8:00 am</li>
      <li id="start-time-0830">8:30 am</li>
      <li id="start-time-0900">9:00 am</li>
      <li id="start-time-0930">9:30 am</li>
      <li id="start-time-1000">10:00 am</li>
      <li id="start-time-1030">10:30 am</li>
      <li id="start-time-1100">11:00 am</li>
      <li id="start-time-1130">11:30 am</li>
      <li id="start-time-1200">12:00 pm</li>
      <li id="start-time-1230">12:30 pm</li>
      <li id="start-time-1300">1:00 pm</li>
      <li id="start-time-1330">1:30 pm</li>
      <li id="start-time-1400">2:00 pm</li>
      <li id="start-time-1430">2:30 pm</li>
      <li id="start-time-1500">3:00 pm</li>
      <li id="start-time-1530">3:30 pm</li>
      <li id="start-time-1600">4:00 pm</li>
      <li id="start-time-1630">4:30 pm</li>
      <li id="start-time-1700">5:00 pm</li>
      <li id="start-time-1730">5:30 pm</li>
      <li id="start-time-1800">6:00 pm</li>
      <li id="start-time-1830">6:30 pm</li>
      <li id="start-time-1900">7:00 pm</li>
      <li id="start-time-1930">7:30 pm</li>
      <li id="start-time-2000">8:00 pm</li>
      <li id="start-time-2030">8:30 pm</li>
      <li id="start-time-2100">9:00 pm</li>
      <li id="start-time-2130">9:30 pm</li>
      <li id="start-time-2200">10:00 pm</li>
      <li id="start-time-2230">10:30 pm</li>
      <li id="start-time-2300">11:00 pm</li>
      <li id="start-time-2330">11:30 pm</li>
    </ul>
    <?php foreach ($channels as $channel): ?>
    <div class="listings-wrapper">
      <ul class="listings">
      <?php foreach ($channel['listings'] as $listing): ?>
        <li style="width: <?php echo $listing['width'] ?>px" class="duration-<?php echo $listing['duration']; echo (!empty($listing['last'])) ? ' last' : '' ?>"><span><?php echo $listing['title'] ?></span></li>
      <?php endforeach ?>
      </ul>
    </div>
    <?php endforeach; ?>
  </div>
</div>