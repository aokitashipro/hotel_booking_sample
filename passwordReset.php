<?php
	require("header.php");
?>


<div id="wrap" class="">
	<div class="container">

		<h2 class="h2-responsive">新しいパスワードを入力してください</h2>

		<div class="row">
			<div class="col-xs-12">
			<div class="input-field">
				<i class="material-icons prefix">lock_outline</i>
				<input id="login_password1" type="text" class="validate">
				<label for="login_password1">パスワード</label>
			</div>

			念のため、再度入力してください。
			<div class="input-field">
				<i class="material-icons prefix">lock_outline</i>
				<input id="login_password2" type="text" class="validate">
				<label for="login_password2">パスワード</label>
			</div>

		</div>
	</div>

<div class="row">
	<div class="col-xs-12">
		<div id="rsv-next"><span class="btn btn-default btn-lg btn-block register02">新しいパスワードを設定する</span></div>
	</div>
</div>

</div>
</div>


<?php require('footer.php'); ?>
