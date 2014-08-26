/*
 * Shotofjoy gulpfile.js
 */

var dev = true;

var browserSync = require('browser-sync');
var gulp = require('gulp');
var prefix = require('gulp-autoprefixer');
var cache = require('gulp-cache');
var concat = require('gulp-concat');
var cssmin = require('gulp-cssmin');
var imagemin = require('gulp-imagemin');
var jshint = require('gulp-jshint');
var notify = require('gulp-notify');
var rename = require('gulp-rename');
var rimraf = require('gulp-rimraf');
var svgmin = require('gulp-svgmin');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

gulp.task('jshint', function() {
  gulp.src('./src/js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(notify({ message: 'JSHint task complete' }));
});

gulp.task('scripts', function() {
  if (dev) {
    gulp.src(['./src/js/*.js'])
      .pipe(jshint.reporter('default'))
      .pipe(concat('all.js'))
      .pipe(gulp.dest('./build/js'))
      .pipe(notify({ message: 'Scripts task complete '}));
  } else {
    gulp.src(['./src/js/*.js'])
      .pipe(jshint.reporter('default'))
      .pipe(concat('all.js'))
      .pipe(gulp.dest('./build/js'))
      .pipe(rename({ suffix: '.min' }))
      .pipe(uglify())
      .pipe(notify({ message: 'Scripts task complete '}));
  }
});

gulp.task('sass', function () {
  if (dev) {
    gulp.src('./src/scss/main.scss')
      .pipe(sass({
        errLogToConsole: true,
        sourceComments: 'map',
        sourceMap: 'main.map.css',
        includePaths: ['./src/scss']
      }))
      .pipe(prefix("last 1 version", "> 1%", "ie 8", "ie 7"))
      .pipe(gulp.dest('./build/css/'))
      .pipe(notify({ message: 'Sass task complete' }));
  } else {
    gulp.src('./src/scss/main.scss')
      .pipe(prefix("last 1 version", "> 1%", "ie 8", "ie 7"))
      .pipe(cssmin())
      .pipe(rename({ suffix: '.min' }))
      .pipe(gulp.dest('./build/css/'))
      .pipe(notify({ message: 'Sass task complete' }));
  }
});

gulp.task('images', function() {
  gulp.src('./src/img/*.{png,jpg,jpeg,gif,webp}')
    .pipe(imagemin({
      optimizationLevel: 3,
      progressive: true,
      interlaced: true
      }))
    .pipe(gulp.dest('./build/img/'))
    .pipe(notify({ message: 'Images task complete' }));
});

gulp.task('svgs', function() {
  gulp.src('./src/img/*.svg')
    .pipe(svgmin())
    .pipe(gulp.dest('./build/img/'))
    .pipe(notify({ message: 'SVG task complete' }));
});

gulp.task('copy', function() {
  gulp.src(['./src/*.php', './style.css'])
    .pipe(gulp.dest('./build'));
  gulp.src(['./src/inc/*.php'])
    .pipe(gulp.dest('./build/inc'));
  gulp.src(['./src/lib/*'])
    .pipe(gulp.dest('./build/lib'));
  gulp.src(['./src/fonts/*'])
    .pipe(gulp.dest('./build/fonts'));
});

gulp.task('default', ['sass', 'scripts', 'jshint', 'svgs', 'images', 'copy'], function(event) {
  gulp.watch('src/scss/*.scss', ['sass']);
  gulp.watch('src/js/*.js', ['scripts']);
  gulp.watch('src/js/*.js', ['jshint']);
  gulp.watch('src/img/*.svg', ['svgs']);
  gulp.watch('src/img/*.{png,jpg,jpeg,gif,webp}', ['images']);
  gulp.watch('src/*', ['copy']);
});
