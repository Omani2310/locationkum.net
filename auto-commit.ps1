# سكريبت الربط التلقائي مع GitHub
# يقوم برفع أي تغييرات تلقائياً إلى المستودع

param(
    [string]$CommitMessage = "Auto commit: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')"
)

Write-Host "🚀 بدء عملية الربط التلقائي..." -ForegroundColor Green

# التحقق من وجود تغييرات
$status = git status --porcelain
if ([string]::IsNullOrEmpty($status)) {
    Write-Host "✅ لا توجد تغييرات جديدة" -ForegroundColor Yellow
    exit 0
}

Write-Host "📝 التغييرات المكتشفة:" -ForegroundColor Cyan
git status --short

# إضافة جميع الملفات
Write-Host "📁 إضافة الملفات..." -ForegroundColor Blue
git add .

# عمل commit
Write-Host "💾 حفظ التغييرات..." -ForegroundColor Blue
git commit -m $CommitMessage

# رفع التغييرات
Write-Host "⬆️ رفع التغييرات إلى GitHub..." -ForegroundColor Blue
git push origin main

Write-Host "✅ تم الربط التلقائي بنجاح!" -ForegroundColor Green
Write-Host "📅 الرسالة: $CommitMessage" -ForegroundColor Cyan 