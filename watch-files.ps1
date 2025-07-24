# File Monitoring Script for Auto Sync
# Monitors project changes and runs automatic sync

param(
    [int]$DelaySeconds = 30
)

Write-Host "Starting file monitoring for automatic sync..." -ForegroundColor Green
Write-Host "Checking every $DelaySeconds seconds" -ForegroundColor Cyan
Write-Host "Press Ctrl+C to stop monitoring" -ForegroundColor Red
Write-Host ""

try {
    while ($true) {
        # Check for changes
        $status = git status --porcelain
        
        if (-not [string]::IsNullOrEmpty($status)) {
            Write-Host "New changes detected..." -ForegroundColor Yellow
            
            # Run auto-commit script
            & "$PSScriptRoot\auto-commit.ps1"
            
            Write-Host "Waiting $DelaySeconds seconds..." -ForegroundColor Gray
        } else {
            Write-Host "No new changes - $(Get-Date -Format 'HH:mm:ss')" -ForegroundColor Gray
        }
        
        Start-Sleep -Seconds $DelaySeconds
    }
} catch {
    Write-Host "Monitoring stopped" -ForegroundColor Red
} 