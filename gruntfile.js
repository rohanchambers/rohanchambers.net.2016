module.exports = function(grunt){

	// Load all of the tasks automatically using the matchdep dependency
	//require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// SASS task config
		sass: {
			dist: {
				files: {
					'assets/css/styles.css' : 'assets/sass/styles.scss'
				}
			}
		},

		concat: {
			css: {
				src: ['bower_components/normalize-css/normalize.css', 'assets/css/styles.css'],
				dest: 'assets/css/compiled.css'
			},
			js: {
				options: {
					separator: '\n;',
				},
				src: ['bower_components/jquery/dist/jquery.min.js', 'assets/js/vendor/**/*.js', 'assets/js/main.js'],
				dest: 'assets/js/compiled.js'
			}
		},

		// CSS min styles.css
		cssmin : {
			minify : {
				expand : true,
				cwd : 'assets/css/',
				src : [ '*.css', '!*.min.css' ],
				dest : 'assets/css/',
				ext : '.min.css'
			}
		},

		// JShint for scripts
        jshint: {
            all: {
                src: 'assets/js/main.js',
	            options: {
					camelcase: true,
					noempty: true,
					quotmark: 'single',
				    curly: true,
				    eqeqeq: true,
				    eqnull: true,
				    browser: true,
				    globals: {
				      jQuery: true
				    }
				}
            }
        },

        // Minify JS
        uglify: {
            all: {
                files: {
                    'assets/js/compiled.min.js': 'assets/js/compiled.js',
                }
            }
        },

        // Minify HTML
		htmlmin: {
			file: {
				options: {
					removeComments: true,
					collapseWhitespace: true
				}, files: {
					'index.html': 'index.html'
				}
			}

		},

		// Environment Production, Dev
		targethtml: {
			options: {
				curlyTags: {
					rlsdate: '<%= grunt.template.today("yyyymmdd") %>'
				}
			},
						
			dist: {
				files: {
				  'index.php': 'index-dev.php',
				  'portfolio.php': 'portfolio-dev.php',
				  'incl/dist/inc-header.php': 'incl/inc-header.php',
				  'incl/dist/inc-footer.php': 'incl/inc-footer.php'
				}
			}
		},

		// Using the BrowserSync Server for your static .html files.
		browserSync: {
			default_options: {
				files: {
					src: [
						"assets/css/*.css",
						"assets/js/**/*.js",
						"*.php",
						"incl/*.php",
						"case-study/**/*.php"
					]
				},
				options: {
					watchTask: true,
					proxy: "rohan.local/index-dev.php"
				}
			}
		},

 		// Watch task config
		watch: {
			html: {
				files: '/',
			},
			css: {
				files: 'assets/sass/**/*.scss',
				tasks: ['sass']
			},
			js: {
				files: 'assets/js/**/*.js',
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-targethtml');
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
	grunt.loadNpmTasks('grunt-browser-sync');
	grunt.loadNpmTasks('grunt-contrib-connect');

	// Dev
	grunt.registerTask('default', ['browserSync', 'watch']);

	// Production - Build app
	grunt.registerTask('prod', ['concat' ,'cssmin', 'uglify', 'targethtml', 'browserSync', 'watch']);
};