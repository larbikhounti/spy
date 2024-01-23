// this script is used to take screenshot and save a spapshot of the page
// in the app/images/{user_id} folder

const puppeteer = require('puppeteer');
//create a folder for the user
const fs = require('fs');
const mkdirp = require('mkdirp');

const url = process.argv[2];
const user_id = process.argv[3];
const country = process.argv[4].split(' ');


for (let i = 0; i < country.length; i++) {
    let dir =  `../public/images/${user_id}/${country[i]}`;
    if (fs.existsSync(dir)){
        console.log('removing old screenshot');
        fs.unlinkSync(`${dir}/screenshot.png`);
    }
    if (!fs.existsSync(dir)){
        console.log('directory does not exist, creating one');
        mkdirp.sync(dir);
    }
    (async () => {
        const browser = await puppeteer.launch({ headless: true});
        const page = await browser.newPage();
        await page.goto(url);
        await page.screenshot(
            { path: `${dir}/screenshot.png` , fullPage: true}
        );
        await browser.close();
        console.log('Screenshot captured successfully.');
    })();
}
