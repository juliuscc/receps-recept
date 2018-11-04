<?php
$cookbook = simplexml_load_file("resources/cookbook.xml");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
    include("components/head.php");
    write_header("Food Calendar | Receps Recept");
?>
</head>

<body>
<?php
    include("components/navbar.php");
    write_navbar(1, "");
?>
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
				<tr class="calendar__week-row">
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">26</div>
					</td>
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">27</div>
					</td>
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">28</div>
					</td>
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">29</div>
					</td>
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">30</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">1</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">2</div>
					</td>
				</tr>
				<tr class="calendar__week-row">
					<td class="calendar__day">
						<div class="calendar__day-lable">3</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">4</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">5</div>
						<a href="/recipe_page.php?recipe_index=1"><img class="calendar__day-image" src="<?php echo $cookbook->recipe[1]->imageurl; ?>" alt="<?php echo $cookbook->recipe[1]->title; ?>"></a>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">6</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">7</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">8</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">9</div>
					</td>
				</tr>
				<tr class="calendar__week-row">
					<td class="calendar__day">
						<div class="calendar__day-lable">10</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">11</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">12</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">13</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">14</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">15</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">16</div>
					</td>
				</tr>
				<tr class="calendar__week-row">
					<td class="calendar__day">
						<div class="calendar__day-lable">17</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">18</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">19</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">20</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">21</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">22</div>
						<a href="/recipe_page.php?recipe_index=0"><img class="calendar__day-image" src="<?php echo $cookbook->recipe[0]->imageurl; ?>" alt="<?php echo $cookbook->recipe[0]->title; ?>"></a>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">23</div>
					</td>
				</tr>
				<tr class="calendar__week-row">
					<td class="calendar__day">
						<div class="calendar__day-lable">24</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">25</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">26</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">27</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">28</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">29</div>
					</td>
					<td class="calendar__day">
						<div class="calendar__day-lable">30</div>
					</td>
				</tr>
				<tr class="calendar__week-row">
					<td class="calendar__day">
						<div class="calendar__day-lable">31</div>
					</td>
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">1</div>
					</td>
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">2</div>
					</td>
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">3</div>
					</td>
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">4</div>
					</td>
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">5</div>
					</td>
					<td class="calendar__day calendar__day--disabled">
						<div class="calendar__day-lable">6</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

</body>

</html>