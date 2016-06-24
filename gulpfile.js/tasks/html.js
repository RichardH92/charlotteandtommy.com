var config       = require('../config')
if(!config.tasks.html) return

var browserSync  = require('browser-sync')
var gulp         = require('gulp')

var htmlTask = function() {
  return gulp.src(config.tasks.html.src)
    .pipe(browserSync.stream())
}

gulp.task('html', htmlTask)
module.exports = htmlTask
