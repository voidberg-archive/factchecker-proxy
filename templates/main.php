<!DOCTYPE html>
<html>
	<head>
		<title>Verifică știrile cu Factual</title>

		<meta name="generator" content="php-proxy.com">
		<meta name="version" content="<?=$version;?>">

		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/factual.css" />
	</head>
	<body>
		<div class="container">
			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Factual</h1>
				</div>

				<form action="index.php" method="post" autocomplete="off" novalidate>
					<div class="fs-form fs-form-full">
						<ol class="fs-fields">
							<li class="fs-current">
								<label class="fs-field-label fs-anim-upper" for="q2" data-info="Adresa site-ului sau articolului care va fi verificat prin platforma Factual.">
									Adresa articolului
								</label>
								<input class="fs-anim-lower" id="url" name="url" type="text" placeholder="http://" required="">
							</li>
						</ol>
					</div>
					<div class="fs-controls">
						<button class="fs-continue fs-show">Verifică</button>
					</div>
				</form>

				<span class="fs-message-error fs-show">
					<?php if (isset($error_msg)) { ?>
						<?php echo $error_msg; ?>
					<?php } ?>
				</span>
			</div>
		</div>

		<script>
			(function() {
				var form = document.getElementsByTagName('form')[0];
				var inputElement = document.getElementById('url');
				var errorContainer = document.getElementsByClassName('fs-message-error')[0];

				form.addEventListener('submit', function (e) {
					var value = inputElement.value;

					if (value === '') {
						errorContainer.innerText = 'Vă rugăm să introduceți o adresă web.';
						e.preventDefault();
					} else if (!/^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(value)) {
						errorContainer.innerText = 'Vă rugăm să introduceți o adresă web validă.';
						e.preventDefault();
					}
				}, false);
			})();
		</script>
	</body>
</html>