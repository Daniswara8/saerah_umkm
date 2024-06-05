<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>chec</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <script src="https://js.stripe.com/v3/"></script>
    <link rel="shortcut icon" type="image/x-icon" href="assets/bgl.jpg">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
<table>
                                    <tbody>
                                        <tr>
                                            <td class="image product-thumbnail"><img src="assets/ktgkebaya.jpeg" alt="#"></td>
                                            <td>
                                                <h5><a href="assets/ktgkebaya.jpeg">Kebaya Bludru</a></h5> <span class="product-qty">x 2</span>
                                            </td>
                                            <td>80.000</td>
                                        </tr>
                                        <tr>
                                            <td class="image product-thumbnail"><img src="assets/ktgkebaya.jpeg" alt="#"></td>
                                            <td>
                                                <h5><a href="assets/ktgkebaya.jpeg">Kebaya Kutu Baru</a></h5> <span class="product-qty">x 1</span>
                                            </td>
                                            <td>165.000</td>
                                        </tr>
                                        <tr>
                                            <td class="image product-thumbnail"><img src="assets/ktgkebaya.jpeg" alt="#"></td>
                                            <td><i class="ti-check-box font-small text-muted mr-10"></i>
                                                <h5><a href="asset/ktgkebaya.jpeg">Batik Parang Kusumo</a></h5> <span class="product-qty">x 1</span>
                                            </td>
                                            <td>60.000</td>
                                        </tr>
                                        <tr>
                                            <th>SubTotal</th>
                                            <td class="product-subtotal" colspan="2">385.000</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">Rp.385.000</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <div class="payment_method">
                                <div class="mb-25">
                                    <h5>Payment</h5>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3">
                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash On Delivery</label>                                        
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4">
                                        <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#cardPayment" aria-controls="cardPayment">Qris
                                        </label>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="paymentFrom-confirmPaymentContainer mt4 flex-item width-grow">
                                <div class="ConfirmPayment">
                                    <div class="flex-item width-12"></div>
                                    <div class="flex-item width-12">
                                        <button class="SubmitButton--incomplete" type="submit" data-testid="hosted-payment-submit-button" style="background-color:rgb(0, 116, 212); color:rgb(255, 255, 255);">
                                            <div class="submitButton-Shimmer" style="background: linear-gradient(to right, rgba(0,116,212,0) 0%, rgb(58,139,238) 50%, rgba(0,116,212,0) 100%);"></div>
                                            <div class="SubmitButton-TextContainer">
                                                <span class="SubmitButton-Text SubmitButton-Text--current Text Text-color--default Text-fontWeight--500 Text--truncate" aria-hidden="false">Pay</span>
                                                <span class="SubmitButton-Text SubmitButton-Text--pre Text Text-color--default Text-fontweight--500 Text--truncate" aria hidden="true">Processing...</span>
												<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                            </div>
                                            <div class="SubmitButton-IconContainer">
                                                <div class="SubmitButton-Icon SubmitButton-Icon--pre">
                                                    <div>
                                                        <div class="Icon Icon--md Icon--square">
                                                            <svg viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" width="22" height="14" focusable="false">
                                                                <path d="M 0.5 6 L 8 13.5 L 21.5 0" fill="transparent" stroke-width="2" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="flex-item width-12">
                                        <div class="ConfirmPayment-PostSubmit">
                                            <div class="ConfirmTerms">
                                                <div class="AnimateSinglePresence"></div>
                                                <div class="AnimateSinglePresence"></div>
                                                <div class="AnimateSinglePresence">
                                                    <div class="AnimateSinglePresenceItem ConfirmPaymentTerms">
                                                        <div>
                                                            <div class="ConfirmTerms Text Text-color--gray600 Text-fontSize--13" data-testid="ConfirmPaymentTermsText">
                                                                <div class="AnimateSinglePresence"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="PaymentForm-climateProgamBadge"></div>
                </div>
            </div>
        </section>
    </main>

    <footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt="">
                                <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>

    </footer>
    <!-- Vendor JS-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/plugins/slick.js"></script>
    <script src="js/plugins/jquery.syotimer.min.js"></script>
    <script src="js/plugins/wow.js"></script>
    <script src="js/plugins/jquery-ui.js"></script>
    <script src="js/plugins/perfect-scrollbar.js"></script>
    <script src="js/plugins/magnific-popup.js"></script>
    <script src="js/plugins/select2.min.js"></script>
    <script src="js/plugins/waypoints.js"></script>
    <script src="js/plugins/counterup.js"></script>
    <script src="js/plugins/jquery.countdown.min.js"></script>
    <script src="js/plugins/images-loaded.js"></script>
    <script src="js/plugins/isotope.js"></script>
    <script src="js/plugins/scrollup.js"></script>
    <script src="js/plugins/jquery.vticker-min.js"></script>
    <script src="js/plugins/jquery.theia.sticky.js"></script>
    <script src="js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="js/main.js?v=3.3"></script>
    <script src="js/shop.js?v=3.3"></script>
    <!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.vticker-min.js"></script>
    
    <script src="assets/js/main.js?v=3.3"></script>
    <script src="assets/js/shop.js?v=3.3"></script> -->

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
</body>

<style>
    .ConfirmTerms {
        line-height: 17px;
        text-align: left;
    }
</style>

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
                    window.location.href = "/tes"; // Ganti dengan URL halaman berikutnya
                }
            });
        });
    </script>

</html>