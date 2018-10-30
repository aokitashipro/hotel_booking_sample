<?php
	require("header.php");
?>


<div id="wrap" class="">
	<div class="container">

		<h2 class="h2-responsive">会員パスワードの再発行</h2>

		会員登録時のメールアドレスを入力してください。<br>
		入力されたメールアドレスに、パスワードリセットのURLを送付いたしますので、<br>
		届いたURLより新しいパスワードの設定をお願い致します。<br>


			<div class="row mgb20">
				<div class="input-field col-md-12">
					<i class="material-icons prefix">mail</i>
					<input id="icon_email" type="email" class="validate">
					<label for="icon_email" data-error="メールアドレスを入力してください" data-success="OK">メールアドレス</label>
				</div>
			</div>




<div class="row">
	<div class="col-xs-12">
		<div id="rsv-next"><span class="btn btn-default btn-lg btn-block register02">パスワードをリセットする</span></div>
	</div>
</div>

</div>
</div>


<?php require('footer.php'); ?>
