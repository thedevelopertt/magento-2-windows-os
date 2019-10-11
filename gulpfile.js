const gulp = require('gulp');
const exec = require('exec-sh')

const _magento = 'php bin/magento';
const magento = _magento;

function _magentoCommand(command){
    if(command.length > 0){
        return `${magento} ${command}`;
    }else {
        return '';
    }

}

const magentoCommand = _magentoCommand;


//Cleans Magento Cache
gulp.task('m-cache', async () => {
    exec(magentoCommand('cache:flush'));
})
