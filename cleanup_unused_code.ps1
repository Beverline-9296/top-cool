# Top-Cool Cleanup Script - Remove Unused Code
# Run this script with: powershell -ExecutionPolicy Bypass .\cleanup_unused_code.ps1

Write-Host "=== Top-Cool Cleanup Script ===" -ForegroundColor Cyan
Write-Host "Removing unused controllers, views, and files..." -ForegroundColor Yellow
Write-Host ""

# Remove unused controllers
Write-Host "Deleting unused controllers..." -ForegroundColor Green
if (Test-Path "app\Http\Controllers\AdminController.php") {
    Remove-Item "app\Http\Controllers\AdminController.php" -Force
    Write-Host "  ✓ Deleted AdminController.php" -ForegroundColor Gray
}
if (Test-Path "app\Http\Controllers\AuthController.php") {
    Remove-Item "app\Http\Controllers\AuthController.php" -Force
    Write-Host "  ✓ Deleted AuthController.php" -ForegroundColor Gray
}

# Remove unused view directories
Write-Host "Deleting unused view directories..." -ForegroundColor Green
if (Test-Path "resources\views\admin") {
    Remove-Item "resources\views\admin" -Recurse -Force
    Write-Host "  ✓ Deleted resources\views\admin\" -ForegroundColor Gray
}
if (Test-Path "resources\views\auth") {
    Remove-Item "resources\views\auth" -Recurse -Force
    Write-Host "  ✓ Deleted resources\views\auth\" -ForegroundColor Gray
}

# Remove unused appointment views (user-specific)
Write-Host "Deleting unused appointment views..." -ForegroundColor Green
if (Test-Path "resources\views\appointments\index.blade.php") {
    Remove-Item "resources\views\appointments\index.blade.php" -Force
    Write-Host "  ✓ Deleted appointments\index.blade.php" -ForegroundColor Gray
}
if (Test-Path "resources\views\appointments\show.blade.php") {
    Remove-Item "resources\views\appointments\show.blade.php" -Force
    Write-Host "  ✓ Deleted appointments\show.blade.php" -ForegroundColor Gray
}

# Remove unused layout
Write-Host "Deleting unused layouts..." -ForegroundColor Green
if (Test-Path "resources\views\layouts\app.blade.php") {
    Remove-Item "resources\views\layouts\app.blade.php" -Force
    Write-Host "  ✓ Deleted layouts\app.blade.php" -ForegroundColor Gray
}

# Remove EMAIL_SETUP_GUIDE.md (functionality now working)
if (Test-Path "EMAIL_SETUP_GUIDE.md") {
    Remove-Item "EMAIL_SETUP_GUIDE.md" -Force
    Write-Host "  ✓ Deleted EMAIL_SETUP_GUIDE.md" -ForegroundColor Gray
}

Write-Host ""
Write-Host "=== Cleanup Complete! ===" -ForegroundColor Green
Write-Host ""
Write-Host "Removed files:" -ForegroundColor Cyan
Write-Host "  - 2 unused controllers (Admin, Auth)"
Write-Host "  - 2 view directories (admin, auth)"
Write-Host "  - 2 user appointment views"
Write-Host "  - 1 unused layout"
Write-Host "  - 1 redundant guide"
Write-Host ""
Write-Host "Next steps:" -ForegroundColor Yellow
Write-Host "  1. Clean up routes/web.php (remove commented code)"
Write-Host "  2. Test the appointment booking system"
Write-Host "  3. Delete this cleanup script if no longer needed"
Write-Host ""
