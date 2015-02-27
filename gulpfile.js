var gulp = require('gulp');
var uglify = require('gulp-uglify');
var prefix = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var jshint = require('gulp-jshint');
var rename = require('gulp-rename');
var concat = require('gulp-concat');

gulp.task('minify', function () {
    var files = [
        'css/border.css',
        'css/modal.css',
        'css/loading.css',
        'css/tab.css',
        'css/form.css',
        'css/list.css',
        'css/table.css',
        'css/switch.css',
        'css/spinner.css',
        'css/notice.css'
    ];
    return gulp.src(files)
        .pipe(concat('bootstrap-mobile.css'))
        .pipe(gulp.dest('dist/css/'))
        .pipe(minifyCSS())
        .pipe(rename('bootstrap-mobile.min.css'))
        .pipe(gulp.dest('dist/css/'));
});

gulp.task('uglify', function () {
    var files = [
        'js/form.js',
        'js/loading.js',
        'js/spinner.js'
    ];
    return gulp.src(files)
        .pipe(concat('bootstrap-mobile.js'))
        .pipe(gulp.dest('dist/js/'))
        .pipe(uglify())
        .pipe(rename('bootstrap-mobile.min.js'))
        .pipe(gulp.dest('dist/js/'));
});

gulp.task('dist', ['uglify', 'minify']);

gulp.task('lint', function () {
    return gulp.src('./js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});