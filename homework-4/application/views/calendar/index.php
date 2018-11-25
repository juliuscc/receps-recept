<?php echo $navbar; ?>

<header class="header header--simple">
	<h1 class="header__title header__title--dark">Calendar</h1>
</header>

<div class="calendar-section">
	<h2 class="calendar-section__title">December 2018</h2>
	<table class="calendar">
		<thead class="calendar__weekdays">
			<tr class="calendar__weekdays-row">
				<th class="calendar__weekday">Mon</th>
				<th class="calendar__weekday">Tue</th>
				<th class="calendar__weekday">Wed</th>
				<th class="calendar__weekday">Thu</th>
				<th class="calendar__weekday">Fri</th>
				<th class="calendar__weekday">Sat</th>
				<th class="calendar__weekday">Sun</th>
			</tr>
		</thead>
		<tbody class="calendar__body">
<?php foreach ($cal_weekdays as $week): ?>
			<tr class="calendar__week-row">

<?php foreach ($week as $day): ?>
				<td class="calendar__day <?php if ($day['disabled']) {
    echo 'calendar__day--disabled';
}?>">
					<div class="calendar__day-lable"><?php echo $day['day'] ?></div>
<?php
    if (!$day['disabled']) {
        if ($day['day'] === 5) {
            echo '<a href="' . site_url('/recipes/pancakes') . '"><img class="calendar__day-image" src="/assets/images/blur-close-up-dairy-product-407041.jpg" alt="pancakes"></a>';
        } elseif ($day['day'] === 22) {
            echo '<a href="' . site_url('/recipes/meatballs') . '"><img class="calendar__day-image" src="/assets/images/emiliano-vittoriosi-703094-unsplash.jpg" alt="meatballs"></a>';
        }
    }
?>
				</td>
<?php endforeach; ?>
			</tr>
<?php endforeach; ?>
		</tbody>
	</table>
</div>