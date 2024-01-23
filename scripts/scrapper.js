// this script is used to take screenshot and save a spapshot of the page
// in the app/images/{user_id} folder

const puppeteer = require('puppeteer');
//create a folder for the user
const fs = require('fs');
const path = require('path');

const url = process.argv[2];
const user_id = process.argv[3];
const country = process.argv[4].split(' ');

for (let i = 0; i < country.length; i++) {
    const dir = '../storage/app/images/' + user_id+ '/' + country[i];
    if (fs.existsSync(dir)){
        fs.unlinkSync(`../storage/app/images/${user_id}/${country[i]}/screenshot.png`);
    }
    if (!fs.existsSync(dir)){
        fs.mkdirSync(dir);
    }
    (async () => {
        const browser = await puppeteer.launch({ headless: true});
        const page = await browser.newPage();
        await page.goto(url);
        await page.screenshot(
            { path: `../storage/app/images/${user_id}/${country[i]}/screenshot.png` , fullPage: true}
        );
        await browser.close();
        console.log('Screenshot captured successfully.');
    })();
}
