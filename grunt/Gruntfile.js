/*global module:false*/
module.exports = function(grunt) {

    // http://trip2themoon.com/primeros-pasos-con-grunt-para-disenadores-web/

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-newer');

    // Project configuration.
    grunt.initConfig({

        qunit: {
            //all: ['../plataforma/test_bb/index.html']
            //all: ['/var/www/html/oclemcalidad/plataforma/test_bb/*.html']
            files: {
                src: ['../plataforma/test_bb/index.html'],
                //src: ['../plataforma/test_bb/index.htm'], // Error apostado
                //src: ['/var/www/html/oclemcalidad/plataforma/test_bb/*.html'],
                options:{
                    force: true,
                    //inject: '',
                    // urls: ['../plataforma/test_bb/index.html']
                    // urls: ['http://localhost/oclemcalidad/plataforma/test_bb/']
                }
            }
        },

        connect: {
            server: {
                options: {
                    port: 8000,
                    base: '.'
                }
            }
        },

        jshint: {
            files: {
                src: ['../js/global.js'],
                //tests: ['../plataforma/test_bb/**/*.js'], // ¿Sin funcion?
                options: {
                    '-W041': true, // Use '!==' to compare with '' || Use '!==' to compare with ''
                    '-W099': true, // Mixed spaces and tabs.
                    '-W024': true, // Expected an identifier and instead saw 'this' (a reserved word).'
                    '-W030': true, // Expected an assignment or function call and instead saw an expression.
                    '-W032': true, // Unnecessary semicolon.
                    '-W033': true, // Missing semicolon.
                    '-W038': true, // 'mensaje_alert' used out of scope.'
                    '-W004': true, // 'mensaje_alert' <variable> is already defined.'
                    '-W065': true, // Missing radix parameter.'
                    //immed: false, // This option prohibits the use of immediate function invocations without wrapping them in parentheses. 

                },
            },

            options: {

                // Web de opciones: http://jshint.com/docs/options/
                // https://gist.github.com/haschek/2595796
                force: true,
                reporterOutput: '', // Si no es '', provoca Path must be a string
                browser: true, // Standard browser globals e.g. `window`, `document`.
                esnext: true,
                //ES6: true, // Allow EcmaScript 5 syntax.
                //esversion: 5, // Version de JS
                curly: true, // Asegura el uso de {} en if, for y while
                eqeqeq: false, // W116: Asegura el uso de === SIEMPRE, en vez de ==
                immed: false, // This option prohibits the use of immediate function invocations without wrapping them in parentheses. 
                latedef: true, // This option prohibits the use of a variable before it was defined.
                multistr: true, // This option suppresses warnings about multi-line strings. Deprecated
                newcap: false, // W064: This option requires you to capitalize names of constructor functions. Deprecated
                noarg: true, // This option prohibits the use of arguments.caller and arguments.callee.
                sub: true,
                undef: false, // W117: Prohibe el uso de variable no declaradas
                asi: false, // W033: This option suppresses warnings about missing semicolons.
                boss: true,
                eqnull: false, // This option suppresses warnings about == null comparisons. 
                devel: false, // Permite expresiones de desarrollo como console.log()
                globals: {
                  QUnit: true, 
                  jQuery: true,
                  define: true,
                },
            }
        },
        
        uglify: {
            // https://github.com/gruntjs/grunt-contrib-uglify

            options: {
                mangle: false,
                compress: {
                    drop_console: true
                }
            },

            js: {
                cwd: '../js',
                expand: true,   // Accede a los subdirectorios
                src: ['*.js', '!*.ugly.js'],
                dest: '../js',
                ext: '.ugly.js'
            }
        },

        sass: {

            dist: {
                expand: true,
                cwd: '../scss',
                src: ['*.scss'],
                dest: '../css',
                ext: '.css',
            }
        },

        watch: {

            css: {
                files: ['../scss/*.scss'],
                tasks: ['sass', 'cssmin'],
            },

            js: {
                files: ['../js/**/*.js', '!../js/**/*.ugly.js'],
                tasks: ['uglify'],
            },

            media: {

                files: ['../media/**/*.{png,jpg,jpeg,gif}'],
                tasks: ['newer:imagemin'],
                options: {
                    spawn: false,
                }
            }
        },

        cssmin: {
            target: {
                files: [{
                    expand: true,
                    // cwd: '../css/lib/',
                    // src: ['camera.css'],
                    // dest: '../css/lib',
                    cwd: '../css',
                    src: ['*.css', '!*.min.css'],
                    dest: '../css',
                    ext: '.min.css'
                }]
            }
        },

        imagemin: {

            main: {
                files:[{
                    expand: true,
                    cwd: '../media/',
                    src: ['**/*.{png,jpg,jpeg,gif}'],
                    dest: '../media/'
                }]
            }
        },


    });

    // Default task.
    
    grunt.registerTask('default', ['watch']);
    //grunt.registerTask('default', ['jshint','qunit']);

    grunt.registerTask( 'test', ['connect','qunit'] );

    //grunt.registerTask( '', ['watch'] );

    grunt.event.on('watch', function(action, filepath, target) {
      grunt.log.writeln(target + ': ' + filepath + ' has ' + action);
    });

};
