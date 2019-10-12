const gulp = require('gulp')
const exec = require('exec-sh')

const _rootPath = "C:\\Users\\Greg\\Development-Hard-Links-Folder\\magento-core\\magento2\\";
const rootPath = _rootPath;

const _binMagento = "bin\\magento";
const binMagento = _binMagento;

const _magentoCommand = `php ${rootPath}${binMagento}`;
const magentoCommand = _magentoCommand;

//Generates magento URI
gulp.task('m-uri',async ()=>{
    const _command = `${magentoCommand} dev:urn-catalog:generate ${rootPath}.idea\\misc.xml`;
    const command = _command;

    console.log(command);
    exec(command)
})

//Cleans Magento cache
gulp.task('m-clean',async ()=>{
    const _command = `${magentoCommand} cache:flush`
    const command = _command;
    exec(command);
})

//Deploys magento static files
gulp.task('m-static', async () => {
    const _command = `${magentoCommand} setup:static-content:deploy -f`;
    let command = _command;

    exec(command);
})

//Runs composer autoload
gulp.task('c-autoload', async () => {
    const _command = `composer dump-autoload`;
    let command = _command;
    exec(command)
})


