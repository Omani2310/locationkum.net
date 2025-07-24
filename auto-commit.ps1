# Auto Sync Script with GitHub
# Automatically commits and pushes changes to repository

param(
    [string]$CommitMessage = "Auto commit: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')"
)

Write-Host "Starting automatic sync..." -ForegroundColor Green

# Check for changes
$status = git status --porcelain
if ([string]::IsNullOrEmpty($status)) {
    Write-Host "No new changes found" -ForegroundColor Yellow
    exit 0
}

Write-Host "Changes detected:" -ForegroundColor Cyan
git status --short

# Add all files
Write-Host "Adding files..." -ForegroundColor Blue
git add .

# Commit changes
Write-Host "Saving changes..." -ForegroundColor Blue
git commit -m $CommitMessage

# Push changes
Write-Host "Pushing to GitHub..." -ForegroundColor Blue
git push origin main

Write-Host "Automatic sync completed successfully!" -ForegroundColor Green
Write-Host "Commit message: $CommitMessage" -ForegroundColor Cyan 