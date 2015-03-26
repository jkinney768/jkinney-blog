module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    sass: {
        options: {
          style: 'compressed'
        },
        dist: {
            files: {
                '_site/assets/styles/screen.css': 'assets/scss/screen.scss'
            }
        }
    },

    criticalcss: {
        custom: {
            options: {
                url: "http://localhost:4000",
                width: 1200,
                height: 900,
                outputfile: "_includes/critical.css",
                filename: "_site/assets/styles/screen.css", // Using path.resolve( path.join( ... ) ) is a good idea here 
                buffer: 800*1024
            }
        }
    },

    // ------------------------------------
    // Shell Tasks
    //
    // Tasks the run terminal commands
    // ------------------------------------
    shell: {
        jekyllServe: {
            command: 'jekyll serve'
        },
        jekyllBuild: {
            command: 'jekyll build --config _config.yml'
        }
    },

    // ------------------------------------
    // Watch Tasks
    // ------------------------------------
    watch: {
        options: {
            livereload: true
        },
        site: {
            files: ['index.html', 'about.html', '_layouts/*.html', '_posts/*.md', '_projects/*.md', '_includes/*.html'],
            tasks: ['shell:jekyllBuild']
        },
        css: {
            files: ['assets/scss/*.scss'],
            tasks: ['sass', 'shell:jekyllBuild']
        }
    },

  });

    // Load in grunt plugins
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-shell');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-criticalcss');

    // Grunt Tasks
    grunt.registerTask('serve', ['shell:jekyllServe']);
    grunt.registerTask('default', ['sass']);

};