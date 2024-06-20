<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title>Checkout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div id="container">
		<div id="center-col">
			<h2>Payment</h2>
			<div id="logotype">
				<img id="card"
					src="https://th.bing.com/th/id/R.04db012a4940fcb2601e4dd18a462fa0?rik=%2btbtSalRQqCWyw&riu=http%3a%2f%2f1.bp.blogspot.com%2f-THibJz4NpO0%2fUNhEbur9-fI%2fAAAAAAAAEQM%2fb5J4fwEPD-c%2fs1600%2fLogo%2bBank%2bBCA.JPG&ehk=oGl5h7%2fuv9AES3JGcmydfpQTP%2bkH55onY5ttimNTOfw%3d&risl=&pid=ImgRaw&r=0"
					style="height:35px;" alt="Logo BCA" />
			</div>

			<form id="payment">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" value="cod">
					<label class="form-check-label" for="flexRadioDefault1">Cash On Delivery</label>
					<input class="form-check-input" type="radio" name="payment" id="flexRadioDefault2" value="qris"
						checked>
					<label class="form-check-label" for="flexRadioDefault2">Qris</label>
					<div id="qris-image">
						<img src="https://budgetmantra.com/wp-content/uploads/2020/01/google-pay-photo.jpg"
							style="width:200px; height:200px;" alt="QRIS Image">
					</div>
				</div>

				<button id="order-btn" type="submit"><i class="fa fa-paypal" aria-hidden="true"></i> Pay</button>
				<p id="support">Having problem with checkout? <a href="https://wa.me/+6285865565876">Contact our
						support</a>.</p>
			</form>
		</div>
	</div>

	<script>
		function showQrisImage() {
			var paymentOption = document.querySelector('input[name="payment"]:checked').value;
			var qrisImage = document.getElementById('qris-image');
			if (paymentOption === 'qris') {
				qrisImage.style.display = 'block';
			} else {
				qrisImage.style.display = 'none';
			}
		}

		var paymentRadios = document.querySelectorAll('input[name="payment"]');
		paymentRadios.forEach(function (radio) {
			radio.addEventListener('change', showQrisImage);
		});
	</script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		document.getElementById('order-btn').addEventListener('click', function (event) {
			event.preventDefault();

			Swal.fire({
				title: "Orderanmu sudah masuk!",
				text: "Terimakasih telah memesan!",
				icon: "success"
			}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = "/home";
				}
			});
		});
	</script>

	<style>
		body {
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			background-color: #c6c6c6;
			font-family: 'Lato', sans-serif;
		}

		#container {
			background: #fff;
			width: 90%;
			max-width: 800px;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
			text-align: center;
		}

		#center-col {
			margin: 0 auto;
		}

		#logotype img {
			height: 35px;
		}

		#qris-image img {
			width: 120px;
			height: 200px;
		}

		.form-check {
			margin: 20px 0;
		}

		.form-check-input {
			margin-right: 10px;
		}

		.form-check-label {
			margin-right: 20px;
		}

		button#order-btn {
			background: #e67e22;
			color: white;
			padding: 10px 80px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 1em;
			transition: background 0.3s ease;
		}

		button#order-btn:hover {
			background: #d35400;
		}

		#support {
			margin-top: 20px;
			font-size: 0.9em;
			color: rgba(0, 0, 0, 0.6);
		}

		#support a {
			color: #e67e22;
			text-decoration: none;
			border-bottom: 1px solid rgba(0, 0, 0, 0.6);
		}

		#support a:hover {
			color: #d35400;
			border-bottom: 1px solid #d35400;
		}
	</style>

</body>

</html>