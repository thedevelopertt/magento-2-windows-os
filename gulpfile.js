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

gulp.task('m-setup', async () => {
    exec(magentoCommand('setup:upgrade'))
})

gulp.task('m-static', async () => {
    exec(magentoCommand('setup:static-content:deploy -f'))
})

//Watch Module

gulp.task('m-watch', async () => {
    gulp.watch('app/code/**/**/**/**/**/**/**',gulp.series('m-cache'))
})
