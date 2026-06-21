const fs = require('fs');
let c = fs.readFileSync('c:/laragon/www/portofolio/resources/views/portfolio/index.blade.php', 'utf8');

c = c.replace(/PT ATI Indonesia [^J]+Jan/g, 'PT ATI Indonesia · Jan');
c = c.replace(/DISKOMINFO Kab. Karawang [^S]+Sep/g, 'DISKOMINFO Kab. Karawang · Sep');

// Wait, looking at the previous output: "A Jan" means the regex might match "A Jan".
// Let's also make sure we remove anything after "Indonesia" and before "Jan" that is not space or dot.
// Actually `[^J]+` catches EVERYTHING between them, including spaces. That's fine! 
// Let's do it.

fs.writeFileSync('c:/laragon/www/portofolio/resources/views/portfolio/index.blade.php', c, 'utf8');
console.log("Fixed more chars");
