var gulp = require('gulp');
var uglify = require('gulp-uglify');
var less = require('gulp-less');
var prefix = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var jshint = require('gulp-jshint');
var rename = require('gulp-rename');

gulp.task('minify', function() {
    return gulp.src('css/*.css')
        .pipe(concat('bootstrap-mobile.css'))
        .pipe(gulp.dest('dist/css/'))
        .pipe(minifyCSS())
        .pipe(rename('bootstrap-mobile.min.css'))
        .pipe(gulp.dest('dist/css/'));
});

gulp.task('uglify', ['browserify-client'], function() {
    return gulp.src('build/car-finder.js')
        .pipe(uglify())
        .pipe(rename('car-finder.min.js'))
        .pipe(gulp.dest('public/javascripts'));
});

gulp.task('dist', ['uglify', 'minify']);

gulp.task('lint', function() {
    return gulp.src('./js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});