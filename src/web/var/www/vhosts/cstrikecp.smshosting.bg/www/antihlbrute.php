<?php require_once('../templates/header.php'); ?>
<div class="container-fluid">
		<div class="content">
				<?php require_once('./includes/etc/header-stats.php');  ?>		
			<div class="row-fluid">
				<div class="span12">
							<div class="alert alert-info alert-block">
								<a href="#" data-dismiss="alert" class="close">×</a>
  								<h4 class="alert-heading">Информация!</h4>
								<b>Anti HL Brute</b> е система която предпазва вашият сървър от случайни ботове които сканират вашият сървър и опитват да отгатнат RCON паролата чрез Brute Force атака. Въпреки, че сървъра има автоматични ограничения за сгрешена RCON парола това не помага когато опитите идват от множество ИП адреси. По принцип ако имате силна RCON парола не би трябвало да може да се отгатне, но можете допълнително да подсигурите данните на вашият сървър чрез тази добавка.</b>
							</div>	
							<?php if ($_SESSION['ftp'] != 2) { ?>							

							<?php if ($_SESSION['mode'] == 1) { ?>
							За да активирате Anti HL Brute системата на вашия сървър трябва да имате активиран мод към вашия сървър. Това можете да направите <a href="/mode">тук</a>.
								<?php
								}
								else {
								?>							
						<?php
								if ($_SESSION['antihlbrute'] == 0) { ?>							
					<div class="box">
						<div class="box-head">
							<h3>Активация на Anti HLBrute система</h3>
						</div>
						<div class="box-content">
										<form action="/submit/antihlbrute.php" method="POST">
										<input type="hidden" name="antihlbrute_activate" />
										
										<br />							
										
										<div style="text-align: center;">
										<div class="error-box alert alert-block alert-danger" style="display: none;">Важно съобщение</div>
								<img src="/img/loading.gif" id="img_loading" alt="Зареждане, моля изчакайте... (Ако до две минути тази картинка не е изчезнала това означава че има някакъв проблем с услугата. Свържете се незабавно с нашия екип." />
										<input class="navigation_button btn btn-primary" type="submit" value="Активирай Anti HLBrute" />
										</div>
										</form>
										<br />

						</div>
					</div>
								<?php 
									}
									elseif ($_SESSION['antihlbrute'] == 1) {
								?>	
				<div class="box">	
							<div class="box-head tabs">
								<h3>Статус</h3>
							</div>						
						<div class="box-content box-nomargin">
<div style="text-align: center;">Anti HLBrute системата е активна.
<br /><br />
								<form action="/submit/antihlbrute_pause.php" method="POST">
								<input class="navigation_button btn btn-primary"  type="submit" value="Паузирай Anti HLBrute" />
								<div class="error-box alert alert-block alert-danger" style="display: none;">Важно съобщение</div>
								<img src="/img/loading.gif" id="img_loading" alt="Зареждане, моля изчакайте... (Ако до две минути тази картинка не е изчезнала това означава че има някакъв проблем с услугата. Свържете се незабавно с нашия екип." />

								</form>
</div>


								
<?php } else { ?>
				<div class="box">	
							<div class="box-head tabs">
								<h3>Статус</h3>
							</div>						
						<div class="box-content box-nomargin">
<div style="text-align: center;">Системата Anti HLBrute е паузирана. Можете да я стартирате към вашия сървър отново.<br /><br />
										
										<form action="/submit/antihlbrute_unpause.php" method="POST">
										<input class="navigation_button btn btn-primary"  type="submit" value="Стартирай Anti HLBrute" />
										<div class="error-box alert alert-block alert-danger" style="display: none;">Важно съобщение</div>
										<img src="/img/loading.gif" id="img_loading" alt="Зареждане, моля изчакайте... (Ако до две минути тази картинка не е изчезнала това означава че има някакъв проблем с услугата. Свържете се незабавно с нашия екип." />

										</form>
</div>



<?php } ?>		
								
								
								<?php		
								}
								?>	
								<?php } else { ?>
				Тази функция не е налична поради пълният FTP достъп към сървъра.
			<?php } ?>								
				</div>
			</div>			
		</div>	
	</div>
<?php require_once('../templates/footer.php'); ?>