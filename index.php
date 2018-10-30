<?php
	require("header.php");
	require("slider.php");
?>
<div id="wrap" class="">
	<article>
		<div class="container">

<?php
			require("search.php");
?>

			<div id="tabs">
				<ul class="nav nav-tabs tabs-5">
					<li class="active"><a data-toggle="tab" href="#select_room">部屋</a></li>
					<li><a data-toggle="tab" href="#select_plan">プラン</a></li>
					<li><a data-toggle="tab" href="#select_other">こだわり</a></li>
				</ul>
			</div>
			<!-- <div class="tab-content card-panel blue-grey lighten-5"> -->
			<div class="tab-content lighten-5">
				<div id="select_room" class="tab-pane fade in active">
					<article>
						<div class="row mgb30">
							<div class="col-md-6 col-xs-12 mgb20">
								<!--Image Card-->
								<div class="card hoverable">
									<div class="card-image">
										<div class="view overlay hm-white-slight z-depth-1">
											<img src="img/img600360.jpg" class="img-responsive" alt="">
											<a href="roomWithoutPlan.php"><div class="mask waves-effect"></div></a>
										</div>
									</div>
									<div class="card-content">
										<h3 class="h3-responsive">和モダンスタンダード</h3>
										<div class="ft14">
											<i class="material-icons">wifi</i>
											<i class="material-icons">credit_card</i>
											<i class="material-icons">smoke_free</i>
											<i class="material-icons">local_parking</i>
											<i class="material-icons">hotel</i>ツイン
										</div>
										<div class="ft120p">
											<!-- <p class="text-left"> -->
											それぞれ異なるデザインのリビングとお風呂。<br>
											プライベートな時間がゆったりと流れます。<br>
											<!-- </p> -->
										</div>
									</div>
									<!--Buttons-->
									<!-- <div class="card-btn text-right"> -->
									<div class="card-btn">
										<div class="width90p">
											<div class="mgb10">特別企画【12月1月WEB限定】お得に泊まるアニバーサリープラン</div>
											<i class="material-icons">restaurant</i> 朝食 夕食
											<div class="text-right">
												<div class="ft24 inline"><b>40,000</b></div> 円 / 人 (税込)
											</div>
										</div>
										<div class="text-right">
											<a href="room.php" class="btn btn-link btn-md waves-effect waves-light">詳しくみる</a>
											<a href="registration.php" class="btn btn-default btn-md waves-effect waves-light">予約へすすむ</a>
										</div>

										<div class="width90p">
											<div class="mgb10">特別企画【12月1月WEB限定】お得に泊まるアニバーサリープラン</div>
											<i class="material-icons">restaurant</i> 朝食 夕食
											<div class="text-right">
												<div class="ft24 inline"><b>40,000</b></div> 円 / 人 (税込)
											</div>
										</div>
										<div class="text-right">
											<a href="room.php" class="btn btn-link btn-md waves-effect waves-light">詳しくみる</a>
											<a href="registration.php" class="btn btn-default btn-md waves-effect waves-light">予約へすすむ</a>
										</div>


										<div class="panel-group">
											<div class="panel panel-default">
												<div class="panel-heading">
													<div class="panel-title ft11 text-center">
														<a data-toggle="collapse" href="#collapse1">他のプランをみる  <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
													</div>
												</div>
												<div id="collapse1" class="panel-collapse collapse">
													<div class="panel-body">
														2日間限定！大切な人と素敵な夜を過ごす★クリスマスプラン★<br>
														<i class="material-icons">restaurant</i> 朝食 夕食
														<div class="text-right"><b>35,000</b> 円 / 人 (税込)</div>
														<div class="text-right"><a class="btn btn-link btn-sm" href="room.php">詳しくみる</a>
														<a href="registration.php" class="btn btn-default btn-sm waves-effect waves-light">予約へすすむ</a></div>
													</div>
													<div class="panel-body">
														【ベーシックプラン】大切な人と過ごす癒しのひとときを<br>
														<i class="material-icons">restaurant</i> 朝食 夕食
														<div class="text-right"><b>30,000</b> 円 / 人 (税込)</div>

													<div class="text-right">
														<a class="btn btn-link btn-sm" href="room.php">詳しくみる</a><a href="registration.php" class="btn btn-default btn-sm waves-effect waves-light">予約へすすむ</a>
													</div>
												</div>
												</div>
											</div>
										</div>

									</div><!--/.Buttons-->
								</div><!--Image Card-->
							</div><!-- col -->
							<div class="col-md-6 col-xs-12 mgb20">
								<!--Image Card-->
								<div class="card hoverable">
									<div class="card-image">
										<div class="view overlay hm-white-slight z-depth-1">
											<img src="img/img600360-2.jpg" class="img-responsive" alt="">
											<a href="#"><div class="mask waves-effect"></div></a>
										</div>
									</div>
									<div class="card-content">
										<h3 class="h3-responsive">和モダンスーペリア</h3>
										<p class="font-s text-left">
											特徴1<br>特徴2<br>特徴3
										</p>
									</div>
									<!--Buttons-->
									<div class="card-btn text-right">
										<!-- <a href="#" class="btn btn-primary btn-md waves-effect waves-light">Read more</a> -->
										<a href="#" class="btn btn-default btn-md waves-effect waves-light">予約へすすむ</a>
									</div>
									<!--/.Buttons-->

									<div class="panel-group">
										<div class="panel panel-default">
											<div class="panel-heading">
												<div class="panel-title ft11 text-center">
													<a data-toggle="collapse" href="#collapse2">他のプランをみる  <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
												</div>
											</div>
											<div id="collapse2" class="panel-collapse collapse">
												<div class="panel-body">
													2日間限定！大切な人と素敵な夜を過ごす★クリスマスプラン★<br>
													<i class="material-icons">restaurant</i> 朝食 夕食
													<div class="text-right"><b>35,000</b> 円 / 人 (税込)</div>
													<div class="text-right"><a class="btn btn-link btn-sm" href="room.php">詳しくみる</a>
													<a href="registration.php" class="btn btn-default btn-sm waves-effect waves-light">予約へすすむ</a></div>
												</div>
												<div class="panel-body">
													【ベーシックプラン】大切な人と過ごす癒しのひとときを<br>
													<i class="material-icons">restaurant</i> 朝食 夕食
													<div class="text-right"><b>30,000</b> 円 / 人 (税込)</div>

												<div class="text-right">
													<a class="btn btn-link btn-sm" href="room.php">詳しくみる</a><a href="registration.php" class="btn btn-default btn-sm waves-effect waves-light">予約へすすむ</a>
												</div>
											</div>
											</div>
										</div>
									</div>

								</div>
								<!--Image Card-->
							</div><!-- col -->
						</div><!-- row -->
						<div class="row">
							<div class="col-md-4 col-xs-12  mgb20">
								<!--Image Card-->
								<div class="card hoverable heightLine">
									<div class="card-image">
										<div class="view overlay hm-white-slight z-depth-1">
											<img src="img/img051.jpg" class="img-responsive" alt="">
											<a href="#"><div class="mask waves-effect"></div></a>
										</div>
									</div>
									<div class="card-content">
										<h3 class="h3-responsive">和モダンスイート</h3>
										<div class="ft120p">
											<!-- <p class="text-left"> -->
											それぞれ異なるデザインのリビングとお風呂。<br>
											プライベートな時間がゆったりと流れます。<br>
											<!-- </p> -->
										</div>
									</div>
									<!--Buttons-->
									<div class="card-btn text-right">

										<!-- <a href="#" class="btn btn-primary btn-md waves-effect waves-light">Read more</a> -->
										<a href="room.php" class="btn btn-link btn-md waves-effect waves-light">詳しくみる</a>
									</div>
									<!--/.Buttons-->
								</div>
								<!--Image Card-->
							</div>
							<div class="col-md-4 col-xs-12 mgb20">
								<!--Image Card-->
								<div class="card hoverable heightLine">
									<div class="card-image">
										<div class="view overlay hm-white-slight z-depth-1">
											<img src="img/img050.jpg" class="img-responsive" alt="">
											<a href="#"><div class="mask waves-effect"></div></a>
										</div>
									</div>
									<div class="card-content">
										<h3 class="h3-responsive">はなれスイート</h3>
										<p class="font-s text-left">特徴1<br>特徴2<br>特徴3</p>
									</div>
									<!--Buttons-->
									<div class="card-btn text-right">
										<!-- <a href="#" class="btn btn-primary btn-md waves-effect waves-light">Read more</a> -->
										<a href="room.php" class="btn btn-link btn-md waves-effect waves-light">詳しくみる</a>
									</div>
									<!--/.Buttons-->
								</div>
								<!--Image Card-->
							</div><!-- col -->
							<div class="col-md-4 col-xs-12 mgb20">
								<!--Image Card-->
								<div class="card hoverable heightLine">
									<div class="card-image">
										<div class="view overlay hm-white-slight z-depth-1">
											<img src="img/img600360-2.jpg" class="img-responsive" alt="">
											<a href="#"><div class="mask waves-effect"></div></a>
										</div>
									</div>
									<div class="card-content">
										<h3 class="h3-responsive">和モダンスーペリア</h3>
										<p class="font-s text-left">特徴1<br>特徴2<br>特徴3</p>
									</div>
									<!--Buttons-->
									<div class="card-btn text-right">
										<!-- <a href="#" class="btn btn-primary btn-md waves-effect waves-light">Read more</a> -->
										<a href="room.php" class="btn btn-link btn-md waves-effect waves-light">詳しくみる</a>
									</div>
									<!--/.Buttons-->
								</div>
								<!--Image Card-->
							</div><!-- col -->
						</div><!--row-->
					</article>
				</div><!-- id:select_room -->
				<div id="select_plan" class="tab-pane fade">
					<article>
						<div class="row mgb20">
							<div class="col-md-6 col-xs-12">
								<!--Image Card-->
								<div class="card hoverable">
									<div class="card-image">
										<div class="view overlay hm-white-slight z-depth-1">
											<img src="img/img030.jpg" class="img-responsive" alt="">
											<a href="plan.php"><div class="mask waves-effect"></div></a>
										</div>
									</div>
									<div class="card-content">
										<h3 class="h3-responsive">2日間限定！大切な人と素敵な夜を過ごす★クリスマスプラン★</h3>
										<i class="material-icons">restaurant</i> 朝食 夕食
										<div class="ft120p">
											<!-- <p class="text-left"> -->
											それぞれ異なるデザインのリビングとお風呂。<br>
											プライベートな時間がゆったりと流れます。<br>
											<!-- </p> -->
										</div>
									</div>
									<!--Buttons-->
									<div class="card-btn">
										<div class="width100p">
											<div class="width80p text-left mgb10">
												和モダンスーペリア
												<div class="ft14">
													<i class="material-icons">wifi</i>
													<i class="material-icons">credit_card</i>
													<i class="material-icons">smoke_free</i>
													<i class="material-icons">local_parking</i>
													<i class="material-icons">hotel</i>ツイン
												</div>
											</div>
											<div class="width20p text-right"><div class="ft20">40,000</div> 円 / 人 (税込)</div>
											<div>
												<div class="text-right"><a href="plan.php" class="btn btn-link btn-md waves-effect waves-light">詳しくみる</a><a href="registration.php" class="btn btn-default btn-md waves-effect waves-light">予約へすすむ</a></div>
											</div>
										</div>
										<div class="panel-group">
											<div class="panel panel-default">
												<div class="panel-heading">
													<div class="panel-title ft11 text-center">
														<a data-toggle="collapse" href="#collapse3">他の部屋をみる  <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
													</div>
												</div>

											<div id="collapse3" class="panel-collapse collapse">
												<div class="panel-body">
													和モダンスタンダード<br>
													<div class="ft14">
														<i class="material-icons">wifi</i>
														<i class="material-icons">credit_card</i>
														<i class="material-icons">smoke_free</i>
														<i class="material-icons">local_parking</i>
													</div>
													<b>35,000</b> 円 / 人 (税込)
													<div class="text-right">
														<a class="btn btn-link btn-sm">詳しくみる</a>
														<a href="registration.php" class="btn btn-default btn-sm waves-effect waves-light">予約へすすむ</a>
														</div>
												</div>
												<div class="panel-body">
													スイートルーム<br>
													<div class="ft14">
														<i class="material-icons">wifi</i>
														<i class="material-icons">credit_card</i>
														<i class="material-icons">smoke_free</i>
														<i class="material-icons">local_parking</i>
													</div>
													<b>30,000</b> 円 / 人 (税込)
												<div class="text-right">
													<a href="plan.php" class="btn btn-link btn-sm">詳しくみる</a>
												<a href="registration.php" class="btn btn-default btn-sm waves-effect waves-light">予約へすすむ</a>
												</div>
											</div><!-- panel body -->
										</div><!-- collapse -->

										</div>
											</div>
										</div>
									<!--/.Buttons-->
								</div>
								<!--Image Card-->
							</div>
							<div class="col-md-6 col-xs-12">
								<!--Image Card-->
								<div class="card hoverable">
									<div class="card-image">
										<div class="view overlay hm-white-slight z-depth-1">
											<img src="img/img031.jpg" class="img-responsive" alt="">
											<a href="plan.php"><div class="mask waves-effect"></div></a>
										</div>
									</div>
									<div class="card-content">
										<h3 class="h3-responsive">特別企画【12月1月WEB限定】お得に泊まるアニバーサリープラン</h3>
										<div class="height-m"></div>
										<i class="material-icons">restaurant</i> 朝食 夕食
										<p class="font-s text-left">特徴1<br>特徴2<br>特徴3</p>
									</div>
									<!--Buttons-->
									<div class="card-btn text-right">
										<!-- <a href="#" class="btn btn-primary btn-md waves-effect waves-light">Read more</a> -->
										<a href="#" class="btn btn-default btn-md waves-effect waves-light">予約へすすむ</a>
									</div>
									<!--/.Buttons-->
								</div>
								<!--Image Card-->
							</div>
						</div><!--row-->
						<div class="row">
							<div class="col-md-4 col-xs-12">
								<!--Image Card-->
								<div class="card hoverable">
									<div class="card-image">
										<div class="view overlay hm-white-slight z-depth-1">
											<img src="img/img600360.jpg" class="img-responsive" alt="">
											<a href="http://yahoo.co.jp"><div class="mask waves-effect"></div></a>
										</div>
									</div>
									<div class="card-content">
										<h3 class="h3-responsive">【ベーシックプラン】大切な人と過ごす癒しのひとときを</h3>
										<i class="material-icons">restaurant</i> 朝食 夕食
										<div class="ft120p">
											<!-- <p class="text-left"> -->
											それぞれ異なるデザインのリビングとお風呂。<br>
											プライベートな時間がゆったりと流れます。<br>
											<!-- </p> -->
										</div>
									</div>

									<!--Buttons-->
									<div class="card-btn text-right">
										<b>20,000</b> 円 / 人 (税込)
										<!-- <a href="#" class="btn btn-primary btn-md waves-effect waves-light">Read more</a> -->
										<a href="#" class="btn btn-link btn-md waves-effect waves-light">詳しくみる</a>
									</div>
									<!--/.Buttons-->

								</div>
								<!--Image Card-->
							</div>
							<div class="col-md-4 col-xs-12">
								<!--Image Card-->
								<div class="card hoverable">
									<div class="card-image">
										<div class="view overlay hm-white-slight z-depth-1">
											<img src="img/img600360-2.jpg" class="img-responsive" alt="">
											<a href="#"><div class="mask waves-effect"></div></a>
										</div>
									</div>
									<div class="card-content">
										<h3 class="h3-responsive">【連泊プラン】ゆったり過ごすお得な連泊プラン</h3>
										<i class="material-icons">restaurant</i> 朝食 夕食
										<p class="font-s text-left">特徴1<br>特徴2<br>特徴3</p>
									</div>
									<!--Buttons-->
										<div class="card-btn text-right">
											<!-- <a href="#" class="btn btn-primary btn-md waves-effect waves-light">Read more</a> -->
											<a href="#" class="btn btn-link btn-md waves-effect waves-light">詳しくみる</a>
										</div>
									<!--/.Buttons-->
								</div>
								<!--Image Card-->
							</div>
						</div><!--row-->
					</article>
				</div>
				<div id="select_other" class="tab-pane fade">
					<article>
						<br>
						<h5>こだわり</h5>
						<p><a href="table.php">空室一覧のリンクもここでいい？</a><br>
							<a href="roomAvailable.php">空室検索のリンクもここでいい？</a><br>
						安い順、おすすめ順、グループ、レディース、食事あり、食事なし などで絞り込み検索をする予定。<br>

					他のページ<br>
					<a href="memberRegistration.php">会員登録</a><br>
					<a href="forgotPassword.php">パスワード再発行メール</a><br>
				  <a href="passwordReset.php">パスワード再設定</a><br>
					<a href="bookedHistory.php">宿泊履歴</a><br>
					<a href="RegisterConfirmation.php">予約内容の確認</a>


				</p>
					</article>
				</div>
			</div>

			<div class="mgb20"></div>
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading"><i class="fa fa-check" aria-hidden="true"></i> お客様へのお知らせ</div>
						<div class="panel-body">2018年2月はxxxx出展のため、xxxxにておもてなしをさせていただきます。</div>
				</div>
				</div>
			</div>

		</div><!-- container -->
	</article>
</div>


</div>
<?php require('footer.php'); ?>
