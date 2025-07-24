# سكريبت مراقبة الملفات للربط التلقائي
# يراقب التغييرات في المشروع ويقوم بالربط التلقائي

param(
    [int]$DelaySeconds = 30
)

Write-Host "👀 بدء مراقبة الملفات للربط التلقائي..." -ForegroundColor Green
Write-Host "⏱️ فحص كل $DelaySeconds ثانية" -ForegroundColor Cyan
Write-Host "🛑 اضغط Ctrl+C لإيقاف المراقبة" -ForegroundColor Red
Write-Host ""

try {
    while ($true) {
        # التحقق من وجود تغييرات
        $status = git status --porcelain
        
        if (-not [string]::IsNullOrEmpty($status)) {
            Write-Host "🔄 تم اكتشاف تغييرات جديدة..." -ForegroundColor Yellow
            
            # تشغيل سكريبت الربط التلقائي
            & "$PSScriptRoot\auto-commit.ps1"
            
            Write-Host "⏳ انتظار $DelaySeconds ثانية..." -ForegroundColor Gray
        } else {
            Write-Host "✅ لا توجد تغييرات جديدة - $(Get-Date -Format 'HH:mm:ss')" -ForegroundColor Gray
        }
        
        Start-Sleep -Seconds $DelaySeconds
    }
} catch {
    Write-Host "❌ تم إيقاف المراقبة" -ForegroundColor Red
} 