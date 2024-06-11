<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id="container">
        <div id="center-col">
            <!-- Isi konten Anda di sini -->
            <h2>Payment</h2>
            <div id="logotype">
                <img id="card" src="https://th.bing.com/th/id/R.04db012a4940fcb2601e4dd18a462fa0?rik=%2btbtSalRQqCWyw&riu=http%3a%2f%2f1.bp.blogspot.com%2f-THibJz4NpO0%2fUNhEbur9-fI%2fAAAAAAAAEQM%2fb5J4fwEPD-c%2fs1600%2fLogo%2bBank%2bBCA.JPG&ehk=oGl5h7%2fuv9AES3JGcmydfpQTP%2bkH55onY5ttimNTOfw%3d&risl=&pid=ImgRaw&r=0" style="height:35px; weight:7px;" alt="" />
                </div>

            <form id="payment">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1">
                    <label class="form-check-label" for="payment">Cash On Delivery</label>
                    <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="payment">Qris</label>
                    <div id="qris-image">
                        <img src="https://budgetmantra.com/wp-content/uploads/2020/01/google-pay-photo.jpg" style="weight:120px; height:200px;" alt="QRIS Image">
                    </div>
                </div>

                <button id="order-btn" type="submit" onclick="pay()"><i class="fa fa-paypal" aria-hidden="true"></i> Pay</button>
                <p id="support">Having problem with checkout? <a href="https://wa.me/+6285865565876">Contact our support</a>.</p>
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

    // Tambahkan event listener untuk mendengarkan perubahan pada radio button
    var paymentRadios = document.querySelectorAll('input[name="payment"]');
    paymentRadios.forEach(function(radio) {
        radio.addEventListener('change', showQrisImage);
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
            background-color: #c6c6c6; /* Background color untuk halaman */
        }

        #container {
            background: rgb(198, 198, 198);
            width: 100%; /* Atur lebar kontainer */
            max-width: 800px; /* Batasi lebar maksimum kontainer */
            padding: 20px; /* Berikan jarak di sekitar konten */
            border-radius: 10px; /* Bulatkan sudut kontainer */
            box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2); /* Berikan bayangan pada kontainer */
            height: 90%;
        }

        #center-col {
            /* Atur gaya konten dalam kontainer */
            text-align: center;
        }


$primary: #e67e22;
$font: 'Lato', sans-serif;

*:focus {
	outline: none;
}

.left {
	width: 70%;
	float: left;
	clear: both;
}

.center {
	width: 30%;
	float: center;
	margin-bottom: 25px;
}

body {
	height: auto;
	min-height: calc(100vh);
	font-family: $font;
	font-weight: 500;
}
	
#wrapper {
		height: 100vh;
		display: flex;
		display: -webkit-flex;
		-webkit-align-items: center;
		align-items: center;
		-webkit-justify-content: center;
		justify-content: center;
}
		
#container {
			background: white;
			height: 440px;
			min-width: 600px;
			width: 600px;
			z-index: 1;
			-webkit-box-shadow: 0px 3px 15px 	-1px rgba(0,0,0,0.2);
			-moz-box-shadow: 0px 3px 15px -1px rgba(0,0,0,0.2);
			box-shadow: 0px 3px 15px -1px rgba(0,0,0,0.2);
}
            
#left-col {
			width: 40%;
			min-width: 240px;
			height: 100%;
			float: left;
			background: #34495e;

				
				#left-col-cont {
					margin: 20px 25px;
					color: white;
					
					
					div.item {
						margin: 30px 0;
						clear: both;
						
						.img-col {
							width: 30%;
							float: left;
							
							img {
								width: 100%;
								max-height: 100px;
							}
						}
						
						.meta-col {
							width: 70%;
							float: right;
							
							h3 {
								font-size: 0.7em;
								margin: 10px 0 0 5px;
							}
							
							p {
								font-size: 0.9em;
								margin: 5px 0 0 5px;
								opacity: .5;
							}
						}
					}
					
					p#total {
						text-transform: uppercase;
						text-align: left;
						font-size: 0.7em;
						opacity: .5;
						margin: 115px 0 5px 0;
					}
					
					h4#total-price {
						text-align: left;
						font-size: 2em;
						margin: 0;
						
						span {
							color: #1c2834;
						}
					}
				}
			}
			
			#center-col {
				width: calc(60% - 50px);
				min-width: 310px;
				height: 100%;
				margin: 20px 25px;
				float: right;
				
				h2 {
					float: left;
					margin: 6px 0 0 0;
				}
				
				div#logotype {
					float: right;
					margin: 4px 0 0 0;
					
					img {
						width: 60px;
						height: auto;
						
					}
				}
			}
				
				form {
					margin: 80px auto 0;
					width: 100%;
					
					#cardnumber {
						background: white;
						width: calc(100% - 14px);
						padding: 4px 6px;
						border-radius: 3px;
						border: 1px solid lightgrey;
						
						input {
							display: inline-block;
							font-family: $font;
							width: calc(25% - 23px);
							padding: 4px 6px;
							letter-spacing: 6px;
							font-size: 0.9em;
							border: none;
							background: none;
							
							&::-webkit-input-placeholder {
								opacity: .5;
							}
							
							&::-moz-placeholder {
								opacity: .5;
							}
							
							&[type=number]::-webkit-inner-spin-button, [type=number]::-webkit-outer-spin-button {
								-webkit-appearance: none;
    						margin: 0;
							}
						}
						
						span.divider {
							color: rgba(0, 0, 0, .3);
						}
					}
					
					label {
						display: block;
						font-family: $font;
						font-size: 0.7em;
						font-weight: 600;
						text-transform: uppercase;
						margin: 14px 0 4px;
						
						&#cvc-label {
							i {
								cursor: pointer;
								margin-left: 3px;
							}
						}
					}
					
					input {
						display: block;
						padding: 6px 8px;
						border: 1px solid lightgrey;
						border-radius: 2px;
						font-size: 0.9em;
						
						&:focus {
							border-color: $primary;
						}
						
						&::-webkit-input-placeholder {
							opacity: .5;
						}
							
						&::-moz-placeholder {
							opacity: .5;
						}
						
						&#cardholder {
							width: calc(100% - 18px);
						}
						
						&#cvc {
							width: calc(100% - 18px);
						}
					}
					
					select {
						border: 1px solid lightgrey;
						border-radius: 2px;
						background: none;
						width: 90px;
						font-weight: 500;
						font-size: 0.9em;
						padding: 6px 8px;
						color: rgba(0, 0, 0, .2);
						-webkit-appearance: none;
   					-moz-appearance:    none;
   					appearance:         none;
					}
					
					button {
						display: block;
						width: 100%;
						border: none;
						border-radius: 2px;
						padding: 8px 0;
						font-size: 0.8em;
						
						&#purchase {
							background: $primary;
							color: white;
							margin: 0 0 8px;
							font-size: 0.9em;
						}
						
						&#order-btn {
							background: none;
							border: 1px solid lightgrey;
							
							&:hover {
								background: #003087;
								border-color: #003087;
								color: white;
								
								i {
									color: #009cde;
								}
							}
							
							i {
								color: #003087;
							}
						}
					}
					
					p#support {
						font-size: 0.7em;
						text-align: center;
						color: rgba(0, 0, 0, .5);
						
						a {
							text-decoration: none;
							color: inherit;
							padding: 0 1px 2px 1px;
							border-bottom: 1px solid rgba(0, 0, 0, .5);
							
							&:hover {
								padding-bottom: 3px;
							}
						}
					}
				}
			}
		}
	
		#dailyui {
			position: fixed;
			font-size: 15em;
			font-weight: 700;
			margin: 0 0 -55px 0;
			padding: 0;
			right: 0;
			bottom: 0;
			color: rgba(0, 0, 0, .3);
			z-index: 0;
			text-align: right;
			font-family: 'proxima-nova', 'Lato', sans-serif;
		}
	}
</style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('order-btn').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah link dari melakukan aksi default (navigasi)

            // Menampilkan pesan SweetAlert
            Swal.fire({
                title: "Orderanmu sudah masuk!",
                text: "Terimakasih telah memesan!",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke halaman berikutnya setelah menutup SweetAlert
                    window.location.href = "/home"; // Ganti dengan URL halaman berikutnya
                }
            });
        });
    </script>
</script>

</body>
</html>