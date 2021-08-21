const gulp = require('gulp');
const sass = require('sass');
const del = require('del');

gulp.task('styles', () => {
    return gulp.src('scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task('clean', () => {
    return del([
        'css/main.css',
    ]);
});

gulp.task('default', gulp.series(['clean', 'styles']));