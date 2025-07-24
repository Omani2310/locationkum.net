@echo off
echo 🚀 بدء الربط التلقائي مع GitHub...
echo.
echo 📋 التعليمات:
echo - سيتم مراقبة الملفات كل 30 ثانية
echo - أي تغيير سيتم رفعه تلقائياً إلى GitHub
echo - اضغط Ctrl+C لإيقاف المراقبة
echo.

powershell -ExecutionPolicy Bypass -File "%~dp0watch-files.ps1"

pause 