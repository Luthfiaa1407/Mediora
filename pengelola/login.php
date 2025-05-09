<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities { 
            .font-poppins-semi-bold { font-family: "Poppins-SemiBold", sans-serif; } 
            .font-poppins-bold-italic { font-family: "Poppins-BoldItalic", sans-serif; } 
            .font-poppins-medium { font-family: "Poppins-Medium", sans-serif; } 
            .font-poppins-regular { font-family: "Poppins-Regular", sans-serif; } 
            .font-inter-regular { font-family: "Inter-Regular", sans-serif; } 
            
            .verification-notification {
                position: absolute;
                top: 100px; 
                left: 50%;
                transform: translateX(-50%);
                background-color: #4CAF50;
                color: white;
                padding: 16px 24px;
                border-radius: 8px;
                width: 300px;
                text-align: center;
                box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
                z-index: 100;
                display: flex;
                flex-direction: column;
                gap: 8px;
            }
            
            .verification-notification strong {
                font-weight: 600;
                font-size: 16px;
            }
            
            .verification-notification p {
                font-size: 14px;
                opacity: 0.9;
            }
            
            .verification-notification .continue-btn {
                background: rgba(255, 255, 255, 0.2);
                border-radius: 4px;
                padding: 6px 12px;
                font-weight: 600;
                font-size: 14px;
                margin-top: 8px;
                cursor: pointer;
                transition: background 0.2s;
            }
            
            .verification-notification .continue-btn:hover {
                background: rgba(255, 255, 255, 0.3);
            }
        }
    </style>
</head>

<body class="overflow-hidden">
    <!-- Login Page (initially visible) -->
    <div id="login-page" class="halaman-login bg-white rounded-[16px] h-[878px] relative shadow-[0px_4px_40.2px_0px_rgba(0,0,0,0.25)] overflow-hidden w-full max-w-[1920px] mx-auto">
        <img class="w-full h-full absolute inset-0 object-cover" src="./image/bg.png" />

        <div class="ellipse-28 bg-white rounded-full opacity-[0.48] w-[251px] h-[87px] absolute left-[571px] top-[137px] blur-[10.15px]"></div>
        <div class="ellipse-29 bg-[rgba(255,255,255,0.56)] rounded-full w-[251px] h-[87px] absolute left-[621px] top-[157px] blur-[22.8px]"></div>
        <div class="ellipse-38 bg-[rgba(255,255,255,0.56)] rounded-full w-[381px] h-[87px] absolute left-[546px] top-[676px] blur-[22.8px]"></div>
        <div class="ellipse-36 bg-[rgba(255,255,255,0.39)] rounded-full w-[140px] h-[71px] absolute left-[1147.6px] top-[109.22px] origin-[0_0] rotate-[87.576deg] scale-[1,1] blur-[10.15px]"></div>
        <div class="ellipse-30 bg-[rgba(255,255,255,0.56)] rounded-full w-[402px] h-[56px] absolute left-[283px] top-[217px] blur-[10.15px]"></div>
        <div class="ellipse-31 bg-[rgba(255,255,255,0.56)] rounded-full w-[188.37px] h-[55px] absolute left-[324.56px] top-[281.5px] origin-[0_0] rotate-[12.653deg] scale-[1,1] blur-[10.15px]"></div>
        <div class="ellipse-32 bg-[rgba(255,255,255,0.56)] rounded-full w-[188.37px] h-[55px] absolute left-[309.05px] top-[335px] origin-[0_0] rotate-[12.653deg] scale-[1,1] blur-[10.15px]"></div>
        <div class="ellipse-33 bg-[rgba(255,255,255,0.56)] rounded-full w-[188.37px] h-[55px] absolute left-[312.05px] top-[524px] origin-[0_0] rotate-[12.653deg] scale-[1,1] blur-[10.15px]"></div>
        <div class="ellipse-34 bg-[rgba(255,255,255,0.56)] rounded-full w-[268.32px] h-[55px] absolute left-[312.88px] top-[592px] origin-[0_0] rotate-[17.878deg] scale-[1,1] blur-[10.15px]"></div>
        <div class="ellipse-35 bg-[rgba(255,255,255,0.57)] rounded-full w-[156.71px] h-[96.44px] absolute left-[806.53px] top-[512.06px] origin-[0_0] rotate-[90.034deg] scale-[1,1] blur-[10.15px]"></div>
        <div class="ellipse-37 bg-[rgba(255,255,255,0.57)] rounded-full w-[156.71px] h-[96.44px] absolute left-[816.53px] top-[192.06px] origin-[0_0] rotate-[90.034deg] scale-[1,1] blur-[25.8px]"></div>

        <!-- Main content frame -->
        <div class="frame-9 bg-[rgba(255,255,255,0.48)] rounded-[16px] border border-[rgba(255,255,255,0.86)] w-[956px] h-[573px] absolute left-[calc(50%-488px)] top-[calc(50%-282px)] shadow-[0px_11px_47.3px_0px_rgba(0,0,0,0.43)] overflow-hidden backdrop-blur-[9px]">
            <div class="sign-in text-[#424242] text-center font-poppins-semi-bold text-[40px] font-[600] absolute left-[401px] top-[113px]">SIGN IN</div>
            <div class="as-apotek-manager text-[#a9a9a9] text-center font-poppins-bold-italic text-[9px] tracking-[0.05em] font-[700] italic absolute left-[421px] top-[161px]">(AS APOTEK MANAGER)</div>

            <div class="input flex flex-col gap-[5px] items-start justify-start w-[300px] h-[60px] absolute left-[329px] top-[183px]">
                <div class="label text-[#474747] text-left font-poppins-semi-bold text-[13px] tracking-[0.2em] font-[600] uppercase relative">Username / Email</div>
                <input type="text" id="username" class="frame-92 bg-white rounded-[6px] border border-[#cacaca] w-full h-[40px] px-3 py-2 shadow-[0px_4px_6.6px_0px_rgba(0,0,0,0.07)] text-[#117c6f] font-poppins-medium text-[14px] focus:outline-none focus:border-[#117c6f]"
                    placeholder="Type your username / email ...">
            </div>

            <div class="input2 flex flex-col gap-[4px] items-start justify-start w-[300px] h-[53px] absolute left-[329px] top-[251px]">
                <div class="label text-[#474747] text-left font-poppins-semi-bold text-[13px] tracking-[0.2em] font-[600] uppercase relative">Password</div>
                <input type="password" id="password" class="frame-93 bg-white rounded-[6px] border border-[#cacaca] w-full h-[40px] px-3 py-2 shadow-[0px_4px_6.6px_0px_rgba(0,0,0,0.07)] text-[#117c6f] font-poppins-medium text-[14px] focus:outline-none focus:border-[#117c6f]"
                    placeholder="Type your secret password...">
            </div>

            <button id="signin-btn" class="frame-10 bg-[rgba(60,148,158,0.5)] rounded-[8px] p-[10px] flex flex-row gap-[10px] items-center justify-center w-[300px] h-[30px] absolute left-[329px] top-[354px] overflow-hidden hover:bg-[rgba(60,148,158,0.7)] transition-colors duration-200">
                <div class="button text-white text-left font-poppins-semi-bold text-[13px] font-[600] relative">SIGN IN</div>
            </button>

            <img class="logo-mediora-removebg-preview-1 w-[145px] h-[49px] absolute left-[669px] top-[14px] object-cover aspect-[145/49]" src="./image/logo.png" />
            <div class="sign-in2 text-[#424242] text-left font-poppins-semi-bold text-[28px] font-[600] absolute left-[805px] top-[14px]">SIGN IN</div>
            <div class="as-apotek-manager2 text-[#a9a9a9] text-center font-poppins-bold-italic text-[8px] tracking-[0.05em] font-[700] italic absolute left-[805px] top-[50px]">(AS APOTEK MANAGER)</div>

            <div class="forgot-your-password text-[#6bb2a0] text-right font-poppins-regular text-[12px] font-[400] absolute left-[493px] top-[314px] flex items-center justify-end hover:underline cursor-pointer">Forgot Your Password?</div>

            <div class="don-t-have-an-account-sign-up text-left font-inter-regular text-[14px] font-[400] absolute left-[376px] top-[493px] flex items-center justify-start">
                <span>
                    <span class="text-[#5f5f5f]">Don't have an account. </span>
                <span class="text-[#22577a] underline hover:cursor-pointer hover:opacity-80">Sign Up</span>
                </span>
            </div>

            <div class="frame-16 flex flex-col gap-[14px] items-center justify-start absolute left-[343px] top-[404px]">
                <div class="frame-13 flex flex-row gap-[8px] items-center justify-start flex-shrink-0 w-[272px] relative">
                    <div class="line-1 mt-[-1px] border-t border-[#5f5f5f] flex-1 h-0 relative"></div>
                    <div class="or text-[#5f5f5f] text-left font-inter-regular text-[14px] font-[400] relative flex items-center justify-start">Or</div>
                    <div class="line-2 mt-[-1px] border-t border-[#5f5f5f] flex-1 h-0 relative"></div>
                </div>
                <div class="group-4 flex-shrink-0 w-[42px] h-[42px] static">
                    <div class="frame-102 bg-white rounded-[8px] p-[6px] flex flex-row gap-[10px] items-start justify-start absolute left-[115px] top-[31px] shadow-[0px_4px_12px_0px_rgba(0,0,0,0.12)] overflow-hidden hover:bg-gray-100 cursor-pointer">
                        <img class="devicon-google flex-shrink-0 w-[30px] h-[30px] relative overflow-visible" src="./image/logogoogle.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- OTP Page (initially hidden) -->
    <div id="otp-page" class="hidden min-h-screen bg-cover bg-center bg-no-repeat relative" style="background-image: url('./image/bg.png');">
        <div class="relative w-full h-screen bg-white/0 overflow-hidden">
            <div id="notification-container" class="absolute top-32 left-0 right-0 flex justify-center z-50"></div>
            
            <!-- Main Card -->
            <div class="absolute inset-0 flex items-center justify-center px-4">
                <div class="w-full max-w-4xl bg-white/50 rounded-[16px] border border-white/90 shadow-[0px_11px_47.3px_rgba(0,0,0,0.43)] backdrop-blur-[9px] p-8 relative">
                    <img class="absolute right-8 top-4 w-[120px] h-[40px] object-contain" src="./image/logo.png" />
                    <div class="text-right mr-4 mt-2">
                        <div class="text-[24px] font-semibold text-[#424242]">SIGN IN</div>
                        <div class="text-[8px] italic font-bold tracking-wider text-[#a9a9a9]">(AS APOTEK MANAGER)</div>
                    </div>

                    <h2 class="text-[26px] font-semibold text-[#1e1e1e] text-center mt-12">Check your email</h2>
                    <p class="text-center text-[#989898] text-[12px] leading-tight mt-2">
                        <span class="font-semibold">Enter 5 digit code mentioned<br /></span>
                        <span id="user-email">in the email KangKoentJie@gmail.com</span>
                    </p>

                    <!-- OTP Inputs -->
                    <div class="flex justify-center gap-3 mt-6" id="otpContainer">
                        <input type="number" maxlength="1" class="otp-input w-12 h-12 text-center border-2 border-[#36bab5] rounded-[12px] text-xl font-semibold text-gray-800 outline-none" />
                        <input type="number" maxlength="1" class="otp-input w-12 h-12 text-center border-2 border-[#36bab5] rounded-[12px] text-xl font-semibold text-gray-800 outline-none" />
                        <input type="number" maxlength="1" class="otp-input w-12 h-12 text-center border-2 border-[#36bab5] rounded-[12px] text-xl font-semibold text-gray-800 outline-none" />
                        <input type="number" maxlength="1" class="otp-input w-12 h-12 text-center border-2 border-[#36bab5] rounded-[12px] text-xl font-semibold text-gray-800 outline-none" />
                        <input type="number" maxlength="1" class="otp-input w-12 h-12 text-center border-2 border-[#36bab5] rounded-[12px] text-xl font-semibold text-gray-800 outline-none" />
                    </div>

                    <!-- Verify Button -->
                    <button id="verifyBtn" disabled class="mt-6 mx-auto block w-[300px] h-[42px] bg-[#3c949e]/50 text-white text-[13px] font-semibold rounded-[8px] transition-colors duration-300 cursor-not-allowed">
                        verify code
                    </button>

                    <!-- Resend -->
                    <p class="text-center mt-6 text-[14px]">
                        <span class="text-[#989898]">Haven't got the email yet?</span>
                        <span class="text-[#648ddb] underline cursor-pointer"> Resend email</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Login Page Functionality
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');
        const signinBtn = document.getElementById('signin-btn');
        const loginPage = document.getElementById('login-page');
        const otpPage = document.getElementById('otp-page');
        const userEmailSpan = document.getElementById('user-email');
        const notificationContainer = document.getElementById('notification-container');

        function checkInputs() {
            if (usernameInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
                signinBtn.classList.remove('bg-[rgba(60,148,158,0.5)]');
                signinBtn.classList.add('bg-[#3c949e]', 'cursor-pointer');
            } else {
                signinBtn.classList.add('bg-[rgba(60,148,158,0.5)]');
                signinBtn.classList.remove('bg-[#3c949e]', 'cursor-pointer');
            }
        }

        usernameInput.addEventListener('input', checkInputs);
        passwordInput.addEventListener('input', checkInputs);

        signinBtn.addEventListener('click', function() {
            if (usernameInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
                this.classList.add('transform', 'scale-95');
                setTimeout(() => {
                    this.classList.remove('transform', 'scale-95');

                    // Show email in OTP page
                    userEmailSpan.innerHTML = `in the email ${usernameInput.value}`;

                    // Switch to OTP page
                    loginPage.classList.add('hidden');
                    otpPage.classList.remove('hidden');
                }, 100);
            }
        });

        // OTP Page Functionality
        const inputs = document.querySelectorAll('.otp-input');
        const button = document.getElementById('verifyBtn');

        inputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length > 1) input.value = input.value[0];
                if (input.value && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
                checkAllFilled();
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !input.value && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });

        function checkAllFilled() {
            const allFilled = Array.from(inputs).every(input => input.value.trim() !== '');
            button.disabled = !allFilled;
            button.classList.toggle('bg-[#3c949e]/50', !allFilled);
            button.classList.toggle('bg-[#3c949e]', allFilled);
            button.classList.toggle('cursor-not-allowed', !allFilled);
            button.classList.toggle('cursor-pointer', allFilled);
        }

        // Verification success functionality
        button.addEventListener('click', function() {
            if (!this.disabled) {
                const notification = document.createElement('div');
                notification.className = 'verification-notification';
                notification.innerHTML = `
                    <strong>OTP Verified!</strong>
                    <p>Your phone number has been successfully verified.</p>
                    <div class="continue-btn">Continue</div>
                `;
                
                // Clear any existing notifications
                notificationContainer.innerHTML = '';
                // Add new notification
                notificationContainer.appendChild(notification);
                
                // Continue button functionality
                notification.querySelector('.continue-btn').addEventListener('click', function() {
                    notification.remove();
                    alert('Proceeding to dashboard...');
                });
            }
        });
    </script>
</body>

</html>