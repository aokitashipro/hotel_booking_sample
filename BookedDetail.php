<?php
	require("header.php");
?>


<div id="wrap" class="">
	<div class="container">

		<h2 class="h2-responsive">予約内容の詳細</h2>


		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading"> ご予約の内容</div>
					<div class="panel-body">
					<i class="material-icons">date_range</i>日程: 2018年2月21日(水)〜2018年2月22日(木) 1泊<br><br>
					<i class="material-icons">person</i>予約者氏名:ナバック太郎<br><br>

					<i class="material-icons">description</i>宿泊プラン:バースデープラン<br><br>

					<i class="material-icons">hotel</i>宿泊部屋:スイート<br><br>

					<i class="material-icons">hotel</i>部屋数: 1室<br><br>

					<i class="material-icons">person</i>人数: おとな 2名 子ども 1名<br><br>

					<i class="material-icons">check</i>合計料金: 50,000円 (税込)<br><br>

					<i class="material-icons">add_circle_outline</i>付与ポイント：500pt<br><br>

					<i class="material-icons">remove</i>使用ポイント：10pt<br><br>

					</div>
			</div>
		</div>

	<div class="col-xs-4">
		<div id="rsv-change"><a href="#"><span class="btn btn-primary">予約内容変更</span></div>
	</a></div>

	<div class="col-xs-4">
		<div id="rsv-cancel"><a href="#"><span class="btn btn-warning">予約キャンセル</span></div>
	</a></div>

	<div class="col-xs-4">
		<div id="logout"><a href="index.php"><span class="btn btn-link">ログアウト</span></a></div>
	</div>

	</div>
</div>

</div>


<?php require('footer.php'); ?>
