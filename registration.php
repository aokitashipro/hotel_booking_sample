<?php
	require("header.php");
?>


<div id="wrap" class="">
	<div class="container">

		<h2 class="h2-responsive"> 選択中の部屋・プラン</h2>

		<div class="row mgb30">
			<div class="col-md-6 col-xs-12 mgb20">
				<!--Image Card-->
				<div class="card hoverable">
					<div class="card-image">
						<div class="view overlay hm-white-slight z-depth-1">
							<img src="img/img600360.jpg" class="img-responsive" alt="">
							<div class="mask waves-effect"></div>
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
					</div>
				</div><!--Image Card-->
			</div><!-- col -->
			<div class="col-md-6 col-xs-12 mgb20">
				<!--Image Card-->
				<div class="card hoverable">
					<div class="card-image">
						<div class="view overlay hm-white-slight z-depth-1">
							<img src="img/img031.jpg" class="img-responsive" alt="">
							<div class="mask waves-effect"></div>
						</div>
					</div>
					<div class="card-content">
						<h3 class="h3-responsive">特別企画【12月1月WEB限定】お得に泊まるアニバーサリープラン</h3>
					</div>
				</div>
				<!--Image Card-->
			</div><!-- col -->
		</div><!-- row -->


					<div class="row mgb20">
						<div class="col-xs-12">
							<div class="panel panel-default">
								<div class="panel-heading"> ご予約の内容</div>
								<div class="panel-body">
								<i class="material-icons">date_range</i>日程: 2018年2月21日(水)〜2018年2月22日(木) 1泊<br>
								<i class="material-icons">person</i>人数: おとな 2名 子ども 1名<br>
								<i class="material-icons">hotel</i>部屋数: 1室<br>
								<i class="material-icons">check</i>合計料金: 50,000円 (税込)<br>
								</div>
						</div>
						</div>
					</div>

	<div class="panel panel-primary">
	      <div class="panel-heading">ログインいただくと、入力の手間がはぶけます。
				</div>
	      <div class="panel-body">


			<div class="row mgb30">
				<div class="col-md-6 col-xs-12 mgb20">
					<!--Image Card-->
					<div class="card hoverable">
						<div class="card-content">
								会員の方
								<div class="input-field">
									<i class="material-icons prefix">mail</i>
									<input id="login_email" type="email" class="validate">
									<label for="login_email" data-error="メールアドレスを入力してください" data-success="OK">メールアドレス</label>
								</div>
								<br>
								<div class="input-field">
									<i class="material-icons prefix">lock_outline</i>
									<input id="login_password" type="text" class="validate">
									<label for="login_password">パスワード</label>
									<div class="text-right">
										<a class="btn btn-link btn-md" href="#">ログイン</a>
									</div>
									<a href="forgotPassword.php">パスワードを忘れた場合はこちら</a>
								</div>
							</div>
						</div>
				</div><!-- col -->
				<div class="col-md-6 col-xs-12 mgb20">
					<!--Image Card-->
					<div class="card hoverable">
						<div class="card-content">
							<h4 class="h4-responsive">SNSログイン</h4>
								<a class="btn btn-primary waves-effect wave-light">
									<i class="fa fa-facebook" aria-hidden="true"></i>    facebook</a>
								<a class="btn btn-info waves-effect wave-light">
									<i class="fa fa-twitter" aria-hidden="true"></i>    Twitter</a>
								<a class="btn btn-danger waves-effect wave-light">
									<i class="fa fa-yahoo" aria-hidden="true"></i>    Yahoo</a>
								<a class="btn btn-success waves-effect wave-light">Line</a>
							</div>
						</div>
				</div><!-- col -->
			</div>
		</div>
</div>

<h2 class="h2-responsive">ご予約の詳細</h2>

<div class="row mgb20">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading cyan lighten-5"> ご予約の内容</div>
			<div class="panel-body">
				<i class="material-icons">person</i>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-select_male">
					  <input class="mdl-textfield__input" placeholder="0" type="text" id="select-section_male" />
					  <label class="mdl-textfield__label" for="sample1">おとな 男性人数</label>
					  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_male">
					      <li class="mdl-menu__item">0名</li>
					      <li class="mdl-menu__item">1名</li>
					      <li class="mdl-menu__item">2名</li>
					    </ul>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-select_female">
						<input class="mdl-textfield__input" placeholder="0" type="text" id="select-section_female" />
						<label class="mdl-textfield__label" for="sample2">おとな 女性人数</label>
						<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_female">
								<li class="mdl-menu__item">0名</li>
								<li class="mdl-menu__item">1名</li>
								<li class="mdl-menu__item">2名</li>
							</ul>
					</div>

					<br>チェックイン予定時刻   15:00(ここはプルダウンか)<br>
					1室目、2室目 でそれぞれ選択必要
			</div>
	</div>
	</div>
</div>

		<h2 class="h2-responsive">ご予約者様の情報</h2>

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

ご予約者と宿泊される方が違う場合は記入してください。

<div class="row">
		<div class="input-field col-md-6">
		 <i class="material-icons prefix">account_circle</i>
		 <input id="first_name_stay" type="text" class="validate">
		 <label for="first_name_stay">姓</label>
		</div>
		<div class="input-field col-md-6">
			<input id="last_name_stay" type="text" class="validate">
			<label for="last_name_stay">名</label>
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
			<div class="col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading"><i class="fa fa-check" aria-hidden="true"></i>宿からのご質問</div>
					<div class="panel-body">


						<div class="mgb10">駐車場をご利用の場合は『はい』を選択してください。<br>
							<input class="flat" type="radio" name="iCheck1">はい　
							<input class="flat" type="radio" name="iCheck1" checked>いいえ
							</p></div>
						<div class="mgb10">駐車場をご利用の場合は『はい』を選択してください。<br>
						<!--チェックボックス-->
						<input class="flat" type="checkbox" name="iCheck2">質問1　
						<input class="flat" type="checkbox" name="iCheck2">質問2
					</p></div>

					<div class="mgb10">
						犬種・お名前・年齢・性別・頭数をお知らせくださいませ。<br>
						<input id="question_1" type="text">
						<label for="question_1"></label>
					</div>

					<div class="mgb10">
						お子様(幼児)の情報(年齢・性別)等をお寄せ下さいませ。<br>
						<input id="question_1" type="text">
						<label for="question_1"></label>
					</div>

					<div class="mgb10">
						食物アレルギーがございましたらお知らせくださいませ。<br>
						<input id="question_1" type="text">
						<label for="question_1"></label>
					</div>

			</div>
			</div>
			</div>
		</div>


		<div class="input-field col-md-12">
				<i class="material-icons prefix">textsms</i>
				<textarea id="textarea1" class="materialize-textarea"></textarea>
				<label for="textarea1">宿へのご連絡 (任意)</label>
		</div>


<br>
<h2 class="h2-responsive">このような商品もございます</h2>
<br>

<div class="row mgb30">
	<div class="col-md-6 col-xs-12 mgb20">
		<!--Image Card-->
		<div class="card hoverable">
			<div class="card-image">
				<div class="view overlay hm-white-slight z-depth-1">
					<img src="img/img555.jpg" class="img-responsive" alt="">
					<a href="room.php"><div class="mask waves-effect"></div></a>
				</div>
			</div>
			<div class="card-content">
				<h3 class="h3-responsive">極上A5ランク赤牛丼</h3>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-select_option1">
					<input class="mdl-textfield__input" placeholder="0" type="text" id="select-section_option1" />
					<label class="mdl-textfield__label" for="sample3">個数</label>
					<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_option1">
							<li class="mdl-menu__item">1</li>
							<li class="mdl-menu__item">2</li>
							<li class="mdl-menu__item">3</li>
						</ul>
				</div>
金額　2,000円
				<div class="text-right">
					<a class="btn btn-link btn-md" href="#">選択する</a>
				</div>
			</div>
		</div><!--Image Card-->
	</div><!-- col -->
	<div class="col-md-6 col-xs-12 mgb20">
		<!--Image Card-->
		<div class="card hoverable">
			<div class="card-image">
				<div class="view overlay hm-white-slight z-depth-1">
					<img src="img/img556.jpg" class="img-responsive" alt="">
					<a href="#"><div class="mask waves-effect"></div></a>
				</div>
			</div>
			<div class="card-content">
				<h3 class="h3-responsive">特選馬刺し盛り合わせ</h3>
				<div class="text-right">
					<a class="btn btn-link btn-md" href="#">選択する</a>
				</div>
			</div>
		</div>
		<!--Image Card-->
	</div><!-- col -->
</div><!-- row -->

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
				ポイント利用
			</div>
		</div>
	</div>
</div>


			<div class="row mgb20">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading"><i class="fa fa-check" aria-hidden="true"></i>　キャンセルポリシー</div>
						<div class="panel-body">
							※当予約のキャンセル・変更の場合、以下のキャンセル料を申し受けます。<br>
							7日～4日前　宿泊料金の50%<br>
							3日～2日前　宿泊料金の70%<br>
							1日前 　　　宿泊料金の100%<br>
							当日　　　　宿泊料金の100%<br>
							無連絡キャンセル 宿泊料金の100%</div>
				</div>
				</div>
			</div>

			<div class="row mgb20">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading"><i class="fa fa-check" aria-hidden="true"></i> 　お客様へのお知らせ</div>
						<div class="panel-body">2018年2月はxxxx出展のため、xxxxにておもてなしをさせていただきます。</div>
				</div>
				</div>
			</div>

						<div class="row mgb20">
							<div class="col-xs-12">
								<div class="panel panel-default">
									<div class="panel-heading"><i class="fa fa-check" aria-hidden="true"></i>　注意事項</div>
									<div class="panel-body">
【ペットをお連れのお客様へ】<br>
大切なご家族である、ワンちゃんとも一緒にご宿泊いただけます。<br>
ドッグランやペットホテルだけではなく、他にも楽しめる施設が充実しております。<br>


</div>
							</div>
							</div>
						</div>


<div class="row mgb20">
	<div class="col-xs-12">
		<div class="panel panel-danger">
			<div class="panel-heading">お支払い</div>
			<div class="panel-body">
				<table class="table">
					<tr>
						<td><i class="material-icons">date_range</i>ご宿泊日</td>
						<td>2018年2月21日(水)〜2018年2月22日(木)</td>
					</tr>
					<tr>
						<td><i class="material-icons">check</i>お支払い方法<br></td>
						<td>現金支払い</td>
					</tr>
					<tr>
						<td><i class="material-icons">person</i>おとな 2名</td>
						<td>25,000 × 2 = 50,000円(税込)</td>
					</tr>
					<tr>
						<td><i class="material-icons">face</i>子ども<br>
							小学生高学年 1名</td>
						<td><br>3,500 × 1 = 3,500円(税込)</td>
					</tr>
					<tr>
						<td><i class="material-icons">check</i>合計料金</td>
						<td>合計料金: 53,500円 (税込)</td>
					</tr>
				</table>

					</div>
				</div>
			</div>
	</div>


<div class="mgb20"></div>
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="register01 mgb10">
						<input class="flat" type="checkbox" name="iCheck10" id="iCheck10" checked>  当ホテルの会員になる事に同意します。
				</div>
				<div class="register01 mgb10">
						<input class="flat" type="checkbox" name="iCheck11" id="iCheck11" checked>  お知らせメールやサンキューメールを受信します。
				</div>

				<div class="register01 mgb10">
						<input class="flat" type="checkbox" name="iCheck3" id="iCheck3" autocomplete="off">  利用規約に同意します。
				</div>
			※入力された個人情報は個人情報保護方針に基づき取り扱われることに同意するものとします。<br>
また 「会員規約」 「利用規約」 「旅行業約款」 「プラン詳細」 に同意するものとします。<br>
	</div>
	</div>
</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div id="rsv-next"><span class="btn btn-lg btn-block register02">予約を確定する</span></div>
		【注意】このボタンを押すと予約されます。ボタンは一度だけクリックしてください。<br>
	</div>
</div>

</div>
</div>

<?php require('rsv_btn.php'); ?>

<?php require('footer.php'); ?>
