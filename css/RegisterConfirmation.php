<?php
	require("header.php");
?>


<div id="wrap" class="">
	<div class="container">

		<h4 class="responsive">予約内容の確認</h4>

		ご予約時のメールアドレスと予約No.を入力してください。

		<div class="row">
			<div class="col-xs-12">
			<div class="input-field">
				<i class="material-icons prefix">mail</i>
				<input id="login_email" type="text" class="validate">
				<label for="login_email">メールアドレス</label>
			</div>


			<div class="input-field">
				<i class="material-icons prefix">check</i>
				<input id="login_reserveNo" type="text" class="validate">
				<label for="login_reserveNo">予約No.</label>
			</div>

		</div>
	</div>

<div class="row">
	<div class="col-xs-12">
		<div id="rsv-next"><a href="BookedDetail.php"><span class="btn btn-default btn-lg btn-block register02">予約内容を確認する</span></a></div>
	</div>
</div>

</div>
</div>


<?php require('footer.php'); ?>
