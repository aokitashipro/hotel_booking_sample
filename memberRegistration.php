<?php
	require("header.php");
	require("slider.php");

?>


<div id="wrap" class="">
	<div class="container">

		<h2 class="h2-responsive"> 会員情報入力</h2>

		<form>
		<div class="row">
				<div class="input-field col-md-6">
			 	 <i class="material-icons prefix">account_circle</i>
			 	 <input id="first_name" type="text" class="validate">
			 	 <label for="first_name">姓</label>
			  </div>
        <div class="input-field col-md-6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">名</label>
        </div>

		</div>

		<div class="row mgb20">
				<div class="input-field col-md-6">
					<i class="material-icons prefix">account_circle</i>
					<input id="first_name_sei" type="text" class="validate">
					<label for="first_name_sei">セイ</label>
				</div>

			<div class="input-field col-md-6">
					<input id="last_name_mei" type="text" class="validate">
					<label for="last_name_mei">メイ</label>
				</div>
			</div>

			<div class="row mgb20">
				<div class="input-field col-md-12">
					<i class="material-icons prefix">mail</i>
					<input id="icon_email" type="email" class="validate">
					<label for="icon_email" data-error="メールアドレスを入力してください" data-success="OK">メールアドレス</label>
				</div>
			</div>

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


		<div class="row mgb20">
			<div class="input-field col-md-12">
				<i class="material-icons prefix">phone</i>
				<input id="icon_telephone" type="tel" class="validate">
				<label for="icon_telephone">連絡先</label>
			</div>
		</div>


		<div class="row mgb30">
			<div class="input-field col-md-3 col-xs-6">
				<i class="material-icons prefix">location_on</i>
				<input id="icon_postalcode" type="text" class="validate">
				<label for="icon_postalcode">郵便番号</label>
			</div>
			<div class="input-field col-xs-12">
				<i class="material-icons prefix">location_on</i>
				<input id="icon_address" type="text" class="validate">
				<label for="icon_address">住所</label>
			</div>
		</div>


<div class="row mgb20">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				お支払い方法
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-6">
							<input class="flat" type="radio" name="iCheck1">現金決済
					</div>
					<div class="col-xs-6">
						  <input class="flat" type="radio" name="iCheck1">事前カード決済
					</div>
				</div>
				カード情報の登録は可能？
			</div>
		</div>
	</div>
</div>


<div class="mgb20"></div>
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-body">

				<div class="register01">
						<input class="flat" type="checkbox" name="iCheck11" id="iCheck11" checked>  お知らせメールやサンキューメールを受信します。
				</div>

				<div class="register01">
						<input class="flat" type="checkbox" name="iCheck3" id="iCheck_member" autocomplete="off">  利用規約に同意します。
				</div>
			※入力された個人情報は個人情報保護方針に基づき取り扱われることに同意するものとします。<br>
また 「会員規約」 「利用規約」 「旅行業約款」 「プラン詳細」 に同意するものとします。<br>
	</div>
	</div>
</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div id="rsv-next"><span class="btn btn-lg btn-block register02">会員登録を確定する</span></div>
		【注意】このボタンを押すと会員登録が完了します。ボタンは一度だけクリックしてください。<br>
	</div>
</div>

</div>
</div>


<?php require('footer.php'); ?>
