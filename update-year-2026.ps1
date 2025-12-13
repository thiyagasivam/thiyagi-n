# PowerShell script to update year from 2025 to 2026 across all PHP files
# Run this script at the start of 2026

$workspacePath = "c:\xampp\htdocs\live\thiyagi-n"
$year2025 = "2025"
$year2026 = "2026"

# Get all PHP files excluding node_modules and other system folders
$files = Get-ChildItem -Path $workspacePath -Filter "*.php" -Recurse -File | 
    Where-Object { $_.FullName -notmatch "\\node_modules\\" -and 
                   $_.FullName -notmatch "\\.git\\" -and
                   $_.FullName -notmatch "\\vendor\\" }

$totalFiles = $files.Count
$updatedFiles = 0
$filesWithChanges = @()

Write-Host "Found $totalFiles PHP files to check..." -ForegroundColor Cyan
Write-Host ""

foreach ($file in $files) {
    $content = Get-Content -Path $file.FullName -Raw
    
    # Check if file contains 2025
    if ($content -match $year2025) {
        # Replace all occurrences of 2025 with 2026
        $newContent = $content -replace $year2025, $year2026
        
        # Write back to file
        Set-Content -Path $file.FullName -Value $newContent -NoNewline
        
        $updatedFiles++
        $filesWithChanges += $file.FullName
        Write-Host "Updated: $($file.Name)" -ForegroundColor Green
    }
}

Write-Host ""
Write-Host "========================================" -ForegroundColor Yellow
Write-Host "Update Complete!" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Yellow
Write-Host "Total files checked: $totalFiles" -ForegroundColor Cyan
Write-Host "Files updated: $updatedFiles" -ForegroundColor Green
Write-Host ""

if ($filesWithChanges.Count -gt 0) {
    Write-Host "Updated files:" -ForegroundColor Yellow
    $filesWithChanges | ForEach-Object { Write-Host "  - $_" -ForegroundColor Gray }
}

Write-Host ""
Write-Host "All occurrences of 2025 have been replaced with 2026" -ForegroundColor Green
Write-Host "Please review the changes before committing to Git!" -ForegroundColor Yellow
