const fs = require('fs');
let c = fs.readFileSync('c:/laragon/www/portofolio/resources/views/portfolio/index.blade.php', 'utf8');

// The original file probably was read as Latin1 instead of UTF8 in powershell
// Let's replace the common broken chars.
c = c.replace(/â€”/g, '-');
c = c.replace(/â€¢/g, '·');
c = c.replace(/â€“/g, '-');

// Wait, the BOM might also be present. Let's remove it if it exists.
if (c.charCodeAt(0) === 0xFEFF) {
    c = c.slice(1);
}

fs.writeFileSync('c:/laragon/www/portofolio/resources/views/portfolio/index.blade.php', c, 'utf8');
console.log("Fixed");
