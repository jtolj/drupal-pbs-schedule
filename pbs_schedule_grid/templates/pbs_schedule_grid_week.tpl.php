Channels:
<div id="channel-selector">
<a href="#" id="wcve-hdtv">WCVE HD</a>
<a href="#" id="wcve-create">WCVE Create</a>
<a href="#" id="wcve-mhz-worldview">WCVE Worldview</a>
<a href="#" id="wcvw-hdtv">WCVW HD</a>
</div>
<div id="tv-schedule-weekly">
  <ul class="times-vertical">
      <h3>Times</h3>
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
    <?php for ($i=0;$i<7;$i++) :?>
      <ul class="listings-vertical">
        <h3><?php echo date('D m/d',$dates[$i]) ?></h3>
        <?php foreach ($listings[$i] as $day): ?>
          <?php foreach ($day as $channel): ?>
            <span class="<?php echo strtolower(str_replace(' ', '-', strip_tags($channel['name']))) ?>">
            <?php foreach ($channel['listings'] as $listing): ?>
               <li style="height:<?php echo 150 * (round($listing['duration']/5)*5/30) + (round($listing['duration']/5)*5/30 - 1) * 15 ?>px;" class="<?php echo strtolower(str_replace(' ', '-', strip_tags($channel['name']))) ?>"><?php echo $listing['title'] ?></li>
            <?php endforeach ?>
            </span>
          <?php endforeach ?>
        <?php endforeach ?>
      </ul>
    <?php endfor ?>
</div>