<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class PromptPayController extends Controller
{
    public function generateQRCode()
    {
        // ข้อมูลที่ใช้สำหรับสร้าง PromptPay QR code
        $promptPayData = [
            'amount' => 100, // จำนวนเงินที่ต้องการโอน
            'phone_number' => '0812345678', // เบอร์โทรศัพท์ที่เชื่อมต่อกับ PromptPay
        ];

        // สร้าง PromptPay QR code
        $qrCode = QrCode::format('png')->size(400)->generate(json_encode($promptPayData));

        // ส่งไฟล์ QR code กลับไปแสดงในหน้า view
        return response($qrCode)->header('Content-type', 'image/png');
    }
}
