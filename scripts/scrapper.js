// this script is used to take screenshot and save a spapshot of the page
// in the app/images/{user_id} folder

const puppeteer = require('puppeteer');
//create a folder for the user
const fs = require('fs');
const mkdirp = require('mkdirp');

const url = process.argv[2];
const user_id = process.argv[3];
const country = process.argv[4].split(' ');

let result = [];
const proxyServer = 'http://20.219.183.188:3129';
const proxyOptions = {
    host: '91.202.230.219',
    port: 8080,
    type: 1, // SOCKS4 proxy type
  };
const browser = async () => await puppeteer.launch(
    { headless: true,
     args: [`--proxy-server=${proxyServer}`],
     ignoreHTTPSErrors: true,}
    );
for (let i = 0; i < country.length; i++) {
    let dir =  `../public/images/${user_id}/${country[i]}`;
    if (fs.existsSync(dir)){
        //console.log('removing old screenshot');
        if (fs.existsSync(`${dir}/screenshot.png`))
            fs.unlinkSync(`${dir}/screenshot.png`);
    }
    if (!fs.existsSync(dir)){
        
        mkdirp.sync(dir);
    }
   
   
 
   takeScreenShot(dir, url)
   
    result.push(country[i]);
}


async function takeScreenShot(dir, url) {

        const brows = await browser();
        const page = await brows.newPage();
        await page.goto(url);
        await page.screenshot(
            { path: `${dir}/screenshot.png` , fullPage: true}
        );
        await brows.close();
        
       
}
console.log(result);
