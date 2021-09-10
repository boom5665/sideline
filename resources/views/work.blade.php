<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-2">
        <div class="row" id="form">
            <div class="col-md-4 offset-md-4" style="background-color: lightblue;">
                <div class="needs-validation" novalidate>
                    <h1 class="text-center">Registration</h1>
                    <hr>
                    <div class="form-group">
                        Name<input id="name" type="text" class="form-control" pattern="^{2,15}$" required >
                        <div class="valid-feedback">Valid</div>
                        <div class="invalid-feedback">a to z only (2 to 15 long)</div>
                    </div>
                    <div class="form-group">
                        E-mail<input type="email" id="email" class="form-control">
                        <div class="valid-feedback">Valid</div>
                        <div class="invalid-feedback">Not a valid email address</div>
                    </div>
                    <div class="form-group">
                        Password<input type="text" id="password-field" class="form-control" required>
                        <div class="valid-feedback">Valid</div>
                        <div class="invalid-feedback">Password incorrect</div>
                    </div>
                    <div class="form-group">
                        Confirm Password<input type="text" id="cPwdId" class="form-control myCpwdClass" required>
                        <div class="valid-feedback">Valid</div>
                        <div class="invalid-feedback">Confirm Not match</div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="agreeId" class="custom-control-input form-control" required>
                            <label for="agreeId" id="agreeLabelId" class="custom-control-label">ข้าพเจ้าอายุมากกว่า 18
                                ปี ตามกฎหมาย เข้าใจและตกลงตาม
                                เงื่อนไขการให้บริการ และ นโยบายความเป็นส่วนตัว </label>
                        </div>
                    </div>

                    <div class="form-group">

                        <input type="submit" class="submitR" value="สมัคร" id="submitBtn" onclick="onVerify()" disabled>
                    </div>
                </div>
            </div>
        </div>



        <div class="formstyleR" id="verify">
            <form id="send-invite-form" action=" {{ route('Register.saveregis') }}" method="POST">
                {{ csrf_field() }}
                <div class="card-description">
                    <div class="card-description-nemaR card-description-nemaH-R">
                        SIDELINE-BKK
                    </div>
                    <div class="card-description-nemaR">
                        สมัคเลย ฟรี !
                    </div>
                </div>
                <div class="form-group">
                    <label class="regis col-sm-12" for="email">ชื่อผู้ใช้</label>
                    <img class="icon2R" src="{{ url('/images/user2.png') }}" alt="Image" />
                    <div id="verifyName" type="text" name="name" class="inputR"></div>
                </div>
                <div class="form-group ">
                    <label class="regis col-sm-12" for="email">อีเมลล์</label>
                    <img class="iconR" src="http://127.0.0.1:8000/images/email.png" alt="Image">
                    <div id="verify-Email" name="email" type="text" class="inputR "></div>

                </div>

                <div class="form-group">
                    <label class="regis col-sm-12" for="email">รหัสผ่าน</label>
                    <img class="icon2R" src="{{ url('/images/lock.png') }}" alt="Image" />
                    <div id="verify-password-field" name="password" type="password" class="inputtwoR inputR"></div>
                    <div toggle="#password-field" class="iconeye icon toggle-password"
                        src="{{ url('/images/eyess.png') }}"></div>
                </div>
                <div style="text-align: center;">
                    <button type="button" class="submitW" onclick="onCancel()">แก้ไข</button>
                    <button type="submit" class="submitW">ตกลง</button>
                </div>
            </form>
        </div>


</body>

</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // ----------- Set all elements as INVALID --------------
        var myInputElements = document.querySelectorAll(".form-control");
        var i;
        for (i = 0; i < myInputElements.length; i++) {
            myInputElements[i].classList.add('is-invalid');
            myInputElements[i].classList.remove('is-valid');
        }
        // ------------ Check passwords similarity --------------
        $('#password-field, #cPwdId').on('keyup', function() {
            if ($('#password-field').val() != '' && $('#cPwdId').val() != '' && $('#password-field')
                .val() == $('#cPwdId')
                .val()) {
                $('#cPwdValid').show();
                $('#cPwdInvalid').hide();
                $('#cPwdInvalid').html('Passwords Match').css('color', 'green');
                $('.myCpwdClass').addClass('is-valid');
                $('.myCpwdClass').removeClass('is-invalid');
                $("#submitBtn").attr("disabled", false);
                for (i = 0; i < myInputElements.length; i++) {
                    var myElement = document.getElementById(myInputElements[i].id);
                    if (myElement.classList.contains('is-invalid')) {
                        $("#submitBtn").attr("disabled", true);

                        break;
                    }
                }
            } else {
                $('#cPwdValid').hide();
                $('#cPwdInvalid').show();
                $('#cPwdInvalid').html('Not Matching').css('color', 'red');
                $('.myCpwdClass').removeClass('is-valid');
                $('.myCpwdClass').addClass('is-invalid');
                $("#submitBtn").attr("disabled", true);

            }
        });
        // ----------------- Validate on submit -----------------
        let currForm = document.getElementById('form');
        currForm.addEventListener('submit', function(event) {
            if (currForm.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                $("#submitBtn").attr("disabled", false);
                currForm.classList.add('was-validated');
            }
        }, false);
        // ----------------- Validate on input -----------------
        currForm.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener(('input'), () => {
                if (input.checkValidity()) {
                    input.classList.remove('is-invalid');
                    input.classList.add('is-valid');
                } else {
                    input.classList.remove('is-valid');
                    input.classList.add('is-invalid');
                }
                var is_valid = $('.form-control').length === $('.form-control.is-valid').length;
                // $("#submitBtn").attr("disabled", !is_valid);
                if (is_valid) {
                    $("#submitBtn").attr("disabled", false);
                } else {
                    $("#submitBtn").attr("disabled", true);

                }
            });
        });
        // ------------------------------------------------------
    });
</script>

<script>
    $(document).ready(function() {
        document.getElementById("verify").style.display = "none";
        document.getElementById("committed").style.display = "none";
    })

    function onVerify() {
        document.getElementById("verifyName").innerHTML = document.getElementById("name").value;
        document.getElementById("verify-Email").innerHTML = document.getElementById("email").value;
        document.getElementById("verify-password-field").innerHTML = document.getElementById("password-field").value;
        document.getElementById("verify").style.display = "block";
        document.getElementById("form").style.display = "none";
    }

    function onCommit() {
        document.getElementById("form").style.display = "none";
        document.getElementById("verify").style.display = "none";
        document.getElementById("committed").style.display = "block";
    }

    function onCancel() {
        document.getElementById("form").style.display = "block";
        document.getElementById("verify").style.display = "none";

    }
    $(".toggle-password").click(function() {
        $(this).toggleClass("iconeye iconeye2");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>










<style>
    input[type="submit"]:disabled {
        background-color: red;
    }

    .form-control.is-invalid,
    .was-validated .form-control:invalid {
        border-color: white;
        padding-right: calc(1.5em + .75rem);
        background-image: none !important;
        background-repeat: no-repeat;
        background-position: center right calc(.375em + .1875rem);
        background-size: calc(.75em + .375rem) calc(.75em + .375rem);
    }

    .form-control.is-valid,
    .was-validated .form-control:valid {
        border-color: white;
        padding-right: calc(1.5em + .75rem);
        background-image: none;

    }

</style>
