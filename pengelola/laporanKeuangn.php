<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan Mediora</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .font-poppins-semi-bold {
                font-family: "Poppins-SemiBold", sans-serif;
            }
            .font-poppins-italic {
                font-family: "Poppins-Italic", sans-serif;
            }
            .bg-conic-gradient {
                background: conic-gradient(
                    from 94.88deg at 50% 50%,
                    rgba(71, 193, 191, 0.6) 22.11538404226303%,
                    rgba(111, 217, 205, 0.6) 49.02962148189545%,
                    rgba(219, 244, 241, 0.6) 82.54064321517944%
                );
            }
            /* Background for entire page */
            .page-bg {
                background-image: url('./image/bg.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            /* More transparent sidebar */
            .sidebar-overlay {
                background: rgba(255, 255, 255, 0.5); /* Reduced opacity to 50% */
                backdrop-filter: blur(5px); /* Subtle blur effect */
            }
        }
    </style>
</head>
<body class="overflow-hidden">
    <!-- Background for entire page -->
    <div class="page-bg fixed inset-0 z-[-20]"></div>

    <div class="flex h-screen">
        <!-- Sidebar with more transparency -->
        <div class="relative w-[322px] h-full overflow-hidden">
            <!-- Background overlay with more transparency -->
            <div class="sidebar-overlay absolute inset-0 z-[-10]"></div>
            
            <!-- Sidebar content -->
            <div class="frame-1321317545 absolute left-[8px] top-[16px] w-[93.71px] p-[10px]">
                <img class="logo-aja-12 w-full h-[68px] object-cover" src="./image/logo aja.png" />
            </div>
            
            <div class="hai absolute left-[111px] top-[29px] text-[rgba(131,131,131,0.94)] text-center font-poppins-italic text-[10px]">Hai,</div>
            <div class="kang-koent-jie absolute left-[111px] top-[39px] text-black text-left font-poppins-semi-bold text-[21px]">Kang Koent Jie</div>
            <div class="keluar absolute left-[111px] top-[71px] text-[#284b63] text-left font-poppins-italic text-[8px] underline">Keluar</div>
            
            <div class="line-4 absolute left-0 top-[104px] w-full border-t border-black/50"></div>

            <!-- Navigation Menu -->
            <div class="frame-56 absolute left-[18px] top-[116px] flex flex-col gap-[3px] w-[273px]">
                <div class="frame-19 h-[46px] rounded-[6px] p-[8px_12px] flex items-center gap-[17px] hover:bg-[rgba(255,255,255,0.2)]">
                    <img class="vector w-[15.44px] h-[10.69px]" src="./image/vector0.svg" />
                    <div class="dashboard text-[#284b63] font-poppins-semi-bold text-[14px]">Dashboard</div>
                </div>
                <div class="frame-21 h-[46px] rounded-[6px] p-[8px_12px] flex items-center gap-[17px] hover:bg-[rgba(255,255,255,0.2)]">
                    <img class="group w-[15px] h-[14px]" src="./image/group0.svg" />
                    <div class="kelola-stok-obat text-[#284b63] font-poppins-semi-bold text-[14px]">Kelola Stok Obat</div>
                </div>
                <div class="frame-29 h-[46px] bg-[#3c949e] rounded-[6px] p-[8px_12px] flex items-center gap-[17px]">
                    <img class="vector2 w-[13px] h-[12px]" src="./image/vector1.svg" />
                    <div class="laporan-penjualan text-white font-poppins-semi-bold text-[14px]">Laporan Penjualan</div>
                </div>
                <div class="frame-22 h-[46px] rounded-[6px] p-[8px_12px] flex items-center gap-[17px] hover:bg-[rgba(255,255,255,0.2)]">
                    <img class="qlementine-icons-faq-16 w-[16px] h-[16px]" src="./image/logofaq.svg" />
                    <div class="konsultasi text-[#284b63] font-poppins-semi-bold text-[14px]">Konsultasi</div>
                </div>
                <div class="frame-26 h-[46px] rounded-[6px] p-[8px_12px] flex items-center gap-[17px] hover:bg-[rgba(255,255,255,0.2)]">
                    <img class="vector3 w-[14px] h-[17px]" src="./image/vector2.svg" />
                    <div class="kelola-pesanan text-[#284b63] font-poppins-semi-bold text-[14px]">Kelola Pesanan</div>
                </div>
                <div class="frame-27 h-[46px] rounded-[6px] p-[8px_12px] flex items-center gap-[17px] hover:bg-[rgba(255,255,255,0.2)]">
                    <img class="vector4 w-[13.52px] h-[12.38px]" src="./image/vector3.svg" />
                    <div class="keluar2 text-[#284b63] font-poppins-semi-bold text-[14px]">Keluar</div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <div class="frame-282 w-full h-[89px] bg-[rgba(60,148,158,0.9)] flex items-center justify-center">
                <div class="laporan-penjualan-mediora text-white font-poppins-semi-bold text-[30px]">Laporan Penjualan Mediora</div>
            </div>

            <div class="flex justify-center gap-[30px] mt-[50px] px-[20px]">
                <!-- Mingguan Card -->
                <div class="w-[225px] h-[158px] bg-conic-gradient rounded-[16px] border border-white border-opacity-86 shadow-lg flex flex-col items-center justify-center">
                    <img class="w-[106px] h-[87px]" src="./image/folder-plus0.svg" />
                    <div class="mingguan text-[#3c949e] font-poppins-semi-bold text-[12px] mt-[10px]">Mingguan</div>
                </div>

                <!-- Bulan Card -->
                <div class="w-[225px] h-[158px] bg-conic-gradient rounded-[16px] border border-white border-opacity-86 shadow-lg flex flex-col items-center justify-center">
                    <img class="w-[106px] h-[87px]" src="./image/folder-plus0.svg" />
                    <div class="bulan text-[#3c949e] font-poppins-semi-bold text-[12px] mt-[10px]">Bulan</div>
                </div>

                <!-- Tahun Card -->
                <div class="w-[225px] h-[158px] bg-conic-gradient rounded-[16px] border border-white border-opacity-86 shadow-lg flex flex-col items-center justify-center">
                    <img class="w-[106px] h-[87px]" src="./image/folder-plus0.svg" />
                    <div class="tahun text-[#3c949e] font-poppins-semi-bold text-[12px] mt-[10px]">Tahun</div>
                </div>
            </div>

            <div class="mediora-2025 absolute bottom-[20px] left-[41px] text-gray-400 font-poppins-semi-bold text-[16px]">
                Mediora © 2025
            </div>
        </div>
    </div>
</body>
</html>