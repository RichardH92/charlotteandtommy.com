var gulp   = require('gulp')
var del    = require('del')
var config = require('../config')

var cleanTask = function (cb) {
  del([
    config.tasks.js.dest,
    config.tasks.images.dest,
    config.tasks.css.dest
  ]).then(function (paths) {
    cb()
  })
}

gulp.task('clean', cleanTask)
module.exports = cleanTask
