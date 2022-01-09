const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const csso = require('gulp-csso')
const include = require('gulp-file-include')
const { src, dest, watch, series } = require('gulp')
const concat = require('gulp-concat')
const autoprefixer = require('gulp-autoprefixer')
const sync = require('browser-sync').create()


function scss(){
    return src('src/scss/**.scss')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(csso())
        .pipe(concat('style.css'))
        .pipe(dest('src/css'))
}

function serve(){
    sync.init({
        server:'src'
    })
    watch('src/**.html').on('change',sync.reload)
    watch('src/scss/**.scss', series(scss)).on('change',sync.reload)
}

exports.scss = scss
exports.serve = series(scss, serve)
exports.default = series(scss, serve)