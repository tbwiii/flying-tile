var gulp = require('gulp');

// plugins
var watch = require('gulp-watch'),
	stylus = require('gulp-stylus'),
	prefix = require('gulp-autoprefixer'),
	minifyCSS = require('gulp-minify-css');

gulp.task('stylus', function () {
  gulp.src('./styl/styles.styl')
    .pipe(stylus())
    .pipe(prefix())
    .pipe(minifyCSS({keepBreaks:true}))
    .pipe(gulp.dest('./css'))
});

gulp.task('move', function () {
	gulp.src(['./bower_components/barekit/css/stylus/**/*.styl'])
	    .pipe(gulp.dest('./styl/barekit'));

	gulp.src(['./bower_components/barekit/js/barekit.min.js'])
	    .pipe(gulp.dest('./js'));
});

gulp.task('watch', function () {
	gulp.watch('./styl/*.styl', ['stylus']);
});

gulp.task('default', ['watch']);


gulp.task('build', ['move', 'stylus']);