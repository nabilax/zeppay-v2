<?php
    include( './includes/header.php');
?>


<!-- navigation -->
<?php
    include( './includes/nav.php');
?>
<!-- /navigation -->

        <div class="container-fluid">

            <div class="alert alert-success commonSuccess alert-dismissible fade show" role="alert" style="display: none;">
                <p class="m-0"></p>
                <a type="button" class="btn-close" onclick="$(this).parents('p').text(''); $(this).parent('div.alert-dismissible').fadeOut()" aria-label="Close"></a>
            </div>

            <div class="alert alert-danger commonFailure alert-dismissible fade show" role="alert" style="display: none;">
                <p class="m-0"></p>
                <a type="button" class="btn-close" onclick="$(this).parents('p').text(''); $(this).parent('div.alert-dismissible').fadeOut()" aria-label="Close"></a>
            </div>

            
            
    <link rel="stylesheet" type="text/css" href="https://app.zeppay.com/bv/css/style.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://app.zeppay.com/bv/css/responsive.min.css"/>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center pb-4 sm:pt-0">
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="container">
            <section class="login">

                <div id="login-form">
                    <div class="form">
                        <div class="logo mb-2">
                            <a class="logo" href="index.html" target="_blank">
                                <img src="https://app.zeppay.com/images/logo.png">
                            </a>
                        </div>
                        <h5 class="text-center mt-4 mb-0">
                            Welcome Back
                        </h5>

                        <!-- <div class="row">
                            <div class="col-md-6 pt-2">
                                <a class="btn btn-login google" href="website/gsignin">
                                <img src="https://app.zeppay.com/img/google-logo.webp">
                                <small>Login with Google</small>
                                </a>
                            </div>
                            <div class="col-md-6 pt-2">
                                <a class="btn btn-login google" href="website/fbsignin">
                                <img src="https://app.zeppay.com/img/facebook-logo.png">
                                <small>Login with Facebook</small>
                                </a>
                            </div>
                        </div>
                        <div class="separator">
                            <div class="line-separator"></div>
                            <div class="or-label">or</div>
                            <div class="line-separator"></div>
                        </div> -->

                        
                        
                                <form id="login-form" method="post" role="presentation">
                                <input type="hidden" name="_token" value="PzNVOgGSBGUCc98GAlglTdb8z17yHmrcdZxozmYS">                                <div class="mb-2">
                                    <div class="form-group mb-2">
                                        <label>Email <span class="required-inpt">*</span></label>
                                        <input name="email" class="form-control bg-white" type="email" value="" required>
                                    </div>
                                    <div class="form-group sin-inup-password">
                                        <label>Password <span class="required-inpt">*</span></label>
                                        <span class="p-viewer">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </span>
                                        <input name="password" class="form-control bg-white show-password" type="password" value="" required>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <div class="form-group mb-3">
                                        <button class="btn btn-login primary mt-2" type="submit"  data-loading-text='<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> &nbsp; Please wait a moment...'>
                                            <b>Login to Zeppay</b>
                                        </button>
                                    </div>
                                    <div class="form-group text-center">
                                        <a href="https://app.zeppay.com/forgotpassword">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="line-separator"></div>
                                <p class="text-center mt-2">Don't have an account?
                                    <a href="signin.html">
                                        <b>Create Account</b>
                                    </a>
                                </p>
                            </form>
                        
                    </div>

                </div>
            </section>
        </div>
    </div>

            <!-- Start - Price alter - modal -->
<div class="modal fade" id="common-modal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <a href="javascript:void(0);" class="btn-close" data-bs-dismiss="modal" onclick="$('.pricingTable .loading-ellipsis').remove()"></a>
            </div>
            <div class="modal-body pb-5">

            </div>
        </div>
    </div>
</div>
<!-- End - Price alter - modal -->

<!-- Start - Help details - modal -->
<div id="helpdetails" class="modal right fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-contents-between align-items-center">
                <div class="text-start">
                    <a href="javascript:void(0);" class="btn-close" data-bs-dismiss="modal"></a>
                </div>
                <h4 class="modal-title">Zeppay Support</h4>
            </div>
            <div class="modal-body pb-5">
                <div class="px-5">
                    <img class="img-fluid" src="https://app.zeppay.com/zeppay/images/help/zeppay-support.png" alt="Zeppay Support">
                </div>
                <div class="mt-4">
                    <h6 class="fw-bold mb-4 text-center">
                        For any query or setup, please contact us by using the below contact details
                    </h6>
                    <table class="table border-none">
                        <tbody>
                            <tr>
                                <td class="fw-bold text-end border-0">
                                    India
                                </td>
                                <td class="fw-bold text-center border-0 px-0">:</td>
                                <td class="text-start border-0">
                                    <a href="tel:+918438552750">
                                        +91 8438552750
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end border-0">
                                    United States
                                </td>
                                <td class="fw-bold text-center border-0 px-0">:</td>
                                <td class="text-start border-0">
                                    <a href="tel:+3322699104">
                                        +(332) 269-9104
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end border-0">
                                    Singapore
                                </td>
                                <td class="fw-bold text-center border-0 px-0">:</td>
                                <td class="text-start border-0">
                                    <a href="tel:+6598951817">
                                        +65 9895 1817
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include( './includes/footer.php');
?>
<!-- End - Help details - modal -->

<script src="https://app.zeppay.com/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://app.zeppay.com/zeppay/js/jquery_2_1_1.min.js"></script>
<script src="https://app.zeppay.com/zeppay/int-tel-input/js/intlTelInput.min.js"></script>
<script src="https://app.zeppay.com/zeppay/js/geolocator.min.js"></script>
<script src="https://app.zeppay.com/zeppay/js/jquery_3_5_1.js"></script>
<script src="https://app.zeppay.com/zeppay/js/select2_4_1_0.min.js" defer></script>
<script src="https://app.zeppay.com/zeppay/js/jquery_validate_1_19_3.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://app.zeppay.com/zeppay/js/bootstrap-datepicker_1_8_0.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script src="https://app.zeppay.com/zeppay/js/clipboard_1_4_0.min.js"></script>
<script src="https://app.zeppay.com/zeppay/js/scripts.js"></script>

<script>
    $(document).ready(function () {

        $('body').on('click', '.plugin-sync-header', function () {
            $('.plugin-sync-list').append(jsLoader);
            $.get(`https://app.zeppay.com/settings/plugins-sync`, function(res){
                $('.plugin-sync-list').html(res);
            }).fail(function(response, errorresp = '') {
                try {
                    errorresp = JSON.parse(response.responseText).message;
                } catch (e) {
                    errorresp = response.responseText;
                }
                commonAlert('failure', errorresp, 8888);
            });
        });

        $('body').on('click', '.zohosync', function () {
            $('.zep-content').append(jsLoader);
            APP_URL = 'https://app.zeppay.com';
            var url = APP_URL + '/invoice/zohoauthinit';
            var wnd = window.open(url, '_blank');
            setTimeout(function() {
                wnd.close();
            }, 100);
        });

        $('body').on('click', '.wallet-header', function () {
            $('.wallet-credits-list').append(jsLoader);
            $.get(`https://app.zeppay.com/settings/wallet-plans/1`, function(res){
                $('.wallet-credits-list').html(res);
            }).fail(function(response, errorresp = '') {
                try {
                    errorresp = JSON.parse(response.responseText).message;
                } catch (e) {
                    errorresp = response.responseText;
                }
                commonAlert('failure', errorresp, 8888);
            });
        });

        $('body').on('click', '.proceed-pay-modal', function() {
            // $(this).closest('.pricingTable').append(jsLoader);
            // $('#plan-price-modal .modal-title').text($(this).data('pname') + ' Plan');
            // $('#plan-price-modal .proceed-pay').data('pname', $(this).data('pname'));
            // $('#plan-price-modal .pprice-input').val($(this).data('pprice'));
            // $('#plan-price-modal .pprice-input').attr('min', $(this).data('pprice'));
            // $('#plan-price-modal .pcurrency').text($(this).data('pcurrency'));
            // $('#plan-price-modal label small span').text($(this).data('pcurrency') + $(this).data('pprice'));
            // $('#plan-price-modal p span').text($(this).data('pcurrency') + $(this).data('pprice'));
            $.get(`https://app.zeppay.com/settings/wallet-plans`, function(res){
                $('#common-modal .modal-title').text('Credits Recharcge for Invoices');
                $('#common-modal .modal-body').html(res);
                $('#common-modal').modal('show');
            }).fail(function(response, errorresp = '') {
                try {
                    errorresp = JSON.parse(response.responseText).message;
                } catch (e) {
                    errorresp = response.responseText;
                }
                commonAlert('failure', errorresp, 8888);
            });
        });

        $('body').on('keyup change', '#plan-price-add .pprice-input', function(event) {
            var minimumAllowed = parseFloat($('#plan-price-add .pprice-input').attr('min'));
            var currentVal = $('#plan-price-add .pprice-input').val();
            var currentValue = parseFloat(currentVal);
            var maximumAllowed = parseFloat($('#plan-price-add .pprice-input').attr('max'));
            if(currentVal == "" || currentValue < minimumAllowed)
            {
                $('#plan-price-add .proceed-pay').attr('disabled', true);
                $('#plan-price-add .minmax-error').removeClass('d-none');
                $('#plan-price-add .minmax-error').text('Minimum credits should not be less than ' + minimumAllowed);
                $('#plan-price-add .pprice-input').css('border-color', '#ee205e');
            }
            else if(currentValue > maximumAllowed)
            {
                $('#plan-price-add .proceed-pay').attr('disabled', true);
                $('#plan-price-add .minmax-error').removeClass('d-none');
                $('#plan-price-add .minmax-error').text('Maximum credits should not be greater than ' + maximumAllowed);
                $('#plan-price-add .pprice-input').css('border-color', '#ee205e');
            }
            else
            {
                $('#plan-price-add .proceed-pay').attr('disabled', false);
                $('#plan-price-add .minmax-error').addClass('d-none');
                $('#plan-price-add .pprice-input').css('border-color', '#74bf44');
            }
        });

        $('#plan-price-modal').on('click', '.proceed-pay', function() {
            // $('.pricingTable .loading-ellipsis').remove();
            // $('#plan-price-modal').modal('hide');
            var minimumAllowed = parseFloat($('#plan-price-modal .pprice-input').attr('min'));
            var currentValue = parseFloat($('#plan-price-modal .pprice-input').val());
            if(currentValue >= minimumAllowed)
            {
                $('#plan-price-modal .modal-body').append(jsLoader);
                $('.pricingTable.' + $(this).data('pname') + ' .amount_purchased').val($('#plan-price-modal .pprice-input').val());
                $('.pricingTable.' + $(this).data('pname')).submit();
            }
            else
            {
                $('.minimum-error').addClass('d-none');
                $('#plan-price-modal .pprice-input').css('border-color', '#74bf44');
            }
        });

        $('[data-toggle="tooltip"]').tooltip();
        $('[data-bs-toggle="tooltip"]').tooltip();

        /* Select search js dropdown */
        function markMatch(text, term)
        {
            if ($.trim(term) === '')
            {
                text = '<b class="fw-bold">' + text.substring(0, text.indexOf('(')) + '</b>' + text.substring(text.indexOf('('));
            }
            var startString = '<b class="fw-bold">';
            var endString = text.replace(startString, '');
            var match = endString.toUpperCase().indexOf(term.toUpperCase());
            var $result = $('<span></span>');
            // If there are no search terms, return all of the data
            if ($.trim(term) === '') {
                return $result.append(text);
            }
            if (match < 0) {
                return $result.text(text);
                // return $result.append(text);
            }
            var elementToReplace = endString.substr(match, term.length);
            var $match = '<span class="select2-rendered__match">' + endString.substring(match, match + term.length) + '</span>';
            text = startString + endString.replace(elementToReplace, $match);
            $result.append(text);
            return $result;
        }

        $('.selectsearch').select2({
            // tags: 'true',
            theme: 'bootstrap5',
            placeholder: 'Select an option',
            templateResult: function(item) {
                if (item.loading) {
                    return item.text;
                }
                var term = query.term || '';
                // var $result = markMatch('<span class="fw-bold">' + item.text.substring(0, item.text.indexOf('(')) + '</span>' + item.text.substring(item.text.indexOf('(')), term);
                // var $result = markMatch('' + item.text.substring(0, item.text.indexOf('(')) + '' + item.text.substring(item.text.indexOf('(')), term);
                var $result = markMatch(item.text, term);
                return $result;
            },
            language: {
                searching: function(params) {
                    // Intercept the query as it is happening
                    query = params;
                    // Change this to be appropriate for your application
                    return 'Searching...';
                }
            },
            cache: true,
        });

        $('.selectsearch').on('select2:open', function() {
            $('.select2-search--dropdown .select2-search__field').attr('placeholder', 'Type to search...');
        });
        /* Select search js dropdown */

    });
</script>                <script>
        $(document).ready(function() {
            setTimeout(function(){
                $('[autocomplete=off]').val('');
            }, 8);

            $('#login-form').on('submit', function(e) {
                $('.btn-login').data('default-text', $('.btn-login').html());
                $('.btn-login').prop('disabled', true);
                $('.btn-login').html($('.btn-login').data('loading-text'));
            });

            $('body').on('submit', '.init-verify', function() {
                $(this).attr('action', "https://app.zeppay.com/verify-signup");
                $('.btn-verify-otp').data('default-text', $('.btn-verify-otp').html());
                $('.btn-verify-otp').prop('disabled', true);
                $('.btn-verify-otp').html($('.btn-verify-otp').data('loading-text'));
                return true;
            });

                    });
    </script>
        </div>
