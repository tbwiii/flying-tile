var gulp = require('gulp');

// plugins
var watch = require('gulp-watch'),
	stylus = require('gulp-stylus'),
	prefix = require('gulp-autoprefixer'),
	minifyCSS = require('gulp-minify-css'),
	concat = require('gulp-concat');
	uglify = require('gulp-uglify');

gulp.task('stylus', function () {
  gulp.src('./styl/styles.styl')
    .pipe(stylus())
    .pipe(prefix())
    .pipe(minifyCSS({keepBreaks:false}))
    .pipe(gulp.dest('./css'))
});

gulp.task('scripts', function() {
  gulp.src('./js/*.js')
    .pipe(concat('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./js/'))
});

gulp.task('move', function () {
	gulp.src(['./bower_components/barekit/css/stylus/**/*.styl'])
	    .pipe(gulp.dest('./styl/barekit'));

	gulp.src(['./bower_components/barekit/js/barekit.min.js'])
	    .pipe(gulp.dest('./js'));
});

gulp.task('watch', function () {
	gulp.watch('./styl/*.styl', ['stylus']);
	gulp.watch('./js/*.js', ['scripts']);
});

gulp.task('default', ['watch']);


gulp.task('build', ['move', 'stylus', 'scripts']);