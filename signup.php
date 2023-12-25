<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Zeppay | Accounts Receivable Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="author" content="Zeppay Software" />
    <meta name="description" content="Zeppay is an accounts receivable software which automates payment reminder, reduce daily sales outstanding and Get paid money faster." />
    <meta name="keywords" content="debt collection software, day sales outstanding, DSO, payment collection software, payment reminder software, money collection software, accounts receivable software" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">


    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/font-awesome/fontawesome.min.css">
    <link rel="stylesheet" href="plugins/font-awesome/brands.css">
    <link rel="stylesheet" href="plugins/font-awesome/solid.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/modal-video/modal-video.css">
    <link rel="stylesheet" href="plugins/animate-css/animate.css">

    <meta name="csrf-token" content="PzNVOgGSBGUCc98GAlglTdb8z17yHmrcdZxozmYS" />
    <link rel="stylesheet" href="https://app.zeppay.com/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://app.zeppay.com/zeppay/css/select2_4.1.0.min.css" />
    <link rel="stylesheet" href="https://app.zeppay.com/zeppay/css/responsive.css" />
    <link rel="stylesheet" href="https://app.zeppay.com/zeppay/css/bootstrap-datepicker_1.8.0.css" />
    <link rel="stylesheet" href="https://app.zeppay.com/zeppay/int-tel-input/css/intlTelInput.min.css">

    <!-- # Main Style Sheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleh.css">
    <link rel="stylesheet" href="css/signup.css">


    <!-- Include Animate.css in your HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/4.1.1/animate.min.css">

</head>

<body>
    <!-- navigation -->
<?php
    include( './includes/nav.php');
?>
<!-- /navigation -->
    <div class="pt-4 py-4">

        <div class="alert alert-success commonSuccess alert-dismissible fade show" role="alert" style="display: none;">
            <p class="m-0"></p>
            <a type="button" class="btn-close" onclick="$(this).parents('p').text(''); $(this).parent('div.alert-dismissible').fadeOut()" aria-label="Close"></a>
        </div>

        <div class="alert alert-danger commonFailure alert-dismissible fade show" role="alert" style="display: none;">
            <p class="m-0"></p>
            <a type="button" class="btn-close" onclick="$(this).parents('p').text(''); $(this).parent('div.alert-dismissible').fadeOut()" aria-label="Close"></a>
        </div>



        <link rel="stylesheet" href="css/signup.css" />
        <link rel="stylesheet" type="text/css" href="https://app.zeppay.com/bv/css/responsive.min.css" />


        <div class="pt-4 py-4 ">
            <section class="">
                <div class="">
                    <div class="row justify-content-center align-item-center pt-4 py-4 rounded">
                        <div class="col-md-6 border pt-4 py-4 rounded">
                            <div class="form">
                                <h3 class="text-center my-xs-2 py-4">
                                    Create Your Account today!
                                </h3>


                                <!-- Init - Default sign up fields -->
                                <form name="frmcreatetrial" id="frmcreatetrial" class="init-sign-up mb-3" role="form" method="POST" autocomplete="off">
                                    <input type="hidden" name="_token" value="PzNVOgGSBGUCc98GAlglTdb8z17yHmrcdZxozmYS">
                                    <div id="exists" style="">
                                        <div class="text-center alert alert-danger">
                                            <b>Email Already Exists, Please do Login..!</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            <label for="business_type" class="fw-bold">Business Type <span class="required-inpt">*</span></label>
                                            <select name="business_type" id="business_type" class="form-control form-select" required>
                                                <option value="Appearance">Appearance</option>
                                                <option value="Health Sector">Health Sector</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Fitness">Fitness</option>
                                                <option value="Education">Education</option>
                                                <option value="Maintenance">Maintenance</option>
                                                <option value="Others">Others</option>
                                                <option value="OTHERS" selected="" class="text-muted">--Select--</option>
                                                <option value="" disabled=""></option>
                                            </select>
                                            <span class="result-message" id="business_type-error"></span>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="location" class="fw-bold">Company Name <span></span></label>
                                            <input name="company_name" id="company_name" class="form-control" required type="text" placeholder="Enter Your Company Name" value="">
                                            <!-- <input name="business_type" value="gold_chit" type="hidden"> -->
                                            <span class="result-message" id="company_name-error"></span>
                                        </div>

                                        <div class="col-md-6 mb-1">
                                            <label class="fw-bold">Full Name <span class="required-inpt">*</span></label>
                                            <input name="fullname" id="fullname" class="form-control" type="text" required placeholder="Enter Your Name" autocomplete="off" value="">
                                            <span class="result-message" id="fullname-error"></span>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label class="fw-bold">Phone Number <span class="required-inpt">*</span></label>
                                            <input name="country_code" id="country_code" type="hidden" value="" />
                                            <input name="dial_code" id="dial_code" type="hidden" value="" />
                                            <input name="mobile" id="mobile" class="form-control" type="text" pattern="[0-9.]{8,}" required placeholder="Phone" autocomplete="off" value="">
                                            <small>We will be whatsapping <b>OTP</b> on this number</small>
                                            <p class="mb-0 result-message" id="mobval"></p>
                                            <span class="result-message" id="country_code-error"></span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">Email <span class="required-inpt">*</span></label>
                                            <input name="email" id="email" class="form-control" type="email" required placeholder="Enter Your Email Address" autocomplete="off" value="">
                                            <span class="result-message" id="email-error"></span>
                                        </div>
                                        <div class="col-md-6 mb-3 sin-inup-password">
                                            <label class="fw-bold">Password <span class="required-inpt">*</span></label>
                                            <span class="p-viewer">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </span>
                                            <input name="password" id="password" class="form-control show-password" type="password" required placeholder="Enter Password" title="At least 8 characters with letters and numbers" autocomplete="new-password" value="">
                                            <p class="mb-0 result-message-pswd" id="result"></p>
                                            <span class="result-message" id="password-error"></span>
                                            <input name="passStrength" id="passStrength" type="hidden" value="">
                                        </div>
                                    </div>
                                    <button class="btn btn-login primary mt-4 mb-4 fw-bold btn-createacc" type="submit" data-loading-text='<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> &nbsp; Please wait a moment...'>
                                        Get Started
                                    </button>
                                    <p class="text-center">Already have an account?
                                        <a href="signin.html"><b>Log in</b></a>
                                    </p>
                                </form>
                                <!-- End - Default sign up fields -->

                                <p class="text-center">Signing up for a
                                    <a href="signup.html" target="_blank">
                                        <b class="text-danger">Zeppay</b>
                                    </a> account means <br> you agree to the
                                    <a href="terms-and-conditions.html" target="_blank">
                                        <b>Terms of Service </b>
                                    </a> and
                                    <a href="personal-data-protection-policy.html" target="_blank">
                                        <strong> Privacy Policy</strong>
                                    </a>.
                                </p>
                        </div>
                    </div>
                </div>
            </section>
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
                                            <a href="tel:+1 (617) 800-4606">
                                                +1 (617) 800-4606
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
            $(document).ready(function() {

                $('body').on('click', '.plugin-sync-header', function() {
                    $('.plugin-sync-list').append(jsLoader);
                    $.get(`https://app.zeppay.com/settings/plugins-sync`, function(res) {
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

                $('body').on('click', '.zohosync', function() {
                    $('.zep-content').append(jsLoader);
                    APP_URL = 'https://app.zeppay.com';
                    var url = APP_URL + '/invoice/zohoauthinit';
                    var wnd = window.open(url, '_blank');
                    setTimeout(function() {
                        wnd.close();
                    }, 100);
                });

                $('body').on('click', '.wallet-header', function() {
                    $('.wallet-credits-list').append(jsLoader);
                    $.get(`https://app.zeppay.com/settings/wallet-plans/1`, function(res) {
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
                    $.get(`https://app.zeppay.com/settings/wallet-plans`, function(res) {
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
                    if (currentVal == "" || currentValue < minimumAllowed) {
                        $('#plan-price-add .proceed-pay').attr('disabled', true);
                        $('#plan-price-add .minmax-error').removeClass('d-none');
                        $('#plan-price-add .minmax-error').text('Minimum credits should not be less than ' + minimumAllowed);
                        $('#plan-price-add .pprice-input').css('border-color', '#ee205e');
                    } else if (currentValue > maximumAllowed) {
                        $('#plan-price-add .proceed-pay').attr('disabled', true);
                        $('#plan-price-add .minmax-error').removeClass('d-none');
                        $('#plan-price-add .minmax-error').text('Maximum credits should not be greater than ' + maximumAllowed);
                        $('#plan-price-add .pprice-input').css('border-color', '#ee205e');
                    } else {
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
                    if (currentValue >= minimumAllowed) {
                        $('#plan-price-modal .modal-body').append(jsLoader);
                        $('.pricingTable.' + $(this).data('pname') + ' .amount_purchased').val($('#plan-price-modal .pprice-input').val());
                        $('.pricingTable.' + $(this).data('pname')).submit();
                    } else {
                        $('.minimum-error').addClass('d-none');
                        $('#plan-price-modal .pprice-input').css('border-color', '#74bf44');
                    }
                });

                $('[data-toggle="tooltip"]').tooltip();
                $('[data-bs-toggle="tooltip"]').tooltip();

                /* Select search js dropdown */
                function markMatch(text, term) {
                    if ($.trim(term) === '') {
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
        </script>
        <script type="text/javascript">
            geolocator.config({
                language: "en",
                google: {
                    version: "3",
                    key: "AIzaSyBT_LP_LQDGfpyOD2riWfmEpy9R484iB9s"
                }
            });
            window.onload = function() {
                var options = {
                    enableHighAccuracy: true,
                    timeout: 5000,
                    maximumWait: 10000, // max wait time for desired accuracy
                    maximumAge: 0, // disable cache
                    desiredAccuracy: 30, // meters
                    fallbackToIP: true, // fallback to IP if Geolocation fails or rejected
                    addressLookup: true, // requires Google API key if true
                };
                geolocator.locate(options, function(err, location) {
                    if (!err) {
                        if (typeof location != 'undefined' && typeof location.address == 'object') {
                            $('#country_code').val(location.address.countryCode);
                            itlMobile.setCountry(location.address.countryCode);
                        }
                    }
                });
            };
        </script>
        <!-- Dial Codes js -->

        <script type="text/javascript">
            function checkMobileValid(mobile) {
                if (mobile.length <= 7) {
                    $('#mobval').addClass('text-danger');
                    return 'Enter a valid Mobile Number';
                } else if (isNaN(mobile)) {
                    $('#mobval').addClass('text-danger');
                    return 'Enter a valid Mobile Number';
                } else {
                    $('#mobval').removeClass('text-danger');
                    return '';
                }
            }

            function IsvalidEmail(mailid) {
                var str = mailid
                var flag = true;
                var at = '@';
                var dot = '.';
                var lat = str.indexOf(at)
                var lstr = str.length
                var ldot = str.indexOf(dot)
                if (str.indexOf(at) == -1) {
                    flag = false;
                }
                if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr)
                    flag = false;
                if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr)
                    flag = false;
                if (str.indexOf(at, (lat + 1)) != -1)
                    flag = false;
                if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot)
                    flag = false;
                if (str.indexOf(dot, (lat + 2)) == -1)
                    flag = false;
                if (str.indexOf(' ') != -1)
                    flag = false;
                if (flag)
                    return true;
                else
                    return false;
            }

            function checkStrength(password) {
                var strength = 0;
                var passStrength = '';
                $('#result').removeClass('text-danger text-warning text-success');
                if (password.length < 6) {
                    $('#result').addClass('text-danger');
                    return 'Too short';
                }
                if (password.length > 7) strength += 1
                // If password contains both lower and uppercase characters, increase strength value.
                if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
                // If it has numbers, characters and one special character, increase strength value.
                if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/) && password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
                // If it has one special character, increase strength value.
                // if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
                // If it has two special characters, increase strength value.
                // if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
                // Calculated strength value, we can return messages
                // If value is less than 2
                if (strength <= 2) {
                    $('#passStrength').val('');
                    $('#result').addClass('text-warning');
                    return 'Weak password';
                    /* } else if (strength == 2) {
                            $('#result').removeClass();
                            $('#result').addClass('good');
                            return 'Good'; */
                } else {
                    $('#passStrength').val('strong');
                    $('#result').addClass('text-success');
                    return 'Strong password';
                }
            }

            function Trim(s) {
                // Remove leading spaces and carriage returns
                while ((s.substring(0, 1) == ' ') || (s.substring(0, 1) == '\n') || (s.substring(0, 1) == '\r')) {
                    s = s.substring(1, s.length);
                }
                // Remove trailing spaces and carriage returns
                while ((s.substring(s.length - 1, s.length) == ' ') || (s.substring(s.length - 1, s.length) == '\n') || (s.substring(s.length - 1, s.length) == '\r')) {
                    s = s.substring(0, s.length - 1);
                }
                return s;
            }

            $(document).ready(function() {


                $('body').on('blur', '#email', function() {
                    if ($('#email').val() != '') {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            async: true,
                            cache: false,
                        });
                        $.ajax({
                            url: "https://app.zeppay.com/checkemailexist",
                            type: 'POST',
                            data: {
                                'email': $('#email').val(),
                            },
                            success: function(data) {
                                if (data == '1') {
                                    $('#exists').show();
                                    return false;
                                } else {
                                    $('#exists').hide();
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                alert(textStatus, errorThrown);
                            }
                        });

                    }
                });

                $('#business_type').change(function() {
                    $('#business_type-error').html('');
                    $('#business_type-error').removeClass('text-danger');
                    $('#business_type').css('border-color', '#ced4da');
                });

                $('#company_name').keyup(function() {
                    $('#company_name-error').html('');
                    $('#company_name-error').removeClass('text-danger');
                    $('#company_name').css('border-color', '#ced4da');
                });

                $('#fullname').keyup(function() {
                    $('#fullname-error').html('');
                    $('#fullname-error').removeClass('text-danger');
                    $('#fullname').css('border-color', '#ced4da');
                });

                $('#country_code').change(function() {
                    $('#country_code-error').html('');
                    $('#country_code-error').removeClass('text-danger');
                    $('#mobile').trigger('keyup');
                });

                $('#mobile').keyup(function() {
                    $('#mobval').html('');
                    $('#mobval').removeClass('text-danger');
                    $('#mobile').css('border-color', '#ced4da');
                    $('#country_code').trigger('change');
                    $('#mobval').html(checkMobileValid($('#mobile').val()));
                });

                $('#email').keyup(function() {
                    $('#email-error').html('');
                    $('#email-error').removeClass('text-danger');
                    $('#email').css('border-color', '#ced4da');
                });

                $('#password').keyup(function() {
                    $('#password-error').html('');
                    $('#password-error').removeClass('text-danger');
                    $('#password').css('border-color', '#ced4da');
                    $('#result').html(checkStrength($('#password').val()));
                });

                // Signup form submit
                $('#frmcreatetrial').on('submit', function(e) {
                    // e.preventDefault();
                    $('.result-message').html('');
                    $('#business_type-error').removeClass('text-danger');
                    $('#company_name-error').removeClass('text-danger');
                    $('#fullname-error').removeClass('text-danger');
                    $('#country_code-error').removeClass('text-danger');
                    $('#mobval').removeClass('text-danger');
                    $('#email-error').removeClass('text-danger');
                    $('#password-error').removeClass('text-danger');

                    $('#business_type').css('border-color', '#198754');
                    $('#company_name').css('border-color', '#198754');
                    $('#fullname').css('border-color', '#198754');
                    // $('.iti__selected-flag').css('border', 'none');
                    $('#mobile').css('border-color', '#198754');
                    $('#email').css('border-color', '#198754');
                    $('#password').css('border-color', '#198754');
                    $('#password').css('border-color', '#198754');

                    var sendOTP = true,
                        validForm = true;

                    if ($('#business_type').val() == '') {
                        $('#business_type').css('border-color', '#dc3545');
                        $('#business_type-error').addClass('text-danger');
                        $('#business_type-error').html('Please select a Business Type');
                        validForm = false;
                    }

                    if (Trim($('#company_name').val()) == '') {
                        $('#company_name').css('border-color', '#dc3545');
                        $('#company_name-error').addClass('text-danger');
                        $('#company_name-error').html('Please enter your Company Name');
                        validForm = false;
                    }

                    if (Trim($('#fullname').val()) == '') {
                        $('#fullname').css('border-color', '#dc3545');
                        $('#fullname-error').addClass('text-danger');
                        $('#fullname-error').html('Please enter your Full Name');
                        validForm = false;
                    }

                    if ($('#country_code').val() == '') {
                        // $('.iti__selected-flag').css('border', '1px solid #dc3545');
                        $('#mobile').css('border-color', '#dc3545');
                        $('#country_code-error').addClass('text-danger');
                        $('#country_code-error').html('Please select a Country');
                        validForm = false;
                    }

                    if ($('#mobile').val() == '') {
                        $('#mobile').css('border-color', '#dc3545');
                        $('#mobval').addClass('text-danger');
                        $('#mobval').html('Please enter your Mobile Number');
                        validForm = false;
                    } else if (!$.isNumeric(Trim($('#mobile').val()))) {
                        $('#mobile').css('border-color', '#dc3545');
                        $('#mobval').addClass('text-danger');
                        $('#mobval').html('Please enter a valid Mobile Number');
                        validForm = false;
                    } else if ($('#mobile').val().length <= 7) {
                        $('#mobile').css('border-color', '#dc3545');
                        $('#mobval').addClass('text-danger');
                        $('#mobval').html('Please enter a valid Mobile Number');
                        validForm = false;
                    } else {
                        checkMobileValid($('#mobile').val());
                    }

                    if (Trim($('#email').val()) == '') {
                        $('#email').css('border-color', '#dc3545');
                        $('#email-error').addClass('text-danger');
                        $('#email-error').html('Please enter your Email');
                        validForm = false;
                    } else if (!IsvalidEmail(Trim($('#email').val()))) {
                        $('#email').css('border-color', '#dc3545');
                        $('#email-error').addClass('text-danger');
                        $('#email-error').html('Please enter a valid Email');
                        validForm = false;
                    }

                    if (Trim($('#password').val()) == '') {
                        $('#password').css('border-color', '#dc3545');
                        $('#password-error').addClass('text-danger');
                        $('#password-error').html('Please enter a strong password...');
                        validForm = false;
                    } else {
                        $('#result').html(checkStrength($('#password').val()));
                    }

                    if (Trim($('#passStrength').val()) == '') {
                        $('#password').css('border-color', '#dc3545');
                        $('#password-error').addClass('text-danger');
                        $('#password-error').html(`Password should contains:` +
                            `<ul><li>Minimum 8 charecters</li>` +
                            `<li>One alpha-numeric (Ex: 987)</li>` +
                            `<li>one upper-case (Ex: ZEP)</li>` +
                            `<li>atleast one special character (Ex: @#$)</li></ul>`
                        );
                        validForm = false;
                    }

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        async: false
                    });
                    $.ajax({
                        url: "https://app.zeppay.com/checkemailexist",
                        type: 'POST',
                        data: {
                            'email': $('#email').val(),
                        },
                        success: function(data) {
                            if (data == '1') {
                                $('#exists').show();
                                validForm = false;
                            } else {
                                $('#exists').hide();
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert(textStatus, errorThrown);
                        }
                    });

                    if ($('#exists').is(':visible')) {
                        $('.btn-createacc').prop('disabled', false);
                        $('.btn-createacc').html($('.btn-createacc').data('default-text'));
                        validForm = false;
                    }

                    // return true;
                    if (validForm) {
                        $('.btn-createacc').data('default-text', $('.btn-createacc').html());
                        $('.btn-createacc').prop('disabled', true);
                        $('.btn-createacc').html($('.btn-createacc').data('loading-text'));
                        /* $.ajax({
                            url: "",
                            type: 'POST',
                            data: {
                                'fname' : $('#fullname').val(),
                                'mobile' : $('#mobile').val(),
                            },
                            success: function(data){
                                if(data == '1') {
                                    $('#mobile-number').text($('#mobile').val());
                                    $('.js-otp-input').attr('required', true);
                                    $('.init-sign-up').addClass('d-none').hide('');
                                    $('.init-verify').removeClass('d-none').show('');
                                    validForm = false;
                                }else{
                                    $('#exists').hide();
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown){
                                alert(textStatus, errorThrown);
                            }
                        }); */
                    }
                    // else
                    // {
                    //     console.log('error - ', validForm);
                    // }
                    return validForm;

                });

                $('body').on('submit', '.init-verify', function() {
                    $(this).attr('action', "https://app.zeppay.com/verify-signup");
                    $('.btn-verify-otp').data('default-text', $('.btn-verify-otp').html());
                    $('.btn-verify-otp').prop('disabled', true);
                    $('.btn-verify-otp').html($('.btn-verify-otp').data('loading-text'));
                    return true;
                });

            });

            var itlMobile = window.intlTelInput(document.querySelector('#mobile'), {
                initialCountry: 'auto',
                preferredCountries: ['IN', 'SG', 'US'],
                utilsScript: "https://app.zeppay.com/zeppay/int-tel-input/js/utils.js",
                bootstrap5: true,
                /* geoIpLookup: function(success, failure) {
                    $.get("https://ipinfo.io", function() {}, 'jsonp').always(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : '';
                        success(countryCode);
                    });
                }, */
            });
            document.querySelector('#mobile').addEventListener('countrychange', function() {
                var countryData = itlMobile.getSelectedCountryData();
                if (typeof countryData != 'undefined') {
                    var country_code = itlMobile.getSelectedCountryData();
                    if (jQuery.isEmptyObject(country_code)) {
                        $('#country_code').val('');
                        $('#dial_code').val('');
                    } else {
                        $('#dial_code').val(country_code.dialCode);
                        $('#country_code').val(country_code.iso2.toUpperCase());
                    }
                } else {
                    $('#country_code').val('');
                }
                $('#country_code').trigger('change');
            });
        </script>
    </div>
    <?php
    include( './includes/footer.php');
?>
</body>

</html>