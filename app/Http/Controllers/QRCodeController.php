<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Endroid\QrCode\QrCode;
use Illuminate\Support\Facades\Response;
class QRCodeController extends Controller
{
    public function generatePromptPayQR()
    {
        // ข้อมูล PromptPay (เบอร์โทรศัพท์หรือเลขประจำตัวประชาชน)
        $promptPayData = '0812345678';

        // แปลงข้อมูล PromptPay เป็นข้อความสำหรับ QR code
        $promptPayQRText = 'promptpay://' . $promptPayData;

        // สร้าง QR code
        $qrCode = new QrCode($promptPayQRText);

        // กำหนดขนาดของ QR code
        $qrCode->setSize(300);

        // ส่งไฟล์ภาพกลับเป็น response
        return response($qrCode->writeString(), 200)->header('Content-Type', $qrCode->getContentType());
    }
}
