var config       = require('../config')
if(!config.tasks.html) return

var browserSync  = require('browser-sync')
var gulp         = require('gulp')

var htmlTask = function() {
  return gulp.src(paths.src)
    .pipe(gulp.dest(paths.dest))
}

gulp.task('html', htmlTask)
module.exports = htmlTask
