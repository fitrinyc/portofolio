const fs = require('fs');
let c = fs.readFileSync('c:/laragon/www/portofolio/resources/views/portfolio/index.blade.php', 'utf8');

c = c.replace(/<span class="greeting-wave">[^<]+<\/span>/g, '<span class="greeting-wave">👋</span>');
c = c.replace(/<span>2[^<]+National Award Winner<\/span>/g, '<span>2× National Award Winner</span>');
c = c.replace(/<div class="stat-number">2[^<]+<\/div>/g, '<div class="stat-number">2🏆</div>');
c = c.replace(/Indonesia[^J]+Jan/g, 'Indonesia · Jan');
c = c.replace(/Karawang[^S]+Sep/g, 'Karawang · Sep');

// Clean up any remaining "A,A" or similar before the dates
c = c.replace(/PT ATI Indonesia\s+A,A/g, 'PT ATI Indonesia ·');
c = c.replace(/DISKOMINFO Kab. Karawang\s+A,A/g, 'DISKOMINFO Kab. Karawang ·');

// Check for other potential bad characters
c = c.replace(/â€”/g, '-');
c = c.replace(/â€“/g, '-');
c = c.replace(/â€¢/g, '·');

fs.writeFileSync('c:/laragon/www/portofolio/resources/views/portfolio/index.blade.php', c, 'utf8');
console.log("Fixed more chars");
