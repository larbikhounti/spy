// this script is used to take screenshot and save a spapshot of the page
// in the app/images/{user_id} folder

const puppeteer = require('puppeteer');

const url = process.argv[2];

(async () => {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto(url);
    await page.screenshot({ path: './screenshot.png' });
    await browser.close();
    console.log('Screenshot captured successfully.');
})();